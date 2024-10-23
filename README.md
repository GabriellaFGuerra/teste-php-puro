# Sistema de Cadastro e Login em PHP

Este projeto é uma aplicação simples em PHP puro que implementa um sistema de cadastro de usuário e login. Ele faz uma requisição a uma API pública para buscar o título de um post, que é armazenado junto com os dados de cadastro do usuário. O sistema também permite o login do usuário e redireciona para uma página privada após a autenticação bem-sucedida.

## Funcionalidades

- **Cadastro de Usuário**: Os usuários podem se cadastrar com nome, email, código único, senha e título. O título é obtido automaticamente da API pública `https://jsonplaceholder.typicode.com/posts/1` e armazenado no banco de dados.
- **Login de Usuário**: O login é feito utilizando o email e a senha. Se as credenciais estiverem corretas, o usuário é redirecionado para uma página privada.
- **Autenticação Simples**: Validação das credenciais no login com redirecionamento em caso de sucesso.

## Requisitos

- **PHP** 7.4+
- **MySQL** ou MariaDB
- Servidor Apache ou Nginx (ou usar o PHP embutido para desenvolvimento)

## Instalação

1. Clone este repositório em sua máquina local:

   ```bash
   git clone https://github.com/GabriellaFGuerra/teste-php-puro.git
   ```

2. Entre no diretório:

    ```bash
    cd teste-php-puro
   ```

3. Configure o banco de dados:

- Crie o banco de dados:

    ```sql
    CREATE DATABASE test CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
    ```

- Crie a tabela de usuários:

    ```sql
        CREATE TABLE `test`.`users` (`in_user` INT NOT NULL AUTO_INCREMENT , `name_user` VARCHAR(30) NOT NULL , `email_user` VARCHAR(40) NOT NULL , `password_user` VARCHAR(128) NOT NULL , `title_user` VARCHAR(74) NOT NULL , `code_user` VARCHAR(40) NOT NULL , PRIMARY KEY (`in_user`)) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_unicode_ci;
    ```

- Configure o banco de dados dentro do arquivo ```connection.php```:

    ```php
    $host = 'localhost';
    $dbname = 'test';
    $username = 'root';
    $password = 'sua-senha';
    ```

4. Rode o servidor local de sua preferência

5. Para a página de cadastro use a rota ```localhost:8000/register.php```
