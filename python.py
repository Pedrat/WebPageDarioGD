import os,sys
from Crypto.Cipher import AES
import base64

#def crypt():
ola=sys.argv[1]
msg_text = ola.rjust(32)
secret_key = b'123'.ljust(32)[:32] 

cipher = AES.new(secret_key,AES.MODE_ECB)
encoded = base64.b64encode(cipher.encrypt(msg_text))
print(encoded.decode())


    #decoded = cipher.decrypt(base64.b64decode(encoded))
    #  print (decoded.strip())
