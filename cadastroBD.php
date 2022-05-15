<?php

$conexao = mysqli_connect("localhost", "root", "", "login");
$pnomecdst = $_POST['pnomecdst'];
$UnomeCdst = $_POST['UnomeCdst'];
$celCdst = $_POST['celCdst'];
$emailCdst = $_POST['emailCdst'];
$senhaCdst = $_POST['senhaCdst'];

$sql_inserir = "insert into cadastro(Pnome, Unome, cel, email, senha) values ('{$pnomecdst}', '{$UnomeCdst}', '{$celCdst}', '{$emailCdst}', '{$senhaCdst}')";

echo $sql_inserir;

mysqli_query($conexao, $sql_inserir);
mysqli_close($conexao);

?>