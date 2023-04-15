<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="p1.php" class="nav-link active" aria-current="page">Início</a></li>
        <li class="nav-item"><a href="p2.php" class="nav-link">Sobre</a></li>
        <li class="nav-item"><a href="p3.php" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="p4.php" class="nav-link">Contato</a></li>

        <?php
        $usuario = filter_input(INPUT_POST, "usuario", FILTER_SANITIZE_SPECIAL_CHARS);

        if (isset($_SESSION["usuario"]) && !empty($_SESSION["usuario"])) {
        ?>
            <li class="nav-item"><a href="perfil.php" class="nav-link">Perfil</a></li>
            <li class="nav-item"><a href="sair.php" class="nav-link">Sair</a></li>
        <?php
        } else {
        ?>
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
        <?php
        }
        ?>
    </ul>
</header>