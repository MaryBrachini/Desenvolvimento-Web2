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
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<b>Nome informado:</b> $nome<br><br>";
    echo "<b>Email:</b> $email<br><br>";
    echo "<b>Mensagem:</b> $msg<br>"
    ?>

    <?php
    $file = 'teste.txt';
    // Abre o arquivo para obter o conteúdo existente
    $current = file_get_contents($file);
    // Acrescenta a nova pessoa no arquivo
    $current .= "John Smith\n";
    // Escreve o conteúdo de volta no arquivo
    file_put_contents($file, $current);
    ?>

    <div class="botoes">
        <a type="button" class="btn btn-primary" href="p4.php">Voltar</a>
    </div>
</div>

<?php
require "footer.php";
?>