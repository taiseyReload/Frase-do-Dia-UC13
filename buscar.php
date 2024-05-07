<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Buscar Frases</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

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
                <button type="button" class="btn btn-primary" onclick="buscar()">Buscar</button>
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
            <tbody id="corpo_tabela">

            </tbody>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function buscar() {
            $.getJSON('endpoints/buscar.php?q=' + filme.value, function(dados) {
                // Limpar a tabela:
				corpo_tabela.innerHTML = "";

					// Percorrer o array vindo do json:
					$(dados).each(function(item){
						$("#corpo_tabela").append("<tr><td>"+this.frase+"</td><td>"+this.filme+"</td><td>"+this.ano+"</td></tr>")
					})
				})
        }
    </script>
</body>

</html>