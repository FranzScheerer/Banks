
'''
  Rabin Signature Algorithm
  Copyright (c) 2021 Franz Scheerer, all rights reserved 
'''  

import hashlib

def hvar(x, r):
  num = 0
  for rr in range(r):
      bs = hashlib.md5((x+str(num)).encode()).digest()
      for b in bs:
         num = (num<<8) + b
  return num     

n =  544845798437034147813970220138333987621430679986481798114878366358039645044640839016562592992182295729297055403527641541474193637526754279807760301500838475060886302283525587864323561325798605510349176122305005643374030078713701119904568426692953907025821012523562729748486268943256303301939655264864764726938079844656263480124043189289333164849621435080198734518829924142968573566217
sig =  {'m': 'Rabin signature algorithm is very easy.X', 's': 283488023296742142205093310273094736088929550785165331840471205054736932214192605717333072912066794556054642289888636466454165999865342470016109831123224013389982337035359477994684320656595554586510152762695578792500441241828052840268715788502620753193267665066818065891541344994271345320196864525623236072639207814722572236138997972543576920491844053069856627021542183586300445003616}
assert ( (sig['s'] * sig['s']) % (n) == hvar(sig['m'], 8) )

print("The signature was verified!")
