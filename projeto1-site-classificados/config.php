<?php 
/*basicamente esse arquivo irá iniciar a sessão do usuário e irá estabelecer uma conexão com o banco de dados, é melhor criar um arquivo separado, caso seja realizada alguma mudança no BD não deverá realizar a mudança em várias páginas, somente aqui. */

session_start(); /*deve ser a 1a coisa a ser feita antes do usuário digitar qlq dado na tela. ele deve estar presente em todos os arquivos seja dessa forma require ou diretamente*/

try{
	$pdo = new PDO('mysql:host=localhost; dbname=classificados', "root", "");
 } catch(PDOException $e) {
 	echo "FALHOU: ".$e->getMessage();
 	exit;
 }
?>
