<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 3</title>
</head>

<body>
    <h1>Praticando 3 - Números Primos</h1>

    <a href="p3.php?n=1">Número 1</a>
    <a href="p3.php?n=2">Número 2</a>
    <a href="p3.php?n=3">Número 3</a>
    <a href="p3.php?n=5">Número 5</a>
    <a href="p3.php?n=20">Número 20</a>
    <a href="p3.php?n=32">Número 32</a>
    <a href="p3.php?n=37">Número 37</a>

    <?php

for($x=0; $x<=$n; $x++){
$primo = $n/$x;

if($primo == 0){
    echo"O número <span>$n</span> <span>é</span> um número <span>primo</span>. Além disso ele é im número <span>Impar<span>";
        }elseif () {
    echo"O número <span>$n</span> <span>é</span> um número <span>primo</span>. Além disso ele é im número <span>Par<span>";
} elseif () {
    echo"O número <span>$n</span> <span>não é</span> um número <span>primo</span>. Além disso ele é im número <span>Impar<span>";
} elseif ($primo == 0) {
    echo"O número <span>$n</span> <span>não é</span> um número <span>primo</span>. Além disso ele é im número <span>Par<span>"; 
}
}

    
    ?>
</body>

</html>