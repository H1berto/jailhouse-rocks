<?php

	include_once('../../includes/headerLogin.php');
	include_once('../../app/controllers/UsuarioDAO.php');
	$nome= $_SESSION['nome'];
	$dataNascimento=$_SESSION['dataNascimento'];
	$senha=$_SESSION['senha'];
	$logado=$_SESSION['logado'];
	$atualizado="";
	if($logado){
		if (isset($_POST['alterar'])) {
			if ($_POST['nome']==$nome&&($_POST['senha']==$senha||$_POST['senha']=="")&&$_POST['data']==$dataNascimento) {
				$nadaAlterado="";
			}else{
				$confirmarAlteracao="";
			}
		}

		if (isset($_POST['finalizarAlteracao'])) {
			$dao= new UsuarioDAO;
				$nome =$_POST['nome'];
				$email =$_POST['email'];
				$senha =$_POST['senha'];
				$dtnascimento =$_POST['data'];
				$dao->setNome($nome);
				$dao->setEmail($email);
				$dao->setSenha($senha);
				$dao->setDataNascimento($dtnascimento);
				$result=$dao->alterarDados();
				if ($result==2) {
					$atualizado="Dados atualizados com sucesso!";
					$dadosUsuario=$dao->buscarDadosUsuario();
					$_SESSION['nome']=$dadosUsuario->nome;
					$_SESSION['senha']=$dadosUsuario->senha;
					$_SESSION['dataNascimento'] =$dadosUsuario->data_nascimento;
					header('Location:perfil.php');
				}

		}
	}else{
		header('Location: ../login.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Jailhouse Rock's - Cadastro</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="../../assets/img/icons/guitar.ico"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../../assets/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../../assets/vendor/animate/animate.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="../../assets/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../../assets/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="../../assets/css/util.css">
		<link rel="stylesheet" type="text/css" href="../../assets/css/login.css">
	<!--===============================================================================================-->

	</head>
	<body>
	<?php if (isset($confirmarAlteracao)) { ?>	
			<!-- Modal Confirmar-->
		<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalCenterTitle">Sair da Sessão</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        Deseja realmente alterar estes dados? 
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
		        <form action="index.php" method="POST">
		            <button type="submit" class="btn btn-success" name="finalizarAlteracao">Confirmar</button>
		        </form>
		        
		      </div>
		    </div>
		  </div>
		</div>
<?php
} ?>

	<?php if (isset($nadaAlterado)) { ?>
			<!-- Modal Nada Alterado-->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">Sair da Sessão</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	       	Nenhuma informação alterada!
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Okay</button>     
	      </div>
	    </div>
	  </div>
	</div>
<?php
} ?>


			<header class="header" class="alt">
					<div class="voltar">
				
							<a href="index.php"><i class="fa fa-arrow-left icon"></i></a>
			
					</div>
					<h1 class="titulo-login">Jailhouse Rock's</h1>
				</header>
		<header id="header" class="alt">
			<a  href="#menu"></a></div>
		</header>
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">

					<form style="margin-left: 240px;margin-top: 5px;" class="login100-form cadastro100-form validate-form" action="perfil.php" method="POST" >
						<span class="login100-form-title">
							Seus dados
						</span>
						<?php 
						if ($atualizado!="") {
							echo "<div style=\"width:300px;font-size:12px;height:60px;margin-top:-50px;\" class=\"msgcadastro alert alert-success alert-dismissible fade show\" role=\"alert\">
	  								$atualizado
	  								<button style=\"margin-top:-15px;\" type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
	   									<span aria-hidden=\"true\">&times;</span>
	  								</button>
								</div>";
						}
					?>
						<div class="wrap-input100 validate-input" data-validate = "Digite um nome:">
							<input class="input100" type="text" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
	                                <i class="fa fa-user" aria-hidden="true"></i>
							</span>
	                    </div>

	                        <div class="wrap-input100 validate-input" data-validate = "Digite uma data:">
	                                <input class="input100 dt" type="date"required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" name="data" placeholder="Data de Nascimento:" value="<?php echo $dataNascimento; ?>">
	                                <span class="focus-input100"></span>
	                                <span class="symbol-input100">
	                                    <i class="fa fa-birthday-cake" aria-hidden="true"></i>
	                                </span>
	                            </div>
	                    
						
						<div class="container-login100-form-btn">
							<button class="login100-form-btn" type="submit" name="alterar">
								Alterar
							</button>
							<form action="">
								<button class="" type="submit" name="alterarsenha">Trocar Senha</button>
							</form>
						</div>

		
					</form>
				</div>
			</div>
		</div>
		
		

		
	<!--===============================================================================================-->	
		<script src="../../assets/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
		<script src="../../assets/vendor/bootstrap/js/popper.js"></script>
		<script src="../../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
		<script src="../../assets/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
		<script src="../../assets/vendor/tilt/tilt.jquery.min.js"></script>
		<script >
			$('.js-tilt').tilt({
				scale: 1.1
			})
		</script>
	<!--===============================================================================================-->
		<script src="../../assets/js/login.js"></script>

	</body>
</html>