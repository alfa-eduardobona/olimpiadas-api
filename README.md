# primeiros passos

```
docker-compose up
```

```
docker-compose exec laminas bash

composer install
# ou
composer update

# para habilitar para modo de desenvolvedor
composer development-enable 

# para atualizar o banco (de dentro da vm)
./vendor/bin/doctrine-module orm:schema-tool:update --force
./vendor/bin/doctrine-module orm:schema-tool:update --dump-sql
ou
php ./vendor/bin/doctrine-module orm:schema-tool:update --force
php ./vendor/bin/doctrine-module orm:schema-tool:update --dump-sql

# ou para quem tiver problemas
php ./vendor/doctrine/doctrine-module/bin/doctrine-module
php ./vendor/doctrine/doctrine-module/bin/doctrine-module
```


