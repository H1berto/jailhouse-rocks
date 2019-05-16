<?php

	include_once('../includes/headerLogin.php');
	include_once('../app/controllers/UsuarioDAO.php');
	$logado=$_SESSION['logado'];
	$mensagemcadastro="";
	if($logado==false){
		if (isset($_POST['cadastrar'])) {
			$dao= new UsuarioDAO;
			$nome =$_POST['nome'];
			$email =$_POST['email'];
			$senha =$_POST['senha'];
			$dtnascimento =$_POST['data'];
			$dao->setNome($nome);
			$dao->setEmail($email);
			$dao->setSenha($senha);
			$dao->setDataNascimento($dtnascimento);
			$result=$dao->cadastrarUsuario();
			if($result==1){
				//Ja existe usuario cadastrado com este email...
				$mensagemcadastro="Já existe um cadastro com este email!<br> Faça seu login.";
			}else if($result==2){
				$logado=true;
				$_SESSION['logado']=$logado;$dadosUsuario=$dao->buscarDadosUsuario();
				$_SESSION['id']=$dadosUsuario->id_usuario;
				$_SESSION['nome']=$dadosUsuario->nome;
				$_SESSION['email']=$dadosUsuario->email;
				$_SESSION['senha']=$dadosUsuario->senha;
				$_SESSION['dataNascimento'] =$dadosUsuario->data_nascimento;
				$_SESSION['foto']=$dadosUsuario->foto;
				header('Location: usuario/index.php');
				die();
			}
		}
	}else{
		header('Location: usuario/index.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jailhouse Rock's - Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/img/icons/guitar.ico"/>
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
	<header id="header" class="alt">
		<a  href="#menu"></a></div>
	</header>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img  class="img-diabinho" src="../assets/img/login/diabinho.png" alt="rock">
				</div>

				<form class="login100-form cadastro100-form validate-form" action="cadastro.php" method="POST" oninput='confpass.setCustomValidity(confpass.value != senha.value ? "As senhas não coincidem." : "")'>
					<span class="login100-form-title">
						Cadastro
					</span>
					<?php 
					if ($mensagemcadastro!="") {
						echo "<div style=\"width:300px;font-size:12px;height:60px;margin-top:-50px;\" class=\"msgcadastro alert alert-warning alert-dismissible fade show\" role=\"alert\">
  								$mensagemcadastro
  								<button style=\"margin-top:-15px;\" type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
   									<span aria-hidden=\"true\">&times;</span>
  								</button>
							</div>";
					}
				?>
					<div class="wrap-input100 validate-input" data-validate = "Digite um nome:">
						<input class="input100" type="text" name="nome" placeholder="nome">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                                <i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Digite um email: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>

					<div class="wrap-input100 validate-input" data-validate = "Digite uma senha:">
						<input class="input100" type="password" name="senha" placeholder="Senha:">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Confirme Senha:">
                            <input class="input100" type="password" name="confpass" placeholder="Confirmar Senha:">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Digite uma data:">
                                <input class="input100 dt" type="date"required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" name="data" placeholder="Data de Nascimento:">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-birthday-cake" aria-hidden="true"></i>
                                </span>
                            </div>
                    
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="cadastrar">
							Cadastrar
						</button>
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
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../assets/js/login.js"></script>

</body>
</html>