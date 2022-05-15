<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <h1>Reailize seu cadastro</h1>

    <form action="cadastroBD.php" method="post">

    <label for = "PnomeCdstLabel"> Primeiro Nome:</label> <input type = "text" name ="pnomecdst" id ="PnomeC" size="40" value ="" placeholder ="Digite seu primeiro nome">
    <br>
    <label for = "UnomeCdstLabel"> Ultimo Nome:</label> <input type = "text" name ="UnomeCdst" id ="UnomeC" size="40" value ="" placeholder ="Digite seu último nome">
    <br>
    <label for = "celCdstLabel"> Celular:</label> <input type="text" name ="celCdst" id ="celC" size ="25" value ="" placeholder ="(19)99696-5391">
    <br>
    <label for = "emailCdstLabel"> Email:</label> <input type = "email" name = "emailCdst" id ="emailC" size = "40" value="" placeholder = "exemplo.123@gmail.com">
    <br>
    <label for = "senhaCdstLabel"> Senha:</label> <input type= "text" name ="senhaCdst" id ="senhaC" size ="30">
    <br>
    <label for = "senhaCdstConfirmLabel"> Confirmar Senha:</label> <input type="text" name ="senhaCdstConfirm" id ="senhaCConfirm" size ="30">
    <br>
    <button type = "submit">Cadastrar</buttom>
    
</body>
</html>