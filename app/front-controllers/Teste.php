<?php 

// require_once("../model/dao/UsuarioDAO.php");
// require_once("../model/bean/Usuario.php");
 include_once('../../includes/headerUsuario.php');
require_once('../../app/front-controllers/PlaylistDAO.php');
// $usuarioDAO = new UsuarioDAO;
// $usuario = new Usuario;
// $usuario->setEmail('h1@gmail.com');
// $usuario->setNome('humberto');
// $usuario->setSenha('1234');
// $usuario->setDataNascimento('1997-12-19');
// $usuario->setFoto('');
// $resultado = $usuarioDAO->usuarioCadastrado($usuario);
// $resultado2= $usuarioDAO->cadastrarUsuario($usuario);
// $resultado3=$usuarioDAO->loginUsuario($usuario);
// echo $resultado3;

	$dao = new PlaylistDAO;
	$ano = $_SESSION['dataNascimento'];
	$parte = explode("-", $ano);

	$id_usuario=2;
	// $result=$dao->gerarPlaylist($ano,$id_usuario);
 	$result2=$dao->buscarPlaylistUsuario($id_usuario);
 	if ($result2==0) {
 		echo "SOU FODA";
 	}else{
 		echo $parte[0];
	}				
	