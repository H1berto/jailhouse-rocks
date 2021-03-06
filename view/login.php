<?php

	include_once('../includes/headerLogin.php');
	include_once('../app/controllers/UsuarioDAO.php');
	$logado=$_SESSION['logado'];
		$mensagemlogin="";
	if($logado==false){
		if (isset($_POST['logar'])) {
			$dao= new UsuarioDAO;
			$email =$_POST['email'];
			$senha =$_POST['senha'];
			$dao->setEmail($email);
			$dao->setSenha($senha);
			$result=$dao->loginUsuario();
			if($result->login==1){
				$logado=true;
				$_SESSION['logado']=$logado;
				$dadosUsuario=$dao->buscarDadosUsuario();
				$_SESSION['id']=$dadosUsuario->id_usuario;
				$_SESSION['nome']=$dadosUsuario->nome;
				$_SESSION['email']=$dadosUsuario->email;
				$_SESSION['senha']=$dadosUsuario->senha;
				$_SESSION['dataNascimento'] =$dadosUsuario->data_nascimento;
				$_SESSION['foto']=$dadosUsuario->foto;
				header('Location: usuario/index.php');
				die();
			}else{
				$mensagemlogin="Usuario não encontrado! Tente novamente.";
			}
		}
	}else{
		header('Location: usuario/index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Jailhouse Rock's - Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../assets/img/icons/guitar.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
	<!--===============================================================================================-->

</head>

<body>
	<header class="header" class="alt">
		<div class="voltar">
	
				<a href="index.html"><i class="fa fa-arrow-left icon"></i></a>

		</div>
		<h1 class="titulo-login">Jailhouse Rock's</h1>
	</header>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img class="img-diabinho" src="../assets/img/login/diabinho.png" alt="rock">
				</div>

				<form class="login100-form validate-form" action="login.php" method="POST">
					<span class="login100-form-title">
						Login
					</span>
					<?php 
					if ($mensagemlogin!="") {
						echo "<div style=\"width:300px;font-size:12px;height:60px;margin-top:-50px;\" class=\"msgcadastro alert alert-warning alert-dismissible fade show\" role=\"alert\">
  								$mensagemlogin
  								<button style=\"margin-top:-15px;\" type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
   									<span aria-hidden=\"true\">&times;</span>
  								</button>
							</div>";
					}
					?>
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="senha" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button  class="login100-form-btn" type="submit" name="logar">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">

						<a class="txt2" href="#">
							Esqueci Minha Senha
						</a>
					</div>

					<div class="text-center p-t-20">
						<a class="txt3" href="cadastro.php">
							Criar conta
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="../assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="../assets/js/login.js"></script>

</body>

</html>