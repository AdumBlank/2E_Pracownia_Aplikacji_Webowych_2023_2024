<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skrypt PHP</title>
</head>
<body>
    <p>
        <?php
         $Float = 1;
         $Integer = 1.1 ;
         $String = "JHKJGjhgjsdhglj" ;
         echo $Float, $Integer, $String;
         echo " <br> Zadanie 2";
         $String1 = "JHKJGjhgjsdhglj" ;
         $String2 = 'JHKJGjhgjsdhglj' ;
         $String3 = <<<HER
            a
            b
            c
            d
         HER;

         $String4 = <<<'NOW'
         jhafdgkjhdfjgsjdfg
         NOW;
         echo $String, $String1, $String2, $String3
        ?>
    </p>
</body>
</html>