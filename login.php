<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <?php

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        print_r($email);


        $conexao = mysqli_connect("localhost", "root", "", "login");
        $sql_pesquisar = "SELECT * FROM cadastro WHERE email = '{$email}' and senha='{$senha}'";
        $valida_email = mysqli_query($conexao, $sql_pesquisar);

       
        if (mysqli_num_rows($valida_email) > 0) {
            header('Location: entrada.php');
        }else {
            header('Location: index.php?mensagem=erro');
        }

        echo "senha: " . $senha;

    ?>

</body>
</html>