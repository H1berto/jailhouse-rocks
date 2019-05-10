<?php 
require(realpath(dirname(__FILE__).'/../model/Usuario.php'));
require_once(realpath(dirname(__FILE__).'/../../config/DB.php'));

Class UsuarioDAO extends Usuario{

	function cadastrarUsuario(){
		$nome = $this->getNome();
		$email = $this->getEmail();
		$senha = $this->getSenha();
		$dataNascimento = $this->getDataNascimento();
		$foto = $this->getFoto();
		$cadastrar = 0;
		try {
			$preresultado = $this->usuarioCadastrado();
			if ($preresultado == 1) {
				$cadastrar = 1;
			}else{
				$resultado = DB::getConn()->prepare("CALL cadastrarUsuario(:nome,:email,:senha,:dataNascimento,:foto)");
				$resultado->bindValue(':nome',$nome);
				$resultado->bindValue(':email',$email);
				$resultado->bindValue(':senha',$senha);
				$resultado->bindValue(':dataNascimento',$dataNascimento);
				$resultado->bindValue(':foto',$foto);
				$resultado->execute();

				if ($resultado->rowCount()>=1) {	
					//Usuario cadastrado com sucesso	
					$cadastrar=2;
				}  	
			}
			return $cadastrar;
		} catch (Exception $e) {
			echo $e;
		}
	}

	function usuarioCadastrado(){
		$email= $this->getEmail();

		try {
			$resultado = DB::getConn()->prepare("CALL temCadastro(:email)");
			$resultado->bindValue(':email',$email);
			$resultado->execute();
			$dados = $resultado->fetch(PDO::FETCH_OBJ);
			return $dados->email;	
		} catch (Exception $e) {
			
		}
		
	}

	function loginUsuario(){
		$email= $this->getEmail();
		$senha=$this->getSenha();
		$dados=null;
		try {
			$resultado = DB::getConn()->prepare("CALL login(:email,:senha)");
			$resultado->bindValue(':email',$email);
			$resultado->bindValue(':senha',$senha);
			$resultado->execute();
			if ($resultado->rowCount()>=1) {	
				//Usuario logado com sucesso
				$dados = $resultado->fetch(PDO::FETCH_ASSOC);			
			}else{
				$dados=2;
			}  	
			
			return $dados;	
		} catch (Exception $e) {
			
		}
	}
}