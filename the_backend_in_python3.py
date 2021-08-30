def update():
    global a,i,j,w,s
    i = (i + w) % 256
    j = s[(j + s[i]) % 256]
    s[i], s[j] = s[j], s[i]

def output():
    global a,i,j,w,s
    update()
    return s[j]

def shuffle():
    global a,i,j,w,s
    for v in range(256):
        update()    
    w = (w + 2) % 256
    a = 0

def absorb_nibble(x):
    global a,i,j,w,s
    if a == 63:
        shuffle()
    s[a], s[240 + x] = s[240 + x], s[a]
    a = a + 1

def absorb_byte(b):
    absorb_nibble(b % 16)
    absorb_nibble(b >> 4)

def squeeze(out, outlen):
    global a,i,j,w,s
    shuffle()
    shuffle()
    shuffle()
    for v in range(outlen):
        out.append(output())
  
def h32(x):
    global a,i,j,w,s
    a = i = j = 0
    w = 1
    s = []
    for v in range(256):
       s.append(v)
    for c in x:
       absorb_byte(ord(c))
    shuffle()
    shuffle()
    shuffle()
    n = 0
    for v in range(32*5):
        n = 256*n +  output()
    return n

msg = "Some text ..."

s = []   
a = i = j = 0
w = 1
for v in range(256):
   s.append(v)

for c in msg:
  absorb_byte(ord(c))

def num2hextxt(x):
  res = ''
  h__ = ['0','1','2','3','4','5','6','7','8','9','a','b','c','d','e','f']
  while x > 0:
    res = h__[x % 16] + res
    x >>= 4
  return res

out = []
squeeze(out, 32)
res = 0
for n in out:
  res = res*256 + n
    
print ("SPRITZ: ", h32(msg))

import hashlib

def gcd(a,b):
    while b > 0:
        a,b = b, a % b 
    return a 

# The minimum size of the primes is 500 bits 
min = 1 << 500

# The product of the smallest odd primes
m = 3 * 5 * 7 * 11 * 13 * 17 * 19 * 23 * 29

#
# Find smallest prime greater or equal p with 500 bits
#
def nextPrime(p):
  while p < min:
    p = 47 * p + 11
  while p % 4 != 3:
      p = p + 1
  while True:
    while gcd(p, m) != 1:
      p = p + 4 
    if (pow(17,p-1,p) != 1):
      p = p + 4 
      continue
    return p

def hvar(x, r):
  num = 0
  for rr in range(r):
      bs = hashlib.md5((x+str(num)).encode()).digest()
      for b in bs:
         num = (num<<8) + b
  return num     

def root(m: str, p, q):
    """Rabin signature algorithm."""
    n = p * q
    while True:
        x = h32(m)
        sig = pow(p, q - 2, q) * p * pow(x, (q + 1) // 4, q)
        sig = (pow(q, p - 2, p) * q * pow(x, (p + 1) // 4, p) + sig) % (n)
        if (sig * sig) % (n) == x % n:
            break
        m = m + 'X'
    return [sig, m]

#Calculate the private key
p = nextPrime(hvar('one prime', 5))    
q = nextPrime(hvar('one other prime', 5))

#Calculate the public key
n = p * q

#Calculate the signature
sig = root(msg, p, q)
print("sig = ", sig)

#Verification

assert ( (sig[0] * sig[0] - h32(sig[1])) % n == 0)

print()
print("The signature was verified.")

print("n = ", n)
print("sig = ", sig)
