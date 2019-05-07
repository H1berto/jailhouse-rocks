<?php 
require_once(realpath(dirname(__FILE__) . '/../bean/Usuario.php'));
require_once(realpath(dirname(__FILE__) . "/../../../config/DB.php"));


Class UsuarioDAO extends Usuario{

	function cadastrarUsuario($usuario){
		$nome=$usuario->getNome();
		$email=$usuario->getEmail();
		$senha=$usuario->getSenha();
		$dataNascimento=$usuario->getDataNascimento();
		$foto=$usuario->getFoto();
		$cadastrar = 0;
		try {
			$preresultado = $this->usuarioCadastrado($usuario);
			if ($preresultado==1) {
				$cadastrar=1;
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
			
		}
	}

	function usuarioCadastrado($usuario){
		$email= $usuario->getEmail();

		try {
			$resultado = DB::getConn()->prepare("CALL temCadastro(:email)");
			$resultado->bindValue(':email',$email);
			$resultado->execute();
			$dados = $resultado->fetch(PDO::FETCH_OBJ);
			return $dados->email;	
		} catch (Exception $e) {
			
		}
		
	}

	function loginUsuario($usuario){
		$email= $usuario->getEmail();
		$senha=$usuario->getSenha();

		try {
			$resultado = DB::getConn()->prepare("CALL login(:email,:senha)");
			$resultado->bindValue(':email',$email);
			$resultado->bindValue(':senha',$senha);
			$resultado->execute();
			$dados = $resultado->fetch(PDO::FETCH_OBJ);
			return $dados->login;	
		} catch (Exception $e) {
			
		}
	}
}