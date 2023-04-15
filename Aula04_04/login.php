<?php
session_start();
if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])) {
    header("Location: p1.php");
}
require "header.php";
?>

<div class="container">

    <h1 class="text-center">Login</h1>

    <form method="POST" action="p1.php" class="form-signin" style="padding-left: 15%;">
        <div class="row col-sm-9">
            <label for="floatingInput">Usuario</label>
            <input type="text" class="form-control" id="usuario" placeholder="name" required autofocus>
        </div>

        <div class="row col-sm-9 acima">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" id="senha" placeholder="Password" required>
        </div>

        <div class="row acima">
            <div class="col-sm-4">
                <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
            </div>
            <div class="col-sm-4"> <button class="w-100 btn btn-lg btn-warning" type="reset">Limpar</button>
            </div>
        </div>
    </form>
</div>

<?php
require "footer.php";
?>