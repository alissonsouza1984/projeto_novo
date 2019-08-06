<?php  
$strcon = mysqli_connect('localhost','webfilter','webfilter','webfilter') or die('Erro ao conectar ao banco de dados requisitado');
$nome = $_POST['nome'];
$sql = "DELETE FROM teste1 WHERE pid='$nome'";
mysqli_query($strcon,$sql) or die("Erro ao tentar excluir registro");
mysqli_close($strcon);
header('Location: /alisson/consulta2.php'); 
?>