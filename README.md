<p align="center"><a href="#"><img src="public/assets/img/logominer.png" width="400" alt=""></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Sobre o teste

O projeto é para um teste para a empresa Miner Tecnologia, que consiste em criar uma aplicação utilizando Laravel, MySql e quaisquer outras tecnologias que julgar 
benéficas ao projeto. A aplicação deve prover um **sistema de Login** e **nível de acesso** simples. 

O administrador poderá visualizar algumas coisas das quais os usuários sem permissão não irão ver. Para o teste eu criei a lista de usuários onde só o admin consegue visualizar... Se você criar um usuário de categoria comum, se ele tentar acessar a rota via url ele receberá um erro de não autorizado, e nem mesmo ele terá acesso a visualização do menu "Usuários".

## Sobre o Projeto

Sistema feito em Laravel na versão 9.19. Abaixo cito algumas tecnologias usadas no projeto. Versão do **PHP usado foi: PHP 8.1.10**  

**Seeders:** Os seeders são arquivos utilizados em frameworks de desenvolvimento web, como o Laravel, para popular o banco de dados com dados pré-definidos. Eles são uma forma de automatizar o processo de inserção de dados e garantir que, durante o desenvolvimento e teste de uma aplicação, o banco de dados tenha dados para serem usados. Com os seeders, é possível inserir dados iniciais, criar usuários e atribuir permissões, etc.

**Middlewares:** Foi utilizado o middleware Auth para autenticação e também criei um middleware chamado check.admin para ser checado se o usuário conectado é um usuário de categoria admin. Se for ele terá acesso as rotas, se não for ele receberá um erro de não autorizado.

**Relationships:** Ter um sistema bem elaborado e com relacionamentos entre tabelas bem estruturados traz diversos benefícios, como facilitar a manutenção do código, garantir a integridade dos dados, aumentar a escalabilidade e flexibilidade do sistema. Além disso, o uso de recursos como "delete on cascade" ajuda a evitar erros de integridade referencial e a garantir que as informações do banco de dados sejam precisas e atualizadas.

**Clean Code:** É importante ter uma nomenclatura clara e congruente no seu projeto porque isso facilita muito a vida de futuros desenvolvedores que venham a trabalhar no mesmo código. Com nomes bem escolhidos e que sigam um padrão, fica muito mais fácil entender qual é o papel de cada elemento do sistema, qual é a relação entre eles e como eles se conectam. Todas as pastas estão bem estruturadas e de fácil encontro. 

**Feature Test:** Também são conhecidos como testes de aceitação ou testes end-to-end. Esses testes são projetados para verificar se uma determinada funcionalidade ou recurso do sistema está funcionando corretamente, simulando as ações do usuário e verificando os resultados esperados.

## Passo a passo e comandos para rodar em sua máquina localhost.

(Todos os comandos citados aqui devem ser inseridos no terminal na pasta raiz do projeto)

- Faça o clone do repositório e cole no terminal com um **git clone**.

- Encontre o arquivo chamado **.env.example** que está fora das pastas e renomeie-o tirando o ".example" e deixe apenas **.env**. Ele é o arquivo que fará a conexão com o seu banco de dados. 

- Rode o comando **composer install** para instalar todas dependencias de bibliotecas utilizadas no projeto.

- Rode o comando **php artisan key:generate**

- Rode o comando **php artisan migrate --seed** para que o Laravel faça a instalação das tabelas no banco de dados, juntamente com os seeders que irão inserir alguns dados fictícios para que as tabelas já venham populadas para teste. 

- Rode o comando **php artisan serve** em um terminal a parte para que fique rodando o servidor.

- Acesse a url http://127.0.0.1:8000 para efetuar Login.

- Você poderá fazer login com esses usuários:

Admin: **Email:** admin@teste e **Senha:** teste123 (Acesso a tudo)
Gerente: **Email:** gerente@teste e **Senha:** teste123 (Acesso a quase tudo, com exceção de usuários e de permissão de excluir as coisas)
Comum: **Email:** comum@teste e **Senha:** teste123 (Acesso somente a visualizar index de produtos)

## Rodar o teste básico de Feature Test

- No terminal, rode **php artisan test**.
