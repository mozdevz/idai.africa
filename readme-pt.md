<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre Laravel

IDAI Admin (Branch Laravel 5.8 of MozDevz )
=====

Esta é a versão portuguesa do ficheiro [readme.md](readme.md)

IDAI Admin é um Sistema Informático, com fins relacionados com ajuda humanitaria, criado pela comunidade de desenvolvedores moçambicanos - MozDevz. 

Como instalar?
-----------
##### Utilizando docker

##### À partir do código fonte

1. Configure os requesitos mencionados acima.

2. Faça o download do código fonte.

3. Abra sua linha de comandos e navegue para `./idai.africa/`. Estando neste directório, actualize o **composer** e instale as dependências da aplicação utilizando o **composer**. (Podem ser necessárias permissões de administrador)
    <blockquote>
      composer self-update<br />
      composer install
    </blockquote>
4. Actualize os ficheiros de configuração da aplicação, por forma a corresponder com a seu ambiente local:
  - Defina a “Application URL” em `/app/config/app.php`
  - Crie um banco de dados e defina os detalhes da conexão a esse banco de dados em `/app/config/database.php`
  - Defina o nome da organização em ` `

5. Execute o comando a seguir para criar as tabelas necessárias.
    <blockquote>php artisan migrate</blockquote>
6. Carregue os dados básicos de um _seed_
    <blockquote> php artisan db:seed </blockquote>
   Caso os passos #5 e #6 falhem, talvez queira executar o comando a seguir e de seguida repetir os respectivos passos.
    <blockquote>
      composer dumpautoload

      php artisan migrate
      php artisan db:seed
    </blockquote>
7. Caso esteja a executar a aplicação pela primeira vez no _webserver_, assegure que o _webserver_ tem permissões para escrever no directório `/app/storage/`. Seria perfeito se o _web-root_ fosse o directório `/public`. As credenciais são ‘_**administrator**_’ e ‘_**password**_’

Troubleshooting [ resolução de problemas ]
----------------
Assegure-se de activar o mod_rewrite. (Para webservers apache, é suficiente executar o comando `sudo a2enmod rewrite`). Isto resolve problemas relacionados ao roteamento.



## Como ajudar?
Todas as ajudas são bem vindas.

## Licenças
Este projecto é licenciado sob a [MIT license](LICENCE).
