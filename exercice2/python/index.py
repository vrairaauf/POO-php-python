import datetime
class Impot:
	_tranche=[0,28000, 40000, 50000, 60000, 150000]
	_tauxIr=[0, 12, 24, 34, 38, 40]
	def getIr(self,salaire):
		salaire=salaire*12
		i=0
		for item in self._tranche:
			i+=1
			if salaire-item<0:
				return self._tauxIr[i-1]

class Employe:
	_matricule=0
	_nom=''
	_ddn=''
	_ddr=''
	_salaire=0
	_salaireage_retraite=63
	def __init__(self, nom, ddn,salaire):
		if datetime.date.today().year-int(ddn[0:4])<16:
			return False
		else:
			self._nom=nom
			self._ddn=ddn
			self._ddr=datetime.date.today()
			self._salaire=salaire
	def age(self):
		return datetime.date.today().year-int(self.ddn[0:4])

	def ancienete(self):
		return self._ddr.year-datetime.date.today().year
	def getDDN(self):
		return self._ddn
	def getDDR(self):
		return self._ddr
	def getDDRT(self):
		return self._ddn-self._salaireage_retraite
	def getSalaire(self):
		return self._salaire
	def getString(self):
		return self._nom+':'+self._ddr

		
class Formateur(Employe, Impot):
	__heureSup=0
	__remunierationHSup=7000
	def getHSup(self):
		return self._heureSup
	def __init__(self, nom, ddn,salaire, nbhs):
		Employe.__init__(self, nom, ddn, salaire)
		self.__heureSup=nbhs
	def setNbHSup(self, nbhs):
		self._heureSup=nbhs
	def SalairePaye(self):
		return self.getSalaire()+(self.__heureSup*self.__salaireage_retraite)*(1-self.getIr(self.getSalaire()))
	def ToString(self):
		return self._nom

class Agent(Employe, Impot):
	__PrimResp=0
	def __init__(self, nom, ddn,salaire, primf):
		Employe.__init__(self, nom, ddn, salaire)
		self.__PrimResp=primf
	def SalaireAPayer(self):
		return (self.getSalaire()+self.__PrimResp)*(1-self.getIr(self.getSalaire()))
raouf=Agent('raouf', '1999-12-11', 12000, 10)
print(raouf.SalaireAPayer())