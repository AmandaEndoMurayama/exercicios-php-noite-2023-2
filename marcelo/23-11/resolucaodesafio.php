<?php
echo "Deu certo!<br>";
$valor = $_GET["num1"];

for ($i = 0; $i <= 10; $i++) {
    // echo $valor * $i;
    // echo"<br>";
    echo "$valor x " . $i . " = " . $valor * $i . "<br>";
}
?>