<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Ativ28_02/index.css">
    <title>Praticando</title>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
            padding: 10px;
        }

        .grid-item {
            padding: 3%;
            font-size: 30px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Praticando - Animais</h1>
    <?php
    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

    if ($nome == "") { ?>

        <div class="grid-container">

            <div class="grid-item">
                <a href="p2.php?nome=tatu">
                    <img src="tatu.jpeg" alt="Tatu bola" style="width: auto;height: 25%;">
                </a>
            </div>

            <div class="grid-item">
                <a href="p2.php?nome=pombo">
                    <img src="pombo.jpg" alt="Pombo domestico" style="width: auto;height: 25%;">
                </a>
            </div>

            <div class="grid-item">
                <a href="p2.php?nome=sarue">
                    <img src="sarue.jpeg" alt="Gambá" style="width: auto;height: 25%;">
                </a>
            </div>

            <div class="grid-item">
                <a href="p2.php?nome=preguica">
                    <img src="preguica.webp" alt="Bicho preguiça" style="width: auto;height: 25%;">
                </a>
            </div>
        </div>
    <?php
    } elseif ($nome == "tatu") {
        echo "<p> Você clicou no <strong>Tatu</strong>.<br>Tatu e armadilho, são uma
         família de mamíferos da ordem Cingulata. Caracteriza-se pela armadura que cobre o corpo.
          Nativos do continente americano, os tatus habitam as savanas, cerrados, matas ciliares
           e florestas molhadas.</p>"; ?>
        <p>
            <a href="p2.php?nome=tatu">
                <img src="tatu.jpeg" alt="Tatu" style="width: auto;height: 70%;">
            </a>
            <br>
            <a href="p2.php">
                Voltar ao inicio
            </a>
        </p>
    <?php
    } elseif ($nome == "pombo") {
        echo "<p> Você clicou no <strong>Pombo</strong>.<br>Columbídeos é uma família 
        e aves columbiformes que inclui os pombos, pombas, picaús, rolas e rolinhas.</p>"; ?>
        <p>
            <a href="p2.php?nome=pombo">
                <img src="pombo.jpg" alt="Pombo domestico" style="width: auto;height: 70%;">
            </a>
            <br>
            <a href="p2.php">
                Voltar ao inicio
            </a>
        </p>
    <?php
    } elseif ($nome == "sarue") {
        echo "<p> Você clicou no <strong>Gambá</strong>.<br>O gambá-de-orelha-preta, 
        também conhecido como saruê, sariguê, micurê, mucura, e timbu é uma espécie
         de gambá que habita o Brasil, Argentina e Paraguai.</p>"; ?>
        <p>
            <a href="p2.php?nome=sarue">
                <img src="sarue.jpeg" alt="Gambá" style="width: auto;height: 70%;">
            </a>
            <br>
            <a href="p2.php">
                Voltar ao inicio
            </a>
        </p>

    <?php
    } elseif ($nome == "preguica") {
        echo "<p> Você clicou na <strong>Preguiça</strong>.<br>São mamíferos arborícolas 
        e estão divididos em dois gêneros, Bradypus e Choloepus. Representam a 
        superordem Xenarthra, juntamente com os tamanduás e tatus.</p>"; ?>
        <p>
            <a href="p2.php?nome=preguica">
                <img src="preguica.webp" alt="Bicho preguiça" style="width: auto;height: 70%;">
            </a>
            <br>
            <a href="p2.php">
                Voltar ao inicio
            </a>
        </p>

    <?php
    }
    ?>

</body>

</html>