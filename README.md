# UWUCRAFT

## Uwucraft

Uwucraft is website for minecraft server built using React as Frontend and Laravel as Backend

## Preview

![Preview](https://raw.githubusercontent.com/damarsimple/Uwucraft/master/screenshot/1.png)
![Preview](https://raw.githubusercontent.com/damarsimple/Uwucraft/master/screenshot/2.png)

## Preparing

this project using redis as broadcast driver and laravel echo server as broadcast server so you need it to enable notification

if you already clone the repos you need to edit .env file
DB Connection, Broadcast Driver,Cache Driver, Queue Conecntion, Redis host password and port

and change laravel-echo-server.json authost to your need

dont forget to change REDIS_CLIENT enviroment variable from phpredis to predis if you in windows
on database.php
phpredis is avaible on PECL if you want to get dll but its pain to install bruh

'client' => env('REDIS_CLIENT', 'predis'),

After that instal AuthMe,Vault,EssentialsX,Websender and Uwucraft Plugin to your server
and trigger plugin create table

if .env file not exists
- cp .env.example .env
- php artisan config:cache
- php artisan passport:install
- php artisan key:generate

then change file .env to
- DB TO YOUR NEED
- BROADCAST_DRIVER = redis
- CACHE_DRIVER = redis
- QUEUE_CONECTION = redis

then run php artisan migrate to add necessary column to table
then run php artisan db:seed --class=itemsdata if you want to add dummy items

then run this command
- composer install
- npm install
- npm install -g laravel-echo-server //notification component add sudo if you on linux
- npm run watch
- php artisan serve // to start test server 
- php artisan passport:install
- redis-server
- php artisan queue:work
- laravel-echo-server start

## Game Server Dependency

Make Sure this enabled in your Spigot Server:

- [VAULT](https://www.spigotmc.org/resources/vault.34315/)
- [AuthMe](https://www.spigotmc.org/resources/authmereloaded.6269/)
- [EssentialsX](https://www.spigotmc.org/resources/essentialsx.9089/)
- [WebSender](https://www.spigotmc.org/resources/websender-send-command-with-php-bungee-and-bukkit-support.33909/)
- [Uwucraft-Plugin](https://github.com/damarsimple/Uwucraft-Plugin)

## Webserver Requirements

Needed and Already Installed :

- [Laravel](https://laravel.com/)
- [React-LaravelUI](https://packagist.org/packages/laravel/ui)
- [Predis](https://packagist.org/packages/predis/predis)
- [xPaw Query Library](https://packagist.org/packages/xpaw/php-minecraft-query)
- [MediaRise WebSender](https://www.spigotmc.org/resources/websender-send-command-with-php-bungee-and-bukkit-support.33909/)

Program needed :

  PHP version 7.4 or higher is required

- [Redis](https://redis.com/)
- [Composer](https://getcomposer.org/)
- [NodeJS](https://nodejs.org/)
- [laravel-echo-server](https://nodejs.org/)

## Credit

- [Laravel](https://laravel.com/)
- [React](https://reactjs.org/)
- [Redis](https://redis.com/)
- [Composer](https://getcomposer.org/)
- [NodeJS](https://nodejs.org/)
- [xPaw](https://github.com/xPaw/PHP-Minecraft-Query)
- [AuthMe](https://www.spigotmc.org/resources/authmereloaded.6269/)
- [VAULT](https://www.spigotmc.org/resources/vault.34315/)
- [EssentialsX](https://www.spigotmc.org/resources/essentialsx.9089/)
- [MediaRise](https://www.spigotmc.org/resources/authors/mediarise.75913/)
