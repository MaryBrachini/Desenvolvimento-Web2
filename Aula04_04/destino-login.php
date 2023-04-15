<?php
session_start();
$usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_SPECIAL_CHARS);
$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);

if ($usuario == "123" && $senha == "123") {
	$_SESSION["usuario"] = $usuario;
	header("Location: p1.php");
} else {
	unset($_SESSION["usuario"]);
}

require 'header.php';
?>

<div class="inicio">
	<div class="bg-light p-4 mb-4 rounded">
		<h1 class="text-center">Autenticação</h1>
		<div class="p-4 mb-4 rounded" style="background-color: pink">
			<p class="text-danger bold">Falha ao efetuar autenticação.</p>
			<p class="text-danger">O usuário ou a senha estão incorretos.</p>
			<p class="text-danger">Verifique as informações e tente novamente.</p>
		</div>
	</div>
	<a href="login.php">Clique para voltar</a>
</div>
<?php
require 'footer.php';
?>