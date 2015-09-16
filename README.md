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
## install dependencies
    composer install
