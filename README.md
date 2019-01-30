![ExactaWorks](https://media.licdn.com/dms/image/C4E0BAQGCIoA-oIV6ZA/company-logo_400_400/0?e=1556755200&v=beta&t=GrFl3wbJ5QyLREvl2jnwDaF2oEB6doTmQfQ_CLh146k)

# Requisitos iniciais da aplicação.
Ter instalado o docker, docker-compose e composer

* https://docs.docker.com/install/
* https://docs.docker.com/compose/install/
* https://getcomposer.org/download/


### Iniciar aplicação e infraestrutura docker.

Após o clone do projeto entre no diretorio do mesmo (trabalhe-conosco-backend-dev) e execute os comandos abaixo.

- composer install (Responsavél por instalar as dependências do projeto)
- docker-compose up -d (Ele ira subir toda a infraestrutura necessária para o projeto)

### Iniciando estrutura de banco de dados necessária para o projeto.

Para isto foi criado Migrations e Seeds, basta executar os seguintes comandos.

- php artisan migrate --database=mysql2 (Cria a estrutura do banco de dados)

## Consultando a API

Na API é possivel fazer consultas de forma performatica tanto no Mysql como no ElasticSearch através das url abaixo.

- [GET] http://127.0.0.1:9000/api/gastos/ (Busca todos os gastos)
- [GET] http://127.0.0.1:9000/api/gastos/{id} (Busca o gasto baseado no id)
- [POST] http://127.0.0.1:9000/api/gastos (Post do nome,descricao,valor,tag via form-data para api criar os registros no banco de dados)


## Consultando o Cliente

- http://127.0.0.1:9000/exacta (Tela que lista todas as inforamções de gasto.)

- http://127.0.0.1:9000/exacta/novogasto (Nesta tela criamos os novos registros de gasto)

- http://127.0.0.1:9000/exacta/detalhe/{id} (Exibe os detalhes de um gasto especifico, basta passar o id na url)

## Imagens das telas do Cliente.

- Tala que faz a listagem de gastos.

![Listar Gasto](imgs_readme/listar_gasto.png?raw=true "Title")

- Tala que exibe os detalhes de cada gastos.

![Detalhe Gasto](imgs_readme/detalhe_gasto.png?raw=true "Title")


- Tala responsável pela criação de novos gastos.

![Criar Novo Gasto](imgs_readme/criar_gasto.png?raw=true "Title")


### Tecnologias Utilizadas no desafio.

- Montagem do ambente em Docker
- Vue.js
- Bootstrap


<b>Deixei o arquivo .env preenchido para comodidade na hora de testar o ambiente, em um cenario real o .env não deve ficar no github.</b>