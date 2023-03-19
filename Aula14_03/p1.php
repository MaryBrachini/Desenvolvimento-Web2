<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Ativ28_02/index.css">
    <title>Praticando 1</title>
</head>

<body>
    <h1>Praticando 1 - Tabuada</h1>

    <?php
    $n = filter_input(INPUT_GET, "n", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($n == "") { ?>

        <form action="p1.php" method="get">
            <div class="form-body">
                <div>
                    <label for="n">Número</label>
                    <input type="text" name="n" id="n">
                </div>

                <div class="botoes">
                    <button type="submit" class="botao-enviar">Calcular</button>
                    <button type="reset" class="botao-limpar">Limpar</button>
                </div>
            </div>
        </form>

    <?php
    } elseif ($n) {
        echo "<h2> Tabuada do <b>$n</b></h2>";
        echo "<br>";

for ($i = 0; $i <= 10; $i++) { 

        $calc = $i * $n;
        echo "<p>$i x $n = $calc</p>";
        
}
    }
    ?>
<a href="/index.html">Voltar ao Menu</a>
</body>

</html>