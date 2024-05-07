<?php
header('Content-Type: application/json');
// Receber o nome do filme por get e retornar o resultado em json:

if (isset($_GET['q'])) {
    require_once('../classes/Frase.class.php');
    $f = new Frase();
    $f->filme = $_GET['q'];
    echo json_encode($f->BuscarPorNomeFilme());
} else {
    echo json_encode([]);
}
