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

    <title>Login</title>
</head>

<body>
    <form class="form-signin" action="index.php" method="POST">
        <img class="mb-4" src="img/login.png" alt="img-login" width="110" height="120" />

        <label for="input" class="sr-only">Usuário</label>
        <input type="text" name="usuario" id="input" class="btn-dark form-control" placeholder="Usuário" required autofocus />

        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="btn-dark form-control" placeholder="Senha" required />
        <br>

        <button class="btn btn-lg btn-block" type="submit">Entrar</button>
        <br>

        <p>Administrador: root</p>
        <p>Senha: 123</p>
        <p>≠ disso: usuário</p>
    </form>

    <?php
    if (isset($_POST['pergunta'])) {
        $pergunta = $_POST['pergunta'];
        $a1 = $_POST['a1'];
        $a2 = $_POST['a2'];
        $a3 = $_POST['a3'];
        $a4 = $_POST['a4'];
        $a5 = $_POST['a5'];
        $certo = $_POST['certo'];

        setcookie('pergunta', $pergunta, time() + 3600);
        setcookie('a1', $a1, time() + 3600);
        setcookie('a2', $a2, time() + 3600);
        setcookie('a3', $a3, time() + 3600);
        setcookie('a4', $a4, time() + 3600);
        setcookie('a5', $a5, time() + 3600);
        setcookie('certo', $certo, time() + 3600);
    }

    if (isset($_POST['usuario'])) {
        if ($_POST['usuario'] == "root" && $_POST['senha'] == 123) {
            header('Location: pergunta.php');
        } else {
            header('Location: resposta.php');
        }
    }
    ?>

</body>

</html>