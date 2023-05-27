# https://www.youtube.com/playlist?list=PLNuh5_K9dfQ3ItwqXlPxmzLqSxCnEHLJp

## Tips:
- start server on folder public :  php -S localhost:8888
- changes in autoload : composer dumpautoload -o


##  PHP-DI (PHP Dependency Injection)
- composer require php-di/php-di

## setup Controllers
- php-di/slim-bridge 
- use DI\Bridge\Slim\Bridge as SlimAppFactory;
- $app = SlimAppFactory::create($container);
