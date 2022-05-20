<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Site</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <form action="login.php" method="post">    

        <h1>Faça seu login:</h1>

        <?php
        $mensagem = isset($_GET['mensagem']);

        if($mensagem){
            echo "<h2>usuário não encontrado</h2>";
        }
        ?>

        <input type="email" name="email" id ="caixaEmail" size="40" value="" placeholder="Digite seu email">
        <br>

        <input type="password" name="senha" size="40" value="" placeholder="Digite sua senha">
        <br>

        <button>
            <a href="tela-entrada.php" class = "botaoIndex">Entrar</a>
        </button>
        <br>
        <button>
            <a href="tela-cadastro.php" class="botaoIndex">cadastrar</a>
        </button>
        <br>
        <button>
            <a href="listagem.php" class = "botaoIndex">Lista</a>
        </button>
        <br>
        <input type = "submit" name="login">

    </form>

</body>
</html>