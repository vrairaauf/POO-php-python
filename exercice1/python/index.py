from Article import Article
from Stock import Stock
mobile=Article('AZ7654', 'Samsung', 899, 3)
pc=Article('AZ7655', 'PC', 1899, 3)
modem=Article('AZ7656', 'modem', 399, 10)
modem.__str__()
print(modem)
exit()
clavier=Article('AZ7657', 'clavier', 12, 30)
stock=Stock([mobile, pc, modem, clavier])
montre=Article('AZ7658', 'montre', 599, 5)
ajout=stock.addArticle(montre)

search=stock.searchWithInterval((300, 800))

stock.voir_stock()