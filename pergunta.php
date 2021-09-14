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

    <title>Criar Pergunta</title>
</head>

<body>
    <form class="form-signin" action="index.php" method="POST">

        <input type="text" name="pergunta" class="btn-dark form-control" placeholder="Pergunta" required autofocus />
        <br>
        <input type="text" name="a1" class="btn-dark form-control" placeholder="Alternativa 1" required autofocus />
        <br>
        <input type="text" name="a2" class="btn-dark form-control" placeholder="Alternativa 2" required autofocus />
        <br>
        <input type="text" name="a3" class="btn-dark form-control" placeholder="Alternativa 3" required autofocus />
        <br>
        <input type="text" name="a4" class="btn-dark form-control" placeholder="Alternativa 4" required autofocus />
        <br>
        <input type="text" name="a5" class="btn-dark form-control" placeholder="Alternativa 5" required autofocus />
        <br>

        <label class="label-click">Marque a alternativa correta.</label>
        <br><br>

        <label for="alt-1" class="label-click">Alternativa 1</label>
        <input type="radio" name="certo" value="a" id="alt-1" class="btn-dark form-control" required />
        <br>
        <label for="alt-2" class="label-click">Alternativa 2</label>
        <input type="radio" name="certo" value="b" id="alt-2" class="btn-dark form-control" required />
        <br>
        <label for="alt-3" class="label-click">Alternativa 3</label>
        <input type="radio" name="certo" value="c" id="alt-3" class="btn-dark form-control" required />
        <br>
        <label for="alt-4" class="label-click">Alternativa 4</label>
        <input type="radio" name="certo" value="d" id="alt-4" class="btn-dark form-control" required />
        <br>
        <label for="alt-5" class="label-click">Alternativa 5</label>
        <input type="radio" name="certo" value="e" id="alt-5" class="btn-dark form-control" required />
        <br><br>

        <button class="btn btn-lg btn-block" name="enviar" type="submit">Enviar</button>
    </form>

    <?php

    if (isset($_POST["enviar"])) {
        header('Location: index.php');
    }

    ?>

</body>

</html>