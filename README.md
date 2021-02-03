# spa-with-vue-js-and-api-laravel
SPA com Vue JS e  API com Laravel

COMANDOS: 
- npm install -g vue-cli //INSTALAR VUE
- vue init webpack social
- - cd social
- - npm run dev

- npm run build //PARA COMPILAR CODIGO PARA PRODUÇÃO
- php -S localhost:8000 //PARA RODAR A PASTA DIST EM UM SERVIDOR PHP

# instalar laravel
- composer create-project --prefer-dist laravel/laravel webservice "5.5.*"

# após o gitclone para trazer a pasta vendor
- composer update

# instalar laravel/passport
- composer require laravel/passport

# migrate
- php artisan migrate

# configurar passport no projeto
- php artisan passport:install

# adicionar no User.php:
- use Laravel\Passport\HasApiTokens
- use HasApiTokens, HasFactory, Notifiable;

# no config/auth
- 'driver' => 'passport' no api