class Enfant:
	def __init__(self, nom, niveau):
		self.__nom=nom
		self.__niveau=niveau
	def __str__(self):
		return self.__nom
	@classmethod
	def instanceRaouf(cls, nom, niveau):
		return cls(nom, niveau)
raouf=Enfant.instanceRaouf("raouf", 7)
print(raouf)