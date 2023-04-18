<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Frase do Dia</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center">Frase do Dia</h1>
        <div class="card my-3">
            <div class="card-body">
                <p class='card-text' id="frase">Frase</p>
                <p class='card-subtitle text-muted' id="filme">Filme, Ano</p>
                <a href="#" class="btn btn-success mt-4" id="novafrase">Nova frase</a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 text-center">
                <a href="buscar.php" class="btn btn-primary">Buscar</a>
            </div>
            <div class="col-sm-6 text-center">
                <a href="todas_frases.php" class="btn btn-primary">Todas as Frases</a>
            </div>
        </div>
    </div>
</body>

</html>