<?php 
//inicializa uma sessão, onde é possivel salvar valores na paginas a qual poderam ser acessadas em todo o projeto.em qualquer pagina a qual seja necessario manipular variaveis de sessão é necessario adicionar este comando.
session_start();
//verifica se a variavel de sessão para saber se está logado está vazia
if(empty($_SESSION['logado'])){
	$_SESSION['logado']=false;
}
//verifica se não existe uma variavel post para sair
if (isset($_POST['sair'])) {
	//destroi a sessão e todos os seus dados
	session_destroy();
	header('Location:../index.html');
}
