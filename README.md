<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>
<p align="center">
    Projeto básico de Crud em Laravel
    -Feito em PHP 7.4.13
    -Laravel 8
</p>

## Instalação
Para iniciar o projeto utilize os passos abaixo:

```sh
git clone https://github.com/STO11/Crud_Product.git
```

```sh
cd Crud_Product/
```

```sh
composer install
```

- Copie o arquivo .env.example para um novo arquivo .env ( cp .env.example .env )

```sh
php artisan key:generate
```

- Configure o banco de dados nas variáveis de ambiente do .env

```sh
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

```sh
php artisan migrate
```

```sh
php artisan serve
```
Acesse a url local: http://127.0.0.1:8000

- Para testes utilize 

```sh
./vendor/bin/phpunit
```
