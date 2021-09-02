# oficina-composer
## aulas composer
http://www.andrebian.com/composer-na-pratica/
## install composer
    php -r "readfile('https://getcomposer.org/installer');" | php
    sudo mv composer.phar /usr/local/bin/composer
    
## create composer.json
    vim composer.json
```
set this code in file composer.json
{
  "name": "oficina-conposer",
  "description":"oficina de composer ftsl 2015",
  "require": {
      "php": ">=5.5"
  },
}
```
## install packages composer
    composer install
    
## for update the dependences future changes
    composer update


## create you own package
```
the basic required
{
	"name": "vendor/package", // name of the your package
	"description":"description of the your package",
	"licence": "licence of the your package required",
	"type": "your type of the package",
	"require":{ your dependencies }
}
```

[Install Laravel and fun](https://laravel.com/docs/8.x/installation#installation-via-composer)
