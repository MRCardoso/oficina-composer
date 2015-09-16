# oficina-composer


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


## create you owner package
```
{
	"name": "vendor/package", // name of the your package
	"description":"description of the your package",
	"licence": "licence of the your package required",
	"type": "your type of the package",
	"require":{ your dependencies }
}
```
