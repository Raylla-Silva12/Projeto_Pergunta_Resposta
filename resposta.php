<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Raylla S." />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/estilo.css" />

	<title>Questão</title>
</head>

<body>
	<?php
	if (isset($_COOKIE['pergunta'])) {
		$Pergunta = $_COOKIE['pergunta'];
		$aa1 = $_COOKIE['a1'];
		$aa2 = $_COOKIE['a2'];
		$aa3 = $_COOKIE['a3'];
		$aa4 = $_COOKIE['a4'];
		$aa5 = $_COOKIE['a5'];
		$certinho = $_COOKIE['certo'];
	}
	?>

	<form method="post" class="form-signin" action="resultado.php">
		<label class="label-click"><?php echo $Pergunta; ?></label>
		<br><br>

		<input type="radio" id="op-1" name="opcao" value="a">
		<label for="op-1" class="label-click"><?php echo $aa1; ?></label>
		<br>
		<input type="radio" id="op-2" name="opcao" value="b">
		<label for="op-2" class="label-click"><?php echo $aa2; ?></label>
		<br>
		<input type="radio" id="op-3" name="opcao" value="c">
		<label for="op-3" class="label-click"><?php echo $aa3; ?></label>
		<br>
		<input type="radio" id="op-4" name="opcao" value="d">
		<label for="op-4" class="label-click"><?php echo $aa4; ?></label>
		<br>
		<input type="radio" id="op-5" name="opcao" value="e">
		<label for="op-5" class="label-click"><?php echo $aa5; ?></label>
		<br><br>

		<button class="btn btn-lg btn-block" name="verificar" type="submit">Verificar</button>
	</form>
</body>

</html>