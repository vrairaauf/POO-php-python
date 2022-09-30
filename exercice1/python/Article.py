class Article:
	
	def __init__(self, ref, nom, price, quantite):
		self.__reference=ref
		self.__nom=nom
		self.__price=price
		self.__quantite=quantite
	def get_ref(self):
		return self.__reference
	def get_name(self):
		return self.__nom
	def get_price(self):
		return self.__price
	def getCurrentPrice(self):
		return str(self.__price)+'TND'
	def __str__(self):
		return self.__nom