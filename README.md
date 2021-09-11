# primeiros passos

```
docker-compose up
```

```
docker-compose exec laminas bash
composer install

# para atualizar o banco (de dentro da vm)
./vendor/bin/doctrine-module orm:schema-tool:update --force
./vendor/bin/doctrine-module orm:schema-tool:update --dump-sql
```


