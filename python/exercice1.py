class Rectangle:
	def __init__(self, longueur, largeur):
		self.__longueur=longueur
		self.__largeur=largeur
	def __str__(self):
		return 'un rectangle '+str(self.getLongueur())+'-'+str(self.getLargeur()) 
	def perimetre(self):
		return self.__longueur*self.__largeur
	def surface(self):
		return self.__longueur*self.__largeur*2
	def getLongueur(self):
		return self.__longueur
	def getLargeur(self):
		return self.__largeur
	def setLongueur(self, nlg):
		self.__longueur=nlg
	def setLargeur(self, nlr):
		self.__largeur=nlr
class Parallelepipe(Rectangle):
	def __init__(self, longueur, largeur, hauteur):
		Rectangle.__init__(self, longueur, largeur)
		self.__hauteur=hauteur
	def __str__(self):
		return 'un parallele'
	def volume(self):
		return self.__longueur*self.__largeur*self.__hauteur
#rect=Rectangle(4, 6)
pipe=Parallelepipe(4, 6, 10)
print(pipe)