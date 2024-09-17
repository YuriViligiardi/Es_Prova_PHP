<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
</head>
<body>
    <?php 

        $eta = 18; //Con $ si possono creare variabili di tutti i tipi
        $nome = "Yuri";

        echo "<h1>Hello world</h1>"; //Per scrivere un testo bisogna scrivere davanti "echo"
        
        echo "<p>mi chiamo" . $nome . " ed ho " . $eta . " anni</p>"; //Per scrivere delle variabili in dei paragrafi bisogna dividerli con dei . che sono chiamate concatenazioni

        echo "<p>mi chiamo $nome ed ho $eta anni</p>"; //Senno si può pure fare senza concatenazioni

        echo "<br>"; //Per andare a capo, senno basta mettere le frasi in dei paragrafi ovvero <p>

        $frase = "<h2>mi chiamo $nome ed ho $eta anni</h2>";
        echo $frase;

    ?>

    <p>prova paragrafo</p>

    <?php
        $eta = 20;
        echo "<p>mi chiamo $nome ed ho $eta anni</p>";
        $anno = 2006;

        echo "Questa variabile è di tipo: ";
        var_dump($eta);
        echo "<br>";
        echo "Questa variabile è di tipo: ";
        var_dump($anno);
        echo "<br>";

        $vero = true;
        $falso = false;

        echo "il valore true viene stampato in $vero mentre il falso viene stampato in $falso";

    ?>

</body>
</html>