<?php 

require_once("../model/dao/UsuarioDAO.php");
require_once("../model/bean/Usuario.php");

$usuarioDAO = new UsuarioDAO;
$usuario = new Usuario;
$usuario->setEmail('h1@gmail.com');
$usuario->setNome('humberto');
$usuario->setSenha('1234');
$usuario->setDataNascimento('1997-12-19');
$usuario->setFoto('');
$resultado = $usuarioDAO->usuarioCadastrado($usuario);
$resultado2= $usuarioDAO->cadastrarUsuario($usuario);
$resultado3=$usuarioDAO->loginUsuario($usuario);
echo $resultado3;


	

					
	