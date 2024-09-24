## Projeto ATD I - 3TRI - Aplicação de Cadastro e Login

・┆✦ʚ♡ɞ✦ ┆・・┆✦ʚ♡ɞ✦ ┆・・┆✦ʚ♡ɞ✦ ┆・・┆✦ʚ♡ɞ✦ ┆・・┆✦ʚ♡ɞ✦ ┆・

## ⚜️ Índice ⚜️

[Descrição](#descri%C3%A7%C3%A3o)

[Introdução](#introdu%C3%A7%C3%A3o)

[Funcionalidades](#funcionalidades)

[Tecnologias Utilizadas](#tecnologias-utilizadas)

[Estruturas de Pastas](#estrutura-de-pastas)

[Tela de Login](#tela-de-login)

[Tela de Registro](#tela-de-registro)

[Fontes Consultadas](#fontes-consultadas)

[Autores](#autores)

*.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.*

## 📝 Descrição 📝:

Este projeto é uma aplicação de cadastro e login de usuários, com suporte a três tipos de perfis distintos:

- Admin- : Usuário com controle total sobre o sistema, capaz de gerenciar outros usuários e acessar dados sensíveis.

- Gestor- : Usuário com permissões moderadas, responsável pela administração de sua equipe.

- Colaborador- : Usuário comum, com permissões restritas e limitadas às funcionalidades básicas.

A aplicação inclui telas estilizadas de login e registro, conectadas a um back-end desenvolvido em PHP. Com o tempo, o projeto será expandido para oferecer funcionalidades de CRUD completo para gerenciamento de usuários e um sistema de autenticação robusto.

*.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.


## 📑 Funcionalidades 📑:

A aplicação oferece as seguintes funcionalidades iniciais:

- Cadastro de Usuários: Registro de novos usuários com a opção de escolher entre os perfis Admin, Gestor e Colaborador.

- Login: Sistema de autenticação de usuários com validação de e-mail e senha.

- Validação de Formulários: Implementação de regras básicas para validação de campos obrigatórios (e-mail e senha).

- Estilização: Em processo de desenvolvimento.

- Desenvolvimento Incremental: O projeto está em constante evolução e novas funcionalidades serão adicionadas com o tempo, visando maior segurança e flexibilidade.

  *.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.*

## 🔧 Tecnologias Utilizadas 🔧 :

- PHP: Backend responsável pela lógica da aplicação e conexão com o banco de dados.

- HTML5: Estrutura das páginas, fornecendo semântica e acessibilidade.

- CSS3: Estilização das interfaces, focando na experiência do usuário e responsividade.

- MySQL: Banco de dados utilizado para armazenar informações dos usuários.

- Git/GitHub: Controle de versão e colaboração em equipe para o desenvolvimento do projeto.

*.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.*

## 📂 Estrutura de Pastas 📂 :

A organização atual do projeto está dividida da seguinte maneira:

- views: Contém as páginas front-end de login e registro.

- controllers: Responsáveis pela lógica que conecta o front-end ao back-end.

- models: Definem a interação com o banco de dados MySQL.

- _css: Arquivo de estilização para a interface da aplicação.

- index.php: Arquivo principal que inicializa o sistema.

*.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.*

## 💻 Tela de Login 💻 :

A tela de login foi implementada para ser simples e funcional. Está localizada em "views/login.php" e inclui os seguintes campos:

- Email: Campo de entrada para o e-mail do usuário.
- Senha: Campo de entrada para a senha do usuário.

A validação ocorre tanto no front-end quanto no back-end, garantindo que apenas usuários registrados possam acessar o sistema.

*.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.*

## 🖨 Tela de Registro 🖨 :

A tela de registro, localizada em views/register.php, permite que novos usuários criem contas, selecionando um dos três perfis disponíveis:

- Admin
- Gestor
- Colaborador

O sistema garante a validação dos dados inseridos e a criação segura do novo usuário no banco de dados.

*.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.*

## 🔎 Fontes Consultadas 🔍 :

- Documentação oficial do [PHP](https://www.php.net/docs.php).
- Guia de boas práticas em [HTML5 e CSS3](https://developer.mozilla.org/pt-BR/docs/Web/HTML).
- Exemplos e dicas de projetos similares no [Stack Overflow](https://stackoverflow.com).

*.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.**.·:·.✧ ✦ ✧.·:·.*

## 👑 Autores 👑
Nicolly da Silva D'avila - 3ºA







