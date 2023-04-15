<?php 
    session_start();
    date_default_timezone_set('America/Sao_Paulo');

    if(!isset($_SESSION["usuario"]) || empty($_SESSION["usuario"])){
        header("Location: login.php");
    }

    require 'header.php'
?>
<div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Perfil</h1>
</div>
<div>
    <p>Nome: Usuario</p>
    <p>Email: meu@email.com</p>
    <p>Telefone: (17)9999-9999</p>
    <p>Endereço: Rua da minha casa</p>
    <p>Cidade: Votuporanga</p>
    <p>Estado: São Paulo</p>
    <?php 
        if(isset($_COOKIE['cookie_teste'])){
            echo "<p>Você visitou essa página em " . date('d-m-Y - H:i:s') ." &#127850;&#127850;</p>";
        } else{
            echo "<p>Você NUNCA PASSOU por aqui.</p>";
            setcookie('cookie_teste', 'valor', time() + 30);
        }
    ?>
    
</div>

<?php 
    require 'footer.php'
?>