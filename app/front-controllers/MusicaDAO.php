<?php 
require(realpath(dirname(__FILE__).'/../model/Musica.php'));
require_once(realpath(dirname(__FILE__).'/../../config/DB.php'));

Class MusicaDAO extends Musica{

	function buscarMusicasParaGerarPlaylist($ano){
		$buscar =0;
		$dados = array();
		try {
			$resultado = DB::getConn()->prepare("CALL buscarMusicasParaGerarPlaylist(:ano)");
			$resultado->bindValue(':ano',$ano);
			$resultado->execute();
			if ($resultado->rowCount()>=1) {	
				$dados = $resultado->fetchAll(PDO::FETCH_OBJ);
			}  	
			return $dados;	
		} catch (Exception $e) {
			
		}

	}

	function buscarMusicas(){
		$dados = array();

		try {
			$resultado = DB::getConn()->prepare("CALL buscarMusicas()");
			$resultado->execute();
			if($resultado->rowCount()>=1){
				$dados = $resultado->fetchAll(PDO::FETCH_OBJ);
			}
			return $dados;
		} catch (Exception $e) {
			
		}

	}

}
