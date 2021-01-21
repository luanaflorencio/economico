initial:
	cp .env.example .env
	nano .env
	php artisan key:generate
	composer install 
	npm install  
	php artisan migrate:fresh --seed
	php artisan serve 

mi-seed:
	php artisan migrate:fresh --seed

lua-git-config:
	git config --global user.name "luanaflorencio"
	git config --global email.name "lua.m.016@gmail.com"

thierry-git-config:
	git config --global user.name "ThierryMatheus"
	git config --global user.email "thierrymatheusreal@gmail.com"

bruno-git-config:
	git config --global user.name "iBrunoManoel"
	git config --global user.email ""
