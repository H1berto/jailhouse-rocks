<?php 
require(realpath(dirname(__FILE__).'/../model/Playlist.php'));
require('MusicaDAO.php');
require_once(realpath(dirname(__FILE__).'/../../config/DB.php'));

Class PlaylistDAO extends Playlist{

	 function gerarPlaylist($ano,$id_usuario){
		try {
			$musicaDAO = new MusicaDAO;
			$result=$musicaDAO->buscarMusicasParaGerarPlaylist($ano);
			foreach ($result as $value) {
			
				$this->cadastrarMusicaPlaylist($id_usuario,$value->id_musica);
			}	
		} catch (Exception $e) {
			
		}
	}

	function apagarPlaylist($id_usuario){
		try {
			$result = DB::getConn()->prepare('CALL deletarPlaylist(:id)');
			$result->bindValue(':id',$id_usuario);
			$result->execute();
		} catch (Exception $e) {
			
		}
	}

	private function cadastrarMusicaPlaylist($id_usuario,$id_musica){
		$cadastrar =0;
		try {
			$resultado = DB::getConn()->prepare("CALL cadastrarMusicaPlaylist(:id_usuario,:id_musica)");
			$resultado->bindValue(':id_usuario',$id_usuario);
			$resultado->bindValue(':id_musica',$id_musica);
			$resultado->execute();
		} catch (Exception $e) {
			
		}

	}

	function buscarPlaylistUsuario($id_usuario){
		$dados =0;
		try {
			$resultado = DB::getConn()->prepare("CALL buscarPlaylistUsuario(:id_usuario)");
			$resultado->bindValue(':id_usuario',$id_usuario);
			$resultado->execute();
			if ($resultado->rowCount()>=1) {
				$dados = $resultado->fetchAll(PDO::FETCH_OBJ);
			}
			return $dados;
		} catch (Exception $e) {
			
		}
	}


}