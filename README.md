Versão do PHP usada 8.2.12
Versão do CakePHP usada 5.3.6
Versão MySQL usada 15.1

### 1. Banco de Dados
1. No seu servidor MySQL, crie um banco de dados chamado `seu_nome_do_banco`.
2. Importe o arquivo `banco_concessionaria.sql` (disponível na raiz deste projeto) através do phpMyAdmin.

### 2. Conexão com o Banco
1. Acesse a pasta `config/`.
2. Localize o arquivo `app_local.php`.
3. Na seção `'Datasources'` (Na linha 40), atualize as chaves `username`, `password` e `database` com as suas credenciais locais.