# Startar servidor pelo terminal pra porta 8000
start:
	php -S localhost:8000

permissao:
	sudo chmod a+x /opt/lampp/htdocs/php-example/
	sudo chmod 777 -R /opt/lampp/htdocs/php-example/

git:
	make permissao
	cd /opt/lampp/htdocs/php-example/ && git add .
