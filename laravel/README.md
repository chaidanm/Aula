baixar o projeto utilizando o git (git clone http:/github.com/laravel/laravel)

Alterar o nome do arquivo ".env.exemple" para ".env"

No arquivo ".env" ajustar a linha "APP_KEY" para "APP_KEY=base64:bKstqQS2csTR4XL4rwpZvfLPX3roOKz8pUR/oXQVB4k="

No arquivo ".env" ajustar os caminhos do banco de dados que sera utilizado (remover as marcações de comentarios e ajustar a senha para a senha local do HOTS)
 DB_CONNECTION=mysql
 DB_HOST=127.0.0.1
 DB_PORT=3306
 DB_DATABASE=site
 DB_USERNAME=root
 DB_PASSWORD=flexxo

 fazer a instalacao do composer para criar as pastas corretas do laravel "pasta vendor" (composer install)

 Fazer uma copia do banco de dados utiliadno as instruções ja disponiveis no laravel. ( php artisan migrate)

Executar o server com comando (php atisan serve)


> Extensões do PHP que devem estar habilitadas para o Laravel - PHP.ini dentro da pasta php
```
    extension=curl
    extension=fileinfo
    extension=gd
    extension=gettext
    extension=intl
    extension=mbstring
    extension=exif
    extension=zip
    extension=mysqli
    extension=pdo_mysql
```
No arquivo web.php dentro de "sources/routes/web.php" é onde e colocado as paginas utilziadas 

> ESTUDAR

coponents 
content (tables)
form
