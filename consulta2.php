<!DOCTYPE html>
<html lang="pt-br">
<head>
       <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<?php
// Criando tabela e cabeçalho de dados:
include_once("conectar.php");
#include_once("processa.php");
#echo "<table id=\"table-access\" class=\"table table-striped table-bordered\">";
echo "<table class=\"table table table-hover table table-bordered black\">";
 echo "<thead class=\"thead-dark\">"; 
      echo "<tr border-color: #05ffb0;>";
      echo "<th scope=\"col\">PID</th>";
      echo "<th scope=\"col\">COMANDO</th>";
      #echo "<th scope=\"col\">OPÇÕES</th>";
    echo"</tr>";
  echo "</thead>";
  
 $sql = "SELECT * FROM teste1";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
    $pid = $registro['pid'];
    $service = $registro['service'];
    
echo "<tbody>";
   echo "<tr>";
      echo "<td>".$pid."</td>";
      echo "<td>".$service."</td>";
      
          
     


     }

 
 mysqli_close($strcon);
 echo "</table>";
 echo "<td>";
 ?>
 <tr>
    <td>
      <form action="excluir2.php" method="post" name="teste">
       <tr>
         <td><a href=cadastro.php><input type="button" class="btn btn-success" value="processo"></a></td>
          <input name="enviar" class="btn btn-danger" type="submit" value="Excluir"></td>
           <tr>
             <td>
               <input name="nome" type="text" placeholder="Digite o PID para Excluir"><td>

 <?php
 echo "</td></tr>";
 
 #echo "<a href=excluir.php> type=\"button\" class=\"btn btn-danger\">Deletar</button></a>";
 ?>
 