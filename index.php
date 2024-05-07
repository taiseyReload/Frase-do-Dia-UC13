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
                <p class='card-text' id="frase">...</p>
                <p class='card-subtitle text-muted' id="filme">...</p>
                <a href="#" onclick="obter_nova_frase()" class="btn btn-success mt-4" id="novafrase">Nova frase</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // Código a ser executado assim que a página for carregada:
            $(document).ready(function(){
                obter_nova_frase();
            });

            // Função para obter nova frase:
            function obter_nova_frase(){
                $.getJSON('endpoints/listar.php?aleatorio=1', function(dados){
                    frase.textContent = dados[0].frase;
                    filme.textContent = dados[0].filme + ", " + dados[0].ano;
                })
            }
    </script>
</body>

</html>