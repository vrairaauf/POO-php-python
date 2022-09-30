class CompteBancaire:
	def __init__(self, numeroCompte, nom, solde=0):
		self.__numeroCompte=numeroCompte
		self.__nom=nom
		self.__solde=solde
	def versement(self, montant):
		self.__solde+=montant
	def retrait(self, montant):
		self.__solde-=montant
	def agios(self):
		self.__solde+=self.__solde*5/100
	def afficher(self):
		return "numero du compte:"+str(self.__numeroCompte)+"\n nom :"+self.__nom + "\n solde :"+str(self.__solde)
	def getSolde(self):
		return self.__solde
	def getNom(self):
		return self.__nom
	def __str__(self):
		return "Le Compte De ms "+self.getNom()
compte=CompteBancaire("AZ1212", "Raouf abidi", 100)
compte.versement(20)
compte.retrait(30)
print(compte.afficher())