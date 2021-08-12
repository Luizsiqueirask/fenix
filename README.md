# Fenix
Grupo 7 - Fênix


## Passo a passo

- git clone https://github.com/Luizsiqueirask/fenix.git


Execulte os comandos abaixo dentro da pasta do projeto.


- composer install | composer update

- npm install


Abra o projeto no visual code:

- Criar um banco de dados com o nome de phoenix.
 abra o arquivo .env e coloca a senha e o do seu mysql.


em seguinda, o comando no terminal

	php artisan key:generate
	php artisan make:migrate
	php artisan db:seed
	

para iniciar o server:

	php artisan serve
	

por default ele vai exibir a parte do front-end

	http://127.0.0.1:8000/

no navegador para acessar a parte do backend

	http://127.0.0.1:8000/login
	http://127.0.0.1:8000/dashboard
	http://127.0.0.1:8000/panel
	
	
o usuario e a senha do usuario cadastrado no banco:

	Email:
		admin@fenix.com
		root@fenix.com
		
	Senha:
		123456
	
	
