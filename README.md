
# Laravel Template

### Passo a passo
Clone Repositório criado a partir do template, entre na pasta e execute os comandos abaixo:

Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=Laravel
APP_URL=http://localhost:8080

DB_PASSWORD=root
```


Suba os containers do projeto
```sh
docker compose up -d
```


Acessar o container
```sh
docker compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```


Acesse o projeto
[http://localhost:8080](http://localhost:8080)

Acesse o phpmyadmin
[http://localhost:8081](http://localhost:8081)

API de categorias e filmes:
https://www.learn-laravel.cf/

Rotas:
- (get) /categories
- (get) /category/{id}
- (get) /movies
- (get) /movie/{id}
