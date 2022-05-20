<?php

$conexao = mysqli_connect("localhost", "root", "", "login");
$PnomeCdst = $_POST['PnomeCdst'];
$UnomeCdst = $_POST['UnomeCdst'];
$celCdst = $_POST['celCdst'];
$emailCdst = $_POST['emailCdst'];
$senhaCdst = $_POST['senhaCdst'];

// $sql_pesquisar = "SELECT * FROM cadastro WHERE email = '{$emailCdst}';"
// $valida_email = mysqli_query($conexao, $sql_pesquisar);
// print_r($valida_email);
// exit();

$sql_inserir = "insert into cadastro(Pnome, Unome, cel, email, senha) values ('{$PnomeCdst}', '{$UnomeCdst}', '{$celCdst}', '{$emailCdst}', '{$senhaCdst}')";

echo $sql_inserir;

mysqli_query($conexao, $sql_inserir);
mysqli_close($conexao);

?>