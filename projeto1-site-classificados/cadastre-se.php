<?php require 'pages/header.php'; ?>

<div class="container">
	<h1>Cadastre-se</h1>

	<?php
		require 'classes/usuarios.class.php';
		$u = new Usuarios();
		if(isset($_POST['nome']) && !empty($_POST['nome'])){
			$nome = addslashes($_POST['nome']);
			$email = addslashes($_POST['email']);
			$senha = $_POST['senha']; 
			$telefone = addslashes($_POST['telefone']);

			/*verificar se os campos foram preenchidos*/
			if(!empty($nome) && !empty($email) && !empty($senha)){
				$u->cadastrar($nome, $email, $senha, $telefone);
			} else {
				/*exibir um aviso para o usuário completar ou corrigir os dados*/
				?>
				<div class="alert alert-warning">
					Preencha todos os campos!
				</div>
				<?php
			}		
		}
	?>


	<form method="POST">
		<div class="form-group">
			<label for="nome">Seu Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control" />
		</div>
		<div class="form-group">
			<label for="nome">Seu Email:</label>
			<input type="text" name="nome" id="nome" class="form-control" />
		</div>
		<div class="form-group">
			<label for="senha">Sua Senha:</label>
			<input type="password" name="senha" id="senha" class="form-control" />
		</div>
		<div class="form-group">
			<label for="nome">Seu Telefone:</label>
			<input type="text" name="telefone" id="telefone" class="form-control" />
		</div>
		<input type="submit" value="Cadastrar" class="btn btn-default"/>
	</form>
</div>


<?php require 'pages/footer.php'; ?>
