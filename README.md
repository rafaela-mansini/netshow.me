# Netshow.me

>Cadastro e listagem de pessoas

---

# 📌 Índice

- [Requisitos](#-requisitos)
- [Começando](#-começando)
- [Tecnologias Usadas](#-tecnologias-usadas)
- [Créditos](#-créditos)

# Requisitos

**Você precisa ter instalado em sua máquina o [Composer](https://getcomposer.org/). Para clonar o projeto em sua máquina, execute este comando:**

`git clone git@github.com:rafaela-mansini/netshow.me.git`

### Instalação e configuração

**No terminal dentro do projeto clonado, execute o seguinte comando**

`composer install`

**Após instalar todas as dependências do Laravel e composer, renomeie o arquivo `.env.example` para `.env` e troque as seguintes variáveis**

- APP_NAME: para o nome da aplicação;
- Crie um banco de dados e altere as configurações do mesmo no arquivo .env (DB_HOST, DB_DATABASE, DB_USERNAME e DB_PASSWORD) para as configurações de seu banco de dados criado;
- Altere as configurações de e-mail (MAIL_HOST, MAIL_PORT, MAIL_USERNAME, MAIL_PASSWORD, MAIL_ENCRYPTION e MAIL_FROM_ADDRESS) para as configurações de seu servidor de e-mail;

**Para gerar a chave da aplicação, rode o seguinte comando dentro do terminal da aplicação:**
`php artisan key:generate`

**Para que as configurações comecem a valer, limpe o cachê do Laravel com os seguintes comandos:**
`php artisan cache:clear`, 
`php artisan config:clear` e 
`php artisan config:cache`

**Por fim, crie um link simbólico para a pasta storage, para que você consiga acessar os arquivos que serão salvos rodando o comando: `php artisan storage:link`**

# Começando

### Iniciar servidor

**Dentro do terminal de aplicação rode o comando `php artisan serve` e abra o link localhost informado dentro de seu navegador para abrir a página.**

**Clique em cadastrar para ir ao formulário e faça seu cadastro. Um e-mail com o resumo das informações será encaminhado para o e-mail informado dentro do arquivo `.env`.**
**Volte para a listagem para ver as informações que foram cadastradas.**

# Tecnologias Principais
* [Laravel 7](https://laravel.com/docs/7.x)
* [Bootstrap 4](https://getbootstrap.com/docs/4.0/getting-started/introduction/)
* [JQuery](https://jquery.com/)

# Créditos

## <i>Rafaela Mansini</i>

[Github](https://github.com/rafaela-mansini) 

[LinkedIn](https://www.linkedin.com/in/rafaela-mansini) 
