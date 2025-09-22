<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testes no PHP da Aula 02 </h1>
    <p>Aula 04/05/2025 - Laura Mello</p>
    <header>
        <h2>Acima estamos dentro do HTML.</h2>
    </header>
    <?php
    echo "<h2>E a partir daqui estamos dentro do PHP.</h2>";
    $age = 20;
    $name = "Laura Mello";
    echo "Eu sou a $name e eu tenho $age anos de idade. </br>";
    echo "I'm $name and I'm $age years old.</br>";
    echo "Now that we've met, let's begin coding! </br>";

    //addition
    $num01 = 1;
    $num02 = 2;
    $result_1 = $num01 + $num02;
    echo "The result of the addition is: $result_1 </br>";

    //subtraction
    $num03 = 3;
    $num04 = 4;
    $result_2 = $num03 - $num04;
    echo "The result of the subtraction is: $result_2 </br>";

    //multiplication
    $num05 = 5;
    $num06 = 6;
    $result_3 = $num05 * $num06;
    echo "The result of the multiplication is: $result_3 </br>";

    //division
    $num07 = 7;
    $num08= 8;
    $result_4 = $num07 + $num08;
    echo "The result of the division is: $result_4 </br>";
    
    ?>
</body>
</html>