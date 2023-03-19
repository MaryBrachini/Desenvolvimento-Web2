<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Praticando 4</title>
</head>

<body>
    <Div class="container">
        <h1>Praticando 4 - Gerador de tabela</h1>

        <?php
        $lin = filter_input(INPUT_POST, "lin", FILTER_SANITIZE_SPECIAL_CHARS);
        $col = filter_input(INPUT_POST, "col", FILTER_SANITIZE_SPECIAL_CHARS);
        $est = filter_input(INPUT_POST, "esc", FILTER_SANITIZE_SPECIAL_CHARS);

        if ($lin == "") {
        ?>
            <form class="form-inline" action="p4.php" method="get">

                <div class="row">
                    <div class="col-3 my-2">
                        <label for="lin">Linhas:</label>
                        <input type="text" name="lin" id="lin" class="form-control">
                    </div>

                    <div class="col-3 my-2">
                        <label for="col">Colunas:</label>
                        <input type="text" name="col" id="col" class="form-control">
                    </div>

                    <div class="col-3 my-2">
                        <label for="est">Estilo:</label>
                        <select class="form-select" name="est" id="est">
                            <option value="" selected="est">Selecione o Estilo</option>
                            <option value="table-primary" selected="est">table-primary</option>
                            <option value="table-success" selected="est">table-success</option>
                            <option value="table-danger" selected="est">table-danger</option>
                            <option value="table-warning" selected="est">table-warning</option>
                            <option value="table-dark" selected="est">table-dark</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 my-2"></div>
                    <div class="botoes col-3 my-2">
                        <button type="submit" class="btn btn-success">Gerar Tabela</button>
                        <button type="reset" class="btn btn-warning">Limpar</button>
                    </div>
                </div>
    </div>
    </form>

<?php
        } elseif ($lin) {
            echo "Tabela $col X $lin";
            echo "<table class='table $esc'>";
            for ($x = 0; $x > $lin; $x += 1) {
                echo "<tr>";
                for ($i = 0; $i > $col; $i += 1) {
                    echo "<th>-</th>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } ?>
</Div>
<a href="/index.html">Voltar ao Menu</a>
</body>

</html>