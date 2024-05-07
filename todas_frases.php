<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Todas as Frases - Filmes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-3">
		<h1 class="mb-3">Todas as Frases - Filmes</h1>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Frase</th>
					<th>Filme</th>
					<th>Ano</th>
				</tr>
			</thead>
			<tbody id="corpo_tabela">
					<tr>
					<td>Frase 1</td>
					<td>Filme</td>
					<td>1995</td>
					</tr>
			</tbody>
		</table>
		<div class="row">
            <div class="col-sm-6 text-center">
                <a href="index.php" class="btn btn-primary">Início</a>
            </div>
            <div class="col-sm-6 text-center">
                <a href="buscar.php" class="btn btn-primary">Buscar</a>
            </div>
        </div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		// Executar assim que a página for carregada:
			$(document).ready(function(){
				// Limpar a tabela:
				corpo_tabela.innerHTML = "";
				// Obter JSON:
				$.getJSON('endpoints/listar.php', function(dados){
					// Percorrer o array vindo do json:
					$(dados).each(function(item){
						$("#corpo_tabela").append("<tr><td>"+this.frase+"</td><td>"+this.filme+"</td><td>"+this.ano+"</td></tr>")
					})
				})
			})

	</script>
</body>
</html>