# CW CMS #

### Instalação ###

***No linux abra o terminal de comando ou windows abra o CMD (DOS)***

*Abaixo esta a sequencia de comando para instalar o projeto.*

1. git clone https://confrariaweb@bitbucket.org/confrariaweb/cw-cms.git NomeDoProjeto

2. cd NomeDoProjeto

3. composer install

Depois de finalizado crie um banco de dados e com os dados em mãos acesse a raiz do projeto e renomeie o arquivo .env.example para .env e em seguida adicione os dados do banco de dados e salve.
Os itens a serem alterados são
*DB_HOST=HOST
DB_DATABASE=DATABASE
DB_USERNAME=USER
DB_PASSWORD=PASSWORD*

*Abaixo esta o restante dos comandos de instalação*

1. php artisan key:generate

2. php artisan migrate - este comando vai instalar toda a estrutura de banco de dados necessária para o sistema

3. php artisan db:seed - este comando é opcional, porem com ele já se tem uma estrutura básica do sistema, assim como user e regras já criadas.

*Para poder rodar local pode-se usar o comando php artisan serve e acessar a url informada no prompt.*

# Criar temas #
*No admin ir em Config -> temas -> add. Colocar os dados do tema e clicar em salvar, isso criará a estrutura necessária em dois lugares específicos.*  

1. /resource/views/site/NomeDoTema
2. /public/assets/site/NomeDoTema

# Criar tipo de posts #
*Tipos de posts são todos os cadastros que teremos no site*

1. Vá em Configurações -> Opções, e ali crie todos os campos que conterá esse tipo de post.
2. Depois de criar todos os campos vá em Configurações -> Tipos de Posts, ali cadastre o tipo de post, por exemplo "Noticias" e marque logo abaixo todos os campos que conterá esse tipo de post.

*Logo apos esses passos já deve ter criado na lateral do admin esse novo tipo de post para ser utilizado.*

#Temas - Como criar e utilizar#

*No diretório /resource/views/site/NomeDoTema conterá pelo menos os seguintes diretórios, "layouts, posts, types" e pelo menos os arquivos padrões, "default.blade.php, post.blade.php e posts.blade.php" respectivamente.*

*O que deve conter em casa arquivo?*

1. layouts.blade.php - Esse arquivo é o layout do site, onde vai conter as tags html, head e body e devera contar pelo menos a função "@yield("content")" que é a responsável por chamar as paginas e indexa-las ali.

2. post.blade.php - Arquivo responsável por apresentar o "single post", ou o conteúdo de uma postagem, deve conter a estrutura minima de "@extends($layout) @section('content') aqui vai o conteúdo da pagina, todo o html @endsection".

3. posts.blade.php - Este responsável por apresentar uma listagem de posts do tipo de post correspondente, deve conter a estrutura minima de "@extends($layout) @section('content') aqui vai o conteúdo da pagina, todo o html @endsection".

*esta é a estrutura minima solicitada, sempre que instalado um novo projeto deve vir com um tema padrão, esse pode ser observado para se ter uma noção melhor de toda a estrutura disponível para se trabalhar com mais flexibilidade*