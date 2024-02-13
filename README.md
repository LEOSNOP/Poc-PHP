# Curso de LARAVEL

## Objetivo
Aprender os conceitos do Php e como a utilizar o Laravel para fazer a criação de uma pagina

**OBS: Foi usado de base o objetivo principal do curso para criação deste projeto**

## Ferramentas utilisadas

- PHP (Versão mais recente)
- Composer
- Laravel
- Xamp ou Heid

## Passos para executar o projeto

1° - Verificar se vc tem o PHP, Composer instalados na maquina
    comandos 

    ``` terminal
        php --version

        composer --version
    \```
    
2° - após o primeiro passo, escolher uma pasta de sua preferencia e fazer um git clone
    
    ``` terminal
        git clone https://github.com/LEOSNOP/Poc-PHP.git    
    \```

3° - criar o banco e configurar o arquivo .env
    Para criar o banco basta ligar o APACHE e MYSQL usando o xamp 
    acessar o localhost/phpmyadmin/ ou se preferir criar o banco pelo HEID tambem é possivel


    ``` .env
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1 
            DB_PORT=3306
            DB_DATABASE= #nome do banco que foi criado
            DB_USERNAME=root
            DB_PASSWORD= #senha caso tenha uma
    \```
4° - com o passo 3 feito, na pasta do projeto
    com o servidor MYSQL Ligado, execute o seguinte comando
    
    ``` terminal 
        php artisan migrate 
    \```

Isto vai carregar todas as migrations para o banco 

5° - rodar o servidor local 
    Através do seguinte comando 
     
     ``` terminal 
        php artisan serve 
    \```

E agora tudo certo para testar ou alterar algo dentro do projeto

## Desafio

Criar uma Pagina de eventos, com CRUD, Login e Cadastro de usuarios, usando Bootstrap 

## GIT 
    
Caso queira ver tem as versões anteriores disponiveis, que não estao 100% mas é todo o processo que tive para chegar na master atual    
