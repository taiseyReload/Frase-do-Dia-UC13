<?php
header('Content-Type: application/json');
// Verificar se aleatorio=1 ou listar todas:

require_once('../classes/Frase.class.php');
$f = new Frase();

if (!isset($_GET['aleatorio'])) {
    $resultado = $f->ListarTodas();
} else {
    $resultado = $f->ListarAleatoria();
}

echo json_encode($resultado);
