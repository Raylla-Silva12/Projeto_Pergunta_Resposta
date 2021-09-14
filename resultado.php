<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="author" content="Raylla S." />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- CSS -->
	<link rel="stylesheet" href="css/estilo.css" />
	<title>Resultado</title>
</head>

<body>

	<form class="form-signin" action="index.php" method="POST">
		<?php
		if (isset($_POST["opcao"])) {
			$opcao =  $_POST['opcao'];
			$certinho = $_COOKIE['certo'];
			setcookie('opcao', $opcao, time() + 3600);

			if ($opcao == $certinho) {
				echo '<marquee><h2>Parabéns pelo acerto!</h2></marquee>';
			} else {
				echo '<marquee><h2>Ooh, você errou...</h2></marquee>';
			}
		} else {
			echo '<marquee><h2>Algo de errado não está certo.</h2></marquee>';
		}
		?>
		<br>

		<button class="btn btn-lg btn-block" name="retornar" type="submit">Retornar</button>
	</form>
</body>

</html>