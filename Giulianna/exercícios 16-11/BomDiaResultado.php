<?php
$horario = $_GET['horas'];

if ($horario <= 12) {
    echo "Bom dia!";
}
if ($horario > 12 && $horario <= 18) {
    echo "Boa tarde!";
}
if ($horario > 18 && $horario <= 24) {
    echo "Boa noite!";
}
?>