
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

### Como realizar requisições HTTP get:
Adicionar no arquivo web.php e acesse a rota [http://localhost:8080/requisicao](http://localhost:8080/requisicao)
```php
Route::get('/requisicao', function () {
    $json = \Illuminate\Support\Facades\Http::get('https://learn-laravel.cf/movie/1')->body();
    dd($json);
});
```
Em caso de sucesso irá aparecer a mensagem (em linha única sem formatação):
```json
{
    "id": 1,
    "name": "Zack and Miri Make a Porno",
    "category_id": 6,
}
```

### Como criar tela de login no Laravel (ATENÇÃO LER DESCERIÇÃO DOS VIDEOS):

- Criação login sem node: [https://youtu.be/V2s2toQNMG0](https://youtu.be/V2s2toQNMG0)
- Criação login com node: [https://youtu.be/UhOYeYoK3Bc](https://youtu.be/UhOYeYoK3Bc)
