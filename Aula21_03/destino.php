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
    echo $data;


    $rand = rand();

    if (!is_dir("contatos")) {
        mkdir("contatos");
    }

    $fp = fopen("contatos/myText-$rand.txt", "wb");
    fwrite($fp, $msg);
    fclose($fp);
    ?>

    <div class="botoes">
        <a type="button" class="btn btn-primary" href="p4.php">Voltar</a>
    </div>
</div>

<?php
require "footer.php";
?>
