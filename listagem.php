<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>
<body>

    <h1>Listagem de Cadastros</h1>
    <?php

    $conexao = mysqli_connect("localhost", "root", "", "login");
    $sql_pesquisar = "select * from cadastro";
    $resultado = mysqli_query($conexao, $sql_pesquisar);
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "Primeiro Nome: {$linha['Pnome']} ";
        echo "<br>";
        echo "Último Nome : {$linha['Unome']} ";
        echo "<br>";
        echo "Celular: {$linha['cel']} ";
        echo "<br>";
        echo "Email: {$linha['email']}";
        echo "<br>";
        echo "//////";
    }
    ?>
    
</body>
</html>