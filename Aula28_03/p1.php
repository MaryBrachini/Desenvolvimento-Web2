<?php

use Claudsonm\CepPromise\CepPromise;
use Claudsonm\CepPromise\Exceptions\CepPromiseException;

require 'vendor\autoload.php';
$cep = filter_input(INPUT_POST, 'cep');
$boxcolor = 'greenBox';

try {
    $address = CepPromise::fetch($cep);
} catch (CepPromiseException $e) {
    $boxcolor = 'redBox';
    $address = $e->toArray();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .greenBox {
            background-color: lightgreen;
            border: solid green 2px;
            padding: 10px;
            margin: 10px;
        }

        .redBox {
            background-color: lightcoral;
            border: solid red 2px;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>

<body>
    <h1>Praticando CEP com Composer</h1>
    <form action="p1.php" method="POST">
        <div class="form-row">

            <div class="col-md-4">
                <label for="cep">CEP: </label>
                <input type="number" class="form-control" id="cep" name="cep">
                <br>
                <button type="submit" class="btn btn-primary ms-3">Enviar</button>
                <button type="submit" class="btn btn-warning ms-3">Limpar</button>
            </div>

        </div>
    </form>


    <?php



    if (isset($address)) {
        echo "<div class = $boxcolor>";
        if ($boxcolor == 'redBox') {
            echo "<h1>CEP: ", $cep, "</h1>";
            echo "<br>";
            echo "Detalhes do Erro: ";
            echo "<br>";
            echo "<ul>";
            echo "<li>CEP não encontrado na base do ViaCep.</li>";
            echo "<li>CEP não encontrado na base do CEP Aberto.</li>";
            echo "<li>CEP invalido (na base dos correios).</li>";
        } else {
            echo "<h1>CEP: ", $cep, "</h1>";
            echo "<br>";
            echo "<b>Rua:</b> ", $address->street;
            echo "<br>";
            echo "<b>Bairro:</b> ", $address->district;
            echo "<br>";
            echo "<b>Cidade:</b> ", $address->city;
            echo "<br>";
            echo "<b>Estado:</b> ", $address->state;
        }



        echo "</div>";
    }
    ?>

</body>



</html>