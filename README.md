# TODO para trabalho

No IndexControler e/ou view index.phtml:
- criar diagramação para 2 tabelas sendo
- uma na esquerda com o quadro de medalhas por país
- e outra na direita sendo o quadro de medalhas por atleta

ESTE CONTROLLER NÃO DEVE USAR REPOSITÓRIO

## Como vou resolver isso?
1. a view (.phtml) faz uma consulta na API por javascript
2. o controller (este php aqui) faz a consulta nele mesmo na URL 
   por meio de http request em localhost:8080/medalhas/por-pais 
   e envia para a view os dados do JSON
   
Além disso, resolver outros 2 problemas, pois nas tabelas ficarão faltando:
1. a bandeira do país na tabela de medalhas e
2. a foto do atleta na tabela de atleta

Assim sendo, precisa-se criar mais uma ou duas entidades para se relacionar
com estes objetos.

Apenas observação: nesta entidade, salve a url absoluta da imagem para ficar mais fácil

## Como enviar?

Faça um FORK do meu repositório no github,
Depois que estiver tudo certo, faça um PULL REQUEST
Através do Pull Request eu saberei avaliar.

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
# Layout final após concluído
<img alt="layout" src="/public/img/index.png" />

