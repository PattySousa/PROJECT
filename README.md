Projeto da Facudade de Engenharia de Software - Unopar 

=>Atividade Proposta:
Que consistia em desenvolver uma página web para descobrir o seu signo de acordo com a sua data de 
nascimento. A página inicial deveria conter um formulário para que o usuário inserir sua data de 
nascimento e clicar em um botão que iria redirecioná-lo para uma outra página contendo as 
principais informações do seu signo zodiacal. Para a estilização do conteúdo seria necessário utilizar 
Bootstrap e folhas de estilo próprias. 

=>Procedimentos para a realização da atividade: 
Para a realização desta atividade, utilizei o software VSCODE.  
Precisei instalar o XAMPP no computador. Fiz o download e instalei na 
minha máquina, com o link a seguir: https://www.apachefriends.org/download.html.


  * 1. Localizei o local onde o xampp foi instalado no meu computador e criei uma pasta com o nome
PROJECT,  dentro do caminho xampp\htdocs\.
  * 2. Abri o VsCode, e escolhi a opção “Open Folder”. Escolhi a pasta que criei e abri 
o projeto.
    Criei a estrutura do projeto:
    - assets
       -- css
          --- style.css
      - layouts
        -- header.ph
        - index.php
        - show_zodiac_sign.php
        - - signos.xml 
  * 3. Monte um arquivo XML, “signos.xml”. Criei a sua estrutura da seguinte forma:
        <?xml version="1.0"?> 
         <signos> 
           <signo> 
               <dataInicio>21/03</dataInicio> 
               <dataFim>20/04</dataFim> 
              <signoNome>Áries</signoNome> 
           /signo>
  * 4. Preenchi manualmente o arquivo XML com as informações de todos os signos zodiacais. Consultei as
       datas de cada signo, na página https://pt.wikipedia.org/wiki/Signo_astrol%C3%B3gico.

  * 5. Criei uma estrutura básica HTML com nome - index.php
  * 6. Criei um arquivo header.php e adicionei o link para o Bootstrap:
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
       integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
  * 7. Voltei ao arquivo index.php. Inclui nele o arquivo header.php: 
         <?php include('header.php'); ?> 
  
  * 8. Incluí um formulário com o campo “data_nascimento”, do tipo POST. Utilizei as classes
       bootstrap para a formatação dos elementos do formulário. 
       As informações deste formulário foram enviadas à página que criei em seguida, portanto 
       e inclui o atributo “action” no formulário.
          <form id="signo-form" method="POST" action="show_zodiac_sign.php"> 
         
  * 9. Implementei o arquivo “show_zodiac_sign.php”. Incluí nele o arquivo “header.php”: 
          <?php include('header.php'); ?>
       
  * 10. Criei uma variável para receber o valor da data de nascimento da página anterior com o 
       formulário:  
          $data_nascimento = $_POST['data_nascimento'];
        
  * 11. Criei também uma variável que para manipular o arquivo XML que criei anteriormente. 
        Usei a função simplexml_load_file do PHP: 
          $signos = simplexml_load_file("signos.xml");
        
  * 12. Iniciei iterando as informações do arquivo xml. A variável
        $signos contém uma lista de signos e cada tag (por exemplo 
        <dataInicio>) pode ser acessada a partir do objeto signo da seguinte forma:  
        $signo->dataInicio.

  * 13. Com lista com todos os signos e suas informações, criei a lógica 
       para apresentar ao usuário somente o signo que contem a “data_nascimento” 
       dentro do seu range de datas (dataInicio – dataFim).

  * 14. A data de nascimento contém o ano de nascimento do usuário, porém a 
dataInicio e dataFim do XML não contém o ano, portanto foi necessário criar 
funções para transformar as datas “inicio” e “fim” em datas validas. Isso foi
necessário para que seja possível verificar se a “data_nascimento” estava dentro do range de 
maneira mais fácil.

  * 15. Os prints do resultado deste projeto estão em anexo nas Imagens 1 a 6 (PROJECT)

  







           
