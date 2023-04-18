<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Buscar Frases</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"></head>
<body>
    <div class="container">
        <h1>Buscar Frases</h1>
        <hr>
        <form>
            <div class="form-group">
                <label for="filme">Filme:</label>
                <input type="text" class="form-control" id="filme" name="filme">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Buscar</button>
            </div>
        </form>
        <hr>
        <h3>Resultado da Busca:</h3>
        <table class="table table-striped">
            <tr>
                <th>Frase</th>
                <th>Filme</th>
                <th>Ano</th>
            </tr>
            <tr>
                <td>Frase 1</td>
                <td>Filme</td>
                <td>1995</td>
            </tr>
        </table>
        <hr>

        <div class="row">
            <div class="col-sm-6 text-center">
                <a href="index.php" class="btn btn-primary">Início</a>
            </div>
            <div class="col-sm-6 text-center">
                <a href="todas_frases.php" class="btn btn-primary">Todas as Frases</a>
            </div>
        </div>

    </div>

</body>

</html>