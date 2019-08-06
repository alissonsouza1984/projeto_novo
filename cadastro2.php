<!DOCTYPE html>
<html lang="pt-br">
<head>
	   <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>cadastro2</title>
</head>
<body>
	<h3>Formulario de cadastros de clientes</h3><br>
	<form name="cadastro" action="processa2.php" method="POST">
		<label>Nome: </label> <input type="text" name="nome" size="30"><br>
		<label>sobrenome</label><input type="text" name="sobrenome" size="45"><br>
		<label>sexo</label><select name="sexo">
			<option value="M">Masculino</option>
			<option value="F">Feminino</option>
		</select><br>
		<input type="submit" name="enviar" value="Enviar">

	</form>

</body>
</html>