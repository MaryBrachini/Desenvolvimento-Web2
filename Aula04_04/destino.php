<?php
require "header.php";
?>

<div class="container">

    <?php
    require "menu.php";
    ?>

    <div class="inicio">
        <div class="bg-light p-4 mb-4 rounded">
            <h1 class="text-center">Formulário para contato</h1>
        </div>
    </div>

    <?php
    $nome = filter_input(INPUT_POST, "nome");
    $email = filter_input(INPUT_POST, "email");
    $msg = filter_input(INPUT_POST, "msg");
    $data = date("d/m/Y - H:i:s");

    echo "<p>Nome informado: " . $nome . "</p>";
    echo "<p>Email informado: " . $email . "</p>";
    echo "<p>Mensagem: " . $msg . "</p>";
    echo "<p>$data </p>";
    echo "<p style='color:red'>";

    $dir = "Formulario";
    if (is_dir($dir) == false) {
        mkdir($dir);
    }

    $file = "Contato_" . date('d') . "_" . date('m') . "_" . date('Y') . "_" . rand() . ".txt";

    $text = fopen($dir . "/" . $file, "w") or die(" Não foi possivel abrir o arquivo!");

    $data = "Contato via site:" . PHP_EOL . PHP_EOL . "Data: " . date('d/m/Y - H:i:s') . PHP_EOL . "Nome: " . $nome . PHP_EOL . "Email: " . $email . PHP_EOL . "Mensagem: " . $msg . PHP_EOL . PHP_EOL . "----------------------------------------";
    fwrite($text, $data);
    fclose($text);

    echo "</p>";
    ?>

    <div class="botoes">
        <a type="button" class="btn btn-primary" href="p4.php">Voltar</a>
    </div>
</div>

<?php
require "footer.php";
?>