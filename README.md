# Comandos para subir o projeto e executar seeds do banco de dados

## Configurar variáveis de ambiente 
```
# Executar esse comando na raiz do projeto
touch .env

# Colar este conteúdo no .env

DB_ADAPTER=mysql
DB_HOST=db
DB_PORT=3306
DB_USER=alfa
DB_PASSWORD=alfa
DB_ROOT_PASSWORD=root
DB_DATABASE=olimpiadas
DB_CHARSET=utf8
```

```
docker-compose up -d --build

docker-compose exec laminas bash

composer doctrine-update

# Executa os seeds pra popular o banco de dados com dados fakes
composer seed-run
```
# Layout final
<img alt="layout" src="/public/img/index.png" />
