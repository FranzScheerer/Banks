'''
   Copyright 2021 Franz Scheerer
   all rights reserved
'''

class ECHASH:
  def update(H):
    H.i = (H.i + H.w) % 256
    H.j = H.s[(H.j + H.s[H.i]) % 256]
    H.s[H.i], H.s[H.j] = H.s[H.j], H.s[H.i]

  def shuffle(H):
    for v in range(256):
        ECHASH.update(H)    
    H.w = (H.w + 2) % 256
    H.a = 0

  def absorb_nibble(H,x):
    if H.a == 63:
        ECHASH.shuffle(H)
    H.s[H.a], H.s[240 + x] = H.s[240 + x], H.s[H.a]
    H.a = H.a + 1

  def absorb_byte(H,b):
    ECHASH.absorb_nibble(H, b % 16)
    ECHASH.absorb_nibble(H, b >> 4)

  def h(H, msg, outlen):
    H.s = list(range(256))   
    H.a = H.i = H.j = 0
    H.w = 1
    for c in msg.encode():
       ECHASH.absorb_byte(H,c)
    ECHASH.shuffle(H)
    ECHASH.shuffle(H)
    ECHASH.shuffle(H)
    out = 0
    for v in range(outlen):
        ECHASH.update(H)
        out = (out << 8) + H.s[H.j]
    return out   

  def gcd(a,b):
    while b > 0:
      a, b = b, a % b
    return a

  def nextPrime(p):
    while p % 12 != 7:
      p = p + 1
    m =  5 * 7 * 11 * 13 * 17 * 19 * 23
    m *= 29 * 31 * 37 * 41 * 43 * 47
    while True:
      q = (p+1)//4
      x1 = ECHASH.gcd(p, m)
      x2 = ECHASH.gcd(q, m)
      while x1 != 1 or x2 != 1:
        p = p + 12 
        q = q + 3
        x1 = ECHASH.gcd(p, m)
        x2 = ECHASH.gcd(q, m)
      x1 = pow(7, p-1, p)    
      x2 = pow(7, q-1, q)    
      if (x1 != 1 or x2 != 1):
        p = p + 12
        continue
      return p
      
  def addP(P,Q):
    global ecc_a, ecc_prime     
    x1 = P[0]
    x2 = Q[0]
    y1 = P[1] 
    y2 = Q[1] 
    if x1 == x2:
       s = ((3*x1*x1 + ecc_a) * pow(2*y1, ecc_prime-2, 
       ecc_prime)) % ecc_prime
    else:  
       if x1 < x2:
          x1 = x1 + ecc_prime
       s = ((y1-y2) * pow(x1-x2, ecc_prime-2, 
       ecc_prime)) % ecc_prime
    xr =  (s*s) - x1 - x2
    yr = s * (x1-xr) - y1 
    return [xr % ecc_prime, yr % ecc_prime]

  def mulP(P,n):
    global ecc_prime     
    resP = 'ZERO'
    PP = P
    while n != 0:
       if (n % 2 != 0):   
         if resP == 'ZERO':
            resP = PP
         else:
            resP = ECHASH.addP(resP,PP)
       PP = ECHASH.addP(PP, PP) 
       n >>= 1 
    return resP

  def signSchnorr(G, m, x):
    global ecc_n     
    k = h('password X' + m + 'key value') 
    R = ECHASH.mulP(G,k) 
    e = h(str(R[0]) + m) % ecc_n
    return {'s': (k - x*e) % ecc_n, 'e': e}

  def ECDSA_N(G, m, x):
    global ecc_n     
    k = h('password X' + m + 'key value') 
    r = ECHASH.mulP(G,k)[0] % ecc_n     # the NONCE
    kinv = pow(k, ecc_n-2, ecc_n)
    z = h(m + str(r)) % ecc_n
    return {'s': (kinv*(z + x*r)) % ecc_n, 'r': r}
  
    
# 20 Bytes output like in SHA-1
def h(x):
  ha = ECHASH()
  return ECHASH.h(ha,x,20)     

# **********************************************************
#  BEGIN
#        PRIVATE PART
#
maxx = 131 * 2**141
h0 = h('generate prime X*')

ecc_prime = ECHASH.nextPrime( h0 % maxx )

''' Yes, the prime is large enough'''
print ("A prime greater than 2^141") 
print ("p = ", ecc_prime)
assert(ecc_prime > 2**141)

ecc_n = (ecc_prime + 1)//4
ecc_a = -1 
ecc_b = 0

#
# Generate the base point from a password
#
x = h("password 1234567A")
if pow(x**3 + ecc_a*x + ecc_b, (ecc_prime-1)//2, 
   ecc_prime) != 1:
   x = ecc_prime - x 
y = pow( x**3 + ecc_a*x + ecc_b, (ecc_prime+1)//4,
    ecc_prime)
P = [ x , y ]
# To get a base point with prime order
P = ECHASH.mulP(P, 4)

#
# Der private Schlüssel
#

privateKey = h('some other password***X')
publicKey = ECHASH.mulP(P, privateKey)
 

message = """
    This is the message to sign.
"""

sig = ECHASH.ECDSA_N(P, message, privateKey)
#
#  END
#        PRIVATE PART
# *********************************************************


print("sig = ",  sig)
print ('P = ',P)
print ('publicKey = ',publicKey)
print ('ecc_n = ', ecc_n)
print ('ecc_a = ', ecc_a)
print ('ecc_b = ', ecc_b)
print ('ecc_prime = ', ecc_prime)

#Verification
z = h(message + str(sig['r'])) 
sinv = pow(sig['s'], ecc_n-2, ecc_n)
P1 = ECHASH.mulP(P, sinv * z)
P2 = ECHASH.mulP(publicKey, sinv * sig['r'])
r =  ECHASH.addP(P1, P2)[0]
assert( r % ecc_n == sig['r'] )

print("""
  Wir überprüfen jetzt die Nachricht: 
""" + message + """
  Ergebnis der Prüfung: """ + str(r % ecc_n == sig['r']))

