<?php

	include_once('../../includes/headerLogin.php');
	include_once('../../app/controllers/UsuarioDAO.php');
	$nome= $_SESSION['nome'];
	$dataNascimento=$_SESSION['dataNascimento'];
	$senha=$_SESSION['senha'];
	$logado=$_SESSION['logado'];
	$email=$_SESSION['email'];
	$alterar=false;
	$atualizado=0;
	$tipoMensagem="";
	if($logado){

		if (isset($_POST['alterar'])) {
			if ($_POST['nome']!=$nome||$_POST['data']!=$dataNascimento){		
				$dao= new UsuarioDAO;
				$nome =$_POST['nome'];
				$dtnascimento =$_POST['data'];
				$id=$_SESSION['id'];
				$dao->setIdUsuario($id);
				$dao->setNome($nome);
				$dao->setDataNascimento($dtnascimento);
				$dao->setEmail($email);
				$result=$dao->alterarDados();
				$dadosUsuario=$dao->buscarDadosUsuario();
				$_SESSION['nome']=$dadosUsuario->nome;
				$_SESSION['dataNascimento'] =$dadosUsuario->data_nascimento;
  				$atualizado=2;
			}else if($_POST['nome']==$nome&&$_POST['data']==$dataNascimento){
				$atualizado=1;

			}
		}

		if (isset($_POST['alterarsenha'])) {
			$dao= new UsuarioDAO;
			$senha =$_POST['senha'];
			$id=$_SESSION['id'];
			$dao->setIdUsuario($id);
			$dao->setSenha($senha);
			$dao->setEmail($email);
			$result=$dao->alterarSenha();
			$dadosUsuario=$dao->buscarDadosUsuario();
			$_SESSION['senha']=$dadosUsuario->senha;
			$atualizado=3;
		}		
	}else{
		header('Location: ../login.php');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Jailhouse Rock's - Meu Perfil</title>
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
		<script language="JavaScript">

		function typeSenha(id){
			var type = document.getElementById(id).type;
			if(type == 'text'){
				document.getElementById(id).type = 'password';
			}else{
				document.getElementById(id).type = 'text';
			}
		}	

		function verificaForm(form) {

			if (form == 'formsenha') {

				var controlnull = 0;
				var controlequal = 0;
				var senha = document.getElementById('senha').value;
				var confsenha = document.getElementById('confsenha').value;
				if(senha==""||senha.length<4||confsenha==""||confsenha.length<4){
					if (senha==""||senha.length<4) {
						addClass('senha','is-invalid');
						controlnull++;
					}else{
						delClass('senha','is-invalid');
					}

					if (confsenha==""||confsenha.length<4) {
						addClass('confsenha','is-invalid');
						controlnull++;
					}else{
						delClass('confsenha','is-invalid');
					}

					if (controlnull>0) {
						displayModal('modalnull','block');
						displayModal('modalequals','none');
					}else{
						displayModal('modalnull','none');
					}	
				}else{
					if(senha!=""&&confsenha!=""&&senha.length>=4&&confsenha>=4&&senha!=confsenha) {
						controlequal++;
						addClass('confsenha','is-invalid');
						addClass('senha','is-invalid');
					}else{
						delClass('confsenha','is-invalid');
						delClass('senha','is-invalid');
					}
				}

				if (controlequal>0) {
					displayModal('modalequals','block');
					displayModal('modalnull','none');
				}else{
					displayModal('modalequals','none');
				}
					

				if(controlnull>0||controlequal>0){
					controlnull=0;
					controlequal=0;
					return false;
				}

				return true;	
			}else if(form=='geral'){

			}
		}
		
		function addClass(id, classe) {
		  var elemento = document.getElementById(id);
		  var classes = elemento.className.split(' ');
		  var getIndex = classes.indexOf(classe);

		  if (getIndex === -1) {
		    classes.push(classe);
		    elemento.className = classes.join(' ');
		  }

		}

		function delClass(id, classe) {
		  var elemento = document.getElementById(id);
		  var classes = elemento.className.split(' ');
		  var getIndex = classes.indexOf(classe);

		  if (getIndex > -1) {
		    classes.splice(getIndex, 1);
		  }
		  elemento.className = classes.join(' ');
		}

		function displayModal(id,value) {
		    var display = document.getElementById(id).style.display;
		    document.getElementById(id).style.display = value;

    	}	
		</script>
	</head>
	<body>


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
					<span style="text-align: center; margin-top: -70px;" class="login100-form-title">Seus Dados</span>
					<form style="margin-left: 40px;" class="login100-form cadastro100-form validate-form" action="perfil.php" method="POST" >
						<span class="login100-form-title">
							Geral 
						</span>
						<?php 
						if ($atualizado==1) {
							echo "<div style=\"width:300px;height:50px;margin-top:-50px;\" class=\"msgcadastro alert alert-warning alert-dismissible fade show\" role=\"alert\">
	  								Dados inalterados!
	  								<button style=\"margin-top:1px;\" type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
	   									<span aria-hidden=\"true\">&times;</span>
	  								</button>
								</div>";
								$atualizado=0;
						}else if($atualizado==2){
							echo "<div style=\"width:300px;height:70px;margin-top:-50px;\" class=\"msgcadastro alert alert-success alert-dismissible fade show\" role=\"alert\">
	  								Dados atualizados com sucesso!
	  								<button style=\"margin-top:-15px;\" type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
	   									<span aria-hidden=\"true\">&times;</span>
	  								</button>
								</div>";
								$atualizado=0;
						}else{
							echo "";
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
							<button class="login100-form-btn" type="submit" name="alterar"  > 
								Alterar
							</button>
						</div>
					</form>
					<div class="login100-pic " >
						<form id="formsenha" class="login100-form cadastro100-form" action="" method="POST" onSubmit="return verificaForm('formsenha');">
							<span class="login100-form-title">Senha</span>
							<?php 
							if ($atualizado==3) {
								echo "<div style=\"width:300px;height:50px;margin-top:-50px;\" class=\"msgcadastro alert alert-success alert-dismissible fade show\" role=\"alert\">
		  								Senha Alterada com sucesso
		  								<button style=\"margin-top:-23px;\" type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
		   									<span aria-hidden=\"true\">&times;</span>
		  								</button>
									</div>";
							}
							?>
							<!-- Modal - validação senhas em branco JS -->
							<div id="modalnull" style="display:none;width:300px;height:50px;margin-top:-50px;" class="msgcadastro alert alert-danger alert-dismissible fade show" role="alert" typ>
			  								Digite uma senha valida!
			  								<button onclick="displayModal('modalnull','none');" style="margin-top:1px;" type="button" class="close" >
			   									<span>&times;</span>
			  								</button>
							</div>
							<!-- Modal - validação de senhas iguais JS -->
							<div id="modalequals" style="display:none;width:300px;height:50px;margin-top:-50px;" class="msgcadastro alert alert-danger alert-dismissible fade show" role="alert" typ>
			  								As senhas não coincidem!
			  								<button onclick="displayModal('modalequals','none');" style="margin-top:-25px;" type="button" class="close" >
			   									<span>&times;</span>
			  								</button>
							</div>


							<div  class="wrap-input100">
								<input id="senha" class="input100 form-control " type="password" name="senha" placeholder="Senha">
								<span class="focus-input100"></span>
								<span class="symbol-input100">
									<i class="fa fa-lock" aria-hidden="true"></i>
								</span>

		                    </div>

								<span onclick="typeSenha('senha')" style=" margin-bottom:-8px;  margin-left:760px;cursor: pointer;" class="symbol-input100">
			                         <i id="olho"  style="margin-left: 220px;" class="fa fa-eye" aria-hidden="true"></i>
			                    </span>

		                    <div  class="wrap-input100" >
		                            <input id="confsenha" class="input100 form-control " type="password" name="confsenha" placeholder="Confirmar Senha">
		                            
		                            <span class="focus-input100"></span>
		                            <span class="symbol-input100">
		                                <i class="fa fa-lock" aria-hidden="true"></i>
		                            </span>

		                    </div>
							
								<span  style=" margin-left:760px;margin-bottom:-66px; cursor: pointer;" class="symbol-input100">
			                         <i id="olho2" onclick="typeSenha('confsenha')" style="margin-left: 220px; " class="fa fa-eye" aria-hidden="true"></i>
			                    </span>
							
							
							<div class="container-login100-form-btn">
								<button class="login100-form-btn" type="submit" name="alterarsenha">
									Trocar Senha
								</button>
							</div>

						</form>
					</div>
				</div>
		</div>
		
		

		
	<!--===============================================================================================-->	
		<script src="../../assets/js/jquery/jquery.min.js"></script>
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