<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Ativ28_02/index.css">
    <title>Praticando 2</title>
</head>

<body>
    <h1>Contador</h1>
    <h2>Parametros Informados:</h2>

    <?php
    $ini = filter_input(INPUT_POST, "ini", FILTER_SANITIZE_SPECIAL_CHARS);
    $fim = filter_input(INPUT_POST, "fim", FILTER_SANITIZE_SPECIAL_CHARS);
    $inc = filter_input(INPUT_POST, "inc", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<p>Inicio: $ini</p>";
    echo "<p>Final: $fim</p>";
    echo "<p>Incremento: $inc</p>";

    if ($ini < $fim) {
        for ($x = $ini; $x <= $fim; $x += $inc) {
            echo " $x ";
        }
    } elseif ($ini > $fim) {
        for ($x = $ini; $x >= $fim; $x -= $inc) {
            echo " $x ";
        }
    }
    ?>
    <br>
    <br>
    <a href="p2.html">Voltar Pagina anterior</a>
    <br><br>
    <a href="/index.html">Voltar ao Menu</a>
</body>

</html>