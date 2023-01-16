<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "perso.php";
        $golum=new perso("Golum", 10);
        echo $golum->info();

        $frodon=new perso("Frodon",2);
        echo $frodon->info();
        $golum->attaque($frodon,10,1);
        echo" Golum à attaqué Frodon Saquet <br>";
        echo $golum->info();
        echo $frodon->info();

    ?>
</body>
</html>