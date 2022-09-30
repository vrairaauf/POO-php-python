import time
from math import ceil
import os
"""
durre=30
fin=time.time()+durre
for item in range(0, durre):
	print(ceil(fin-time.time()))
	time.sleep(1)
print("le chronometre est arreter")
"""
fichier=os.popen('php --version')

sortie=fichier.read()
print(sortie)