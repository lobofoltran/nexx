# Nexx

[![CI](https://github.com/lobofoltran/nexx/workflows/CI/badge.svg)](https://github.com/lobofoltran/nexx/actions)
[![Deploy](https://github.com/lobofoltran/nexx/workflows/Deploy%20FTP/badge.svg)](https://github.com/lobofoltran/nexx/actions)
[![Test](https://github.com/lobofoltran/nexx/workflows/Laravel%20tests/badge.svg)](https://github.com/lobofoltran/nexx/actions)

# Como testar a aplicação

## Pré-requisitos

São necessários as seguintes tecnologias intaladas na máquina local para testar a aplicação:

Tecnologia    | Versão
------------- | -------------
PHP           | ^8.1
Composer      | ^2.5
Node.js       | ^18.15

## Passo a passo

* Clone o repositório `git@github.com:lobofoltran/nexx.git`
* Dentro do diretório, utilize o comando  `composer install`
* Renomeie o arquivo `.env.example` para `.env` 
* Utilize os comandos `npm install` e `npm run dev`
* Para criar o banco de dados em sqlite, utilize `php artisan migrate --seed` e digite `yes`
* Crie uma chave para o projeto, utilize `php artisan key:generate`
* E por fim, utilize `php artisan serve --port=8000`
* O servidor local ficará disponível em `http://localhost:8000`