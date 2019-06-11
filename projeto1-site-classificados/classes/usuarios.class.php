<?php

class Usuarios{
	public function cadastrar($nome, $email, $senha, $telefone){
		$sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();
		/*nesse código acima, ele irá procurar no banco de usuários se o usuário q quer se cadastrar já tem o seu email cadastrado no banco de dados.*/

		if($sql->rowCount() == 0){

		} else {
			return false;
		}
	}
	
}





?>
