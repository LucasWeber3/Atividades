<?php
$dbhost = 'localhost';
$dbuser = 'aluno';
$dbpassword = 'aluno';
$dbname = 'atv_prt_042_bd';
$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname) or die('Error connecting to MySQL Server.');

$nome = $_POST['nome'];
$idade = $_POST['idade'];

$query = "INSERT INTO teste1 (nome, idade) VALUES ('$nome', '$idade')";
$result = mysqli_query( $link, $query ) or die('Error querying database.');
mysqli_close($link);
?>