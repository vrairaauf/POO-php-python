class Stock:
	tab_article=[]
	def __init__(self, articles=[]):
		for item in articles:
			self.tab_article.append(item)
	def voir_stock(self):
		for item in self.tab_article:
			print(item)
	def serachWithRef(self, ref):
		if self.tab_article.count==0:
			return False
		else:
			for item in self.tab_article:
				if item.get_ref()==ref:
					return item
			return False
	def addArticle(self, article):
		if self.serachWithRef(article.get_ref()):
			return False
		else:
			self.tab_article.append(article)
			return True
	def deleteArticle(self, ref):
		if self.serachWithRef(ref):
			self.tab_article.remove(self.serachWithRef(ref))
			return True
		else:
			return False
	def updateArticle(self, ref, article):
		if self.serachWithRef(ref):
			for item in self.tab_article:
				if item.get_ref()==ref:
					item=article
					break
			return True
		else:
			return False
	def searchWithName(self, name):
		for item in self.tab_article:
			if item.get_name()==name:
				return item
		return False
	def searchWithInterval(self, interval=()):
		for item in self.tab_article:
			if item.get_price() >= interval[0] and item.get_price() <= interval[1]:
				print(item)