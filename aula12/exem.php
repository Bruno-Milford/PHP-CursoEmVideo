<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title> AULA 12 - by Curso em Video </title>
</head>
<body>
<div>
    <?php
 echo "<h3>AULA 12 - TABUADA / EX 3</h3>";
    ##estrutura de repetição com do.. while
 ### Com teste de condição no final da estrutura
 
 ##### gerando uma tabuada com o numero escolhido
 
  $numero = isset($_GET["num"]) ? $_GET["num"] : 1;
  
 echo "</br><b>*** Tabuada de $numero *</br></b> </br>";
  
  $cont = 1;
  $multi = 1;
  
  do {
   
   $multi = $numero * $cont;
   
   echo "$numero X $cont = <b>" . $multi . "</b></br>";
   
   $cont++;
  
  }while ($cont <= 10); 
  
  
    ?>
 
 <br/>
 
 <a href="aula12-3.php" class="button" style="vertical-align:middle" > <span> Voltar </span></button> </a>
    
</div>
</body>
</html>