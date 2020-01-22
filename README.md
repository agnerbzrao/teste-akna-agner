# Instruções para rodar o projeto
## Instruções para publicação
Dentro da pasta, coloque o comando: docker-compose-up. Depois acesse a url "http://localhost:8000"

Para executar o script via linha de comando, entre no container chamado php, como o seguinte comando: docker exec -it php bash

Dentro do container, entre na pasta /var/www/html e digite o comando "php -f index.php"

## Acesso ao banco de dados
Para entrar no banco, acesse a url "http://localhost:8080" e o login:root e senha:123456