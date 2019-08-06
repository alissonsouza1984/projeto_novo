<!DOCTYPE html>
<html lang="pt=br">
<head>
	 <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<title>Acesso</title>
</head>
<body>
<?php
$comando=$_POST['comando'];
if ($comando == top) {
		$output = shell_exec("top -a | sed -n '9,\$p' | sort -g"); 
		$linhas = explode("\n", $output);
	foreach($linhas as $linha) {
		$linha = trim($linha);
		$col = explode(" ", $linha);
		$pid = $col[0];
		if ($pid == "")
			continue;
			$service = end($col);
			$strcon = mysqli_connect('localhost','webfilter','webfilter','webfilter');
		if (!$strcon) {
			die("<div class=\"alert alert-danger\" role=\"alert\">
  Falhas ao se Comunicar com Base de Dados <a href=\"cadastro.php\" class=\"alert-link\">Retorne ao Menu</a>. 
</div>");
			}
		// Criando a declaração SQL:
	$sql = "INSERT INTO teste(pid, service) VALUES ('$pid', '$service')";
	
		// Executando a declaração no banco de dados:
	$resultado = mysqli_query($strcon,$sql) or die("<div class=\"alert alert-danger\" role=\"alert\">
  Falhas ao se Comunicar com Base de Dados <a href=\"cadastro.php\" class=\"alert-link\">Retorne ao Menu</a>. 
</div>");
	
	mysqli_close($strcon);
	


	}
	echo "<div class=\"alert alert-success\" role=\"alert\">
  <h4 class=\"alert-heading\">Registro inserido com sucesso</h4></div>";
}


else {
	$output1 = shell_exec("ps aux | sed -n '2,\$p' | awk '{print \$2, \$11}' | sort -g ");
			#echo "<pre>"; echo $output1;die;
		$linhas = explode("\n", $output1);
		
			foreach($linhas as $linha) {
				$linha = trim($linha);
				$col = explode(" ", $linha);
				$pid = $col[0];
				if ($pid == "")
				continue;
					$service = end($col);
					$strcon = mysqli_connect('localhost','webfilter','webfilter','webfilter');
				if (!$strcon) {
				 die("<div class=\"alert alert-danger\" role=\"alert\">
  Falhas ao se Comunicar com Base de Dados <a href=\"cadastro.php\" class=\"alert-link\">Retorne ao Menu</a>. 
</div>");
				}
		// Criando a declaração SQL:
	$sql = "INSERT INTO teste1(pid, service) VALUES ('$pid', '$service')";
	
		// Executando a declaração no banco de dados:
	$resultado = mysqli_query($strcon,$sql) or die("<div class=\"alert alert-danger\" role=\"alert\">
  Falhas ao se Comunicar com Base de Dados <a href=\"cadastro.php\" class=\"alert-link\">Retorne ao Menu</a>. 
</div>");
	#echo "Registro inserido com sucesso<br>";

	mysqli_close($strcon);
	

	}
	echo "<div class=\"alert alert-success\" role=\"alert\">
  <h4 class=\"alert-heading\">Registro inserido com sucesso</h4></div>";
}
 ?>

 <?php
echo '<pre>';
?>

<tr>
<td>
<form action="consulta1.php" method="post">
 <tr>
  <input type="button" class="btn btn-primary" value="Voltar" onClick="history.go(-1)"> </td><td><a href="consulta1.php"><input type="button" class="btn btn-success" value="top"></a></td><td><a href="consulta2.php"> <input type="button" class="btn btn-success" value="ps aux"></a></td>             
  </tr>
  <td>

</body>

