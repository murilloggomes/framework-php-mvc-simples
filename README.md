
<h1 style="text-align: -webkit-center !important;text-align-last: center !important">[Open Source] - Noodle Framework MVC - Compativel com PHP 8.2</h1> 

<p align="center">
  <img src="http://img.shields.io/static/v1?label=License&message=MIT&color=green&style=for-the-badge"/>
   <img src="http://img.shields.io/static/v1?label=STATUS&message=Desenvolvimento&color=GREY&style=for-the-badge"/>
</p>

<h2>[Status do Projeto] - ### Desenvolvimento ### - Atualizações todas as semanas !</h2>
      

### Tópicos 

:small_blue_diamond: [Descrição do projeto](#descrição-do-projeto)

:small_blue_diamond: [Funcionalidades](#funcionalidades)

:small_blue_diamond: [Deploy da Aplicação](#deploy-da-aplicação-dash)

:small_blue_diamond: [Pré-requisitos](#pré-requisitos)

:small_blue_diamond: [Como rodar a aplicação](#como-rodar-a-aplicação-arrow_forward)

## Descrição do projeto 

<p align="justify">
  Framework leve e extremamente potente para se extrair da melhor forma o php 8.2, baseado em MVC muitos já vão estar familizados! 
</p>

## Funcionalidades

:heavy_check_mark: Página Externa para acesso ao cliente (Situ institucional, e-commerce, vai da ideia da projeto).  

:heavy_check_mark: Dashboard interno já estruturado para você escalar mediante suas nececidades, com uma arquitetura MVC basta você se preocupar em Controller, Views, Moldes e Rotas e seu sistema sempre estará 100%!

:heavy_check_mark: Responsivo para todo o tipo de tela, e também nas proporções corretas para se fazer um webviews mobile dele.  

:heavy_check_mark: Extensões diversas adormecidas esperando a necessidade do usuário como chars, models, fullcalendar, entre outras  

## Pré-requisitos

:warning: [PHP 8.0.1](https://php.net/) 
:warning: [Maria DB 10.3.35](https://mariadb.org/)

## Como rodar a aplicação :arrow_forward:

No terminal, clone o projeto: 

```
sudo git clone git@github.com:murilloggomes/noodle-open-source-framework-php-82.git
```

run: "cd" no caminho da pasta do projeto (que deve ser baixa na pasta raiz realmente da aplicação)

## Como vincular o banco de dados corretamente
```
cd /app/config/db.config.php;
```
```
define("DB_HOST", "localhost"); -> Host do banco de dados, geralmente localhost ou 127.0.0.1
define("DB_NAME", "nome_banco"); -> Nome do banco criado por vocês, poderá ser qualquer nome.
define("DB_USER", "usuario_banco"); -> Usuário do banco padrão ou então um usuário criado com privilégios apenas para esse banco.
define("DB_PASS", "senha_banco"); -> Senha do usuário a cima.
define("DB_ENCODING", "utf8mb4_general_ci"); -> Estilo de encoding do banco 
```

## Casos de Uso

Depois disso pode ir direto pro login e acessar com o usuário e senha que você cadastrou ou rodar o script sql:
```
Usuário: noodle@spartechltda.com.br | Senha: @noodle123
```

Após isso se aventurar na contrução de páginas utilizando o MVC, com as routes chamando os controller e os controller chamando as views. Os dados do banco sempre será chamados dos Models por uma estrutura muito simples como:

<-------------------------------------------->
$User = Controller::model("User", $IdUser);
$nome = $User->get("nome");
<-------------------------------------------->

Ou então setar as informações como

----------------------------------------------
$User = Controller::model("User", $IdUser);
$User->set("nome", "SpartechLtda");
$User->save();
-----------------------------------------------

Com isso trouxemos um colocamos em uma váriavel o valor do nome dentro do banco user, e na segunda opção troxemos e setamos um novo valor para aquele nome daquele $IdUser de uma maneira muito simples e sem precisar tocar em nenhum momento em query. Tudo rápido fácil e totalmente seguro!

## Contribuições
<p align="center" style="position:block">
  <img src="https://user-images.githubusercontent.com/67968960/270708300-9df8faa5-07bb-471c-b242-9d0d9449623c.png" style="width:150px !important"></img>
</p> 
<p align="center">
  <a href="https://www.buymeacoffee.com/murilloggo">Buy Me A Coffee</a>
</p>
