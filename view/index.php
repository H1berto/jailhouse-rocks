<?php
	include_once('../includes/headerLogin.php');
	 $logado = $_SESSION['logado'];
	 if ($logado) {
	     header('Location:usuario/index.php');
	 } 
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Jailhouse Rock's</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="../assets/css/main.css" />
	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="icon" href="../assets/img/icons/guitar.ico" type="image/x-icon" />

	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/9FDDA016-C9E4-004D-B3CE-160F79E16C88/main.js" charset="UTF-8"></script>
</head>

<body>

	<!-- Header -->
	<header id="header" class="alt">
		<div class="logo">
			<h1>Jailhouse Rock's</h1>
		</div>
		<a id="menu-link" href="#menu">Menu</a></div>
	</header>

	<!-- Nav -->
	<nav id="menu">
		<ul class="links">
			<li><a href="login.php">Login</a></li>
			<li><a href="cadastro.php">Cadastro</a></li>
		</ul>
	</nav>

	<!-- Banner -->
	<section class="banner full">
		<article>
			<img src="../assets/img/banner/elvis.jpg" alt="Elvis Presley" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Elvis Presley&hl=pt-br" target="_blank">
						<h2>Elvis Presley</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/buddyholly.jpg" alt="Buddy Holly" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Buddy Holly&hl=pt-br" target="_blank">
						<h2>Buddy Holly</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/chuckberry.jpg" alt="Chuck Berry" />
			<div class="inner">
				<header>

					<a href="https://www.google.com.br/search?q=Chuck Berry&hl=pt-br" target="_blank">
						<h2>Chuck Berry</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/beatles.jpg" alt="The Beatles" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=The Beatles&hl=pt-br" target="_blank">
						<h2>The Beatles</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/hendrix.jpg" alt="Jimmy Hendrix" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Jimmy Hendrix&hl=pt-br" target="_blank">
						<h2>Jimmy Hendrix</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/janis.jpg" alt="Janis Joplin" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Janis Joplin&hl=pt-br" target="_blank">
						<h2>Janis Joplin</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/queen.jpg" alt="Queen" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Queen&hl=pt-br" target="_blank">
						<h2>Queen</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/led.jpg" alt="Led Zeppelin" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Led Zeppelin&hl=pt-br" target="_blank">
						<h2>Led Zeppelin</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/bowie.jpg" alt="David Bowie" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=David Bowie&hl=pt-br" target="_blank">
						<h2>David Bowie</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/vanhalen.jpg" alt="Van Halen" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Van Halen&hl=pt-br" target="_blank">
						<h2>Van Halen</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/acdc.jpg" alt="AC/DC" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=AC/DC&hl=pt-br" target="_blank">
						<h2>AC/DC</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/aerosmith.jpg" alt="Aerosmith" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Aerosmisth&hl=pt-br" target="_blank">
						<h2>Aerosmith</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/nirvana.jpg" alt="Nirvana" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Nirvanas&hl=pt-br" target="_blank">
						<h2>Nirvana</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/pearljam.jpg" alt="Pearl Jam" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Pearl Jam&hl=pt-br" target="_blank">
						<h2>Pearl Jam</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/redhot.jpg" alt="Red Hot" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Red Hot Chilli Peppers &hl=pt-br" target="_blank">
						<h2>Red Hot Chilli Peppers</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/arcadefire.jpg" alt="Arcade Fire" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Arcade Fire&hl=pt-br" target="_blank">
						<h2>Arcade Fire</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/killers.jpg" alt="The Killers" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=The Killers&hl=pt-br" target="_blank">
						<h2>The Killers</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/strokes.jpg" alt="The Strokes" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=The Strokes&hl=pt-br" target="_blank">
						<h2>The Strokes</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/fosterthepeople.jpg" alt="Foster The People" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Foster The People&hl=pt-br" target="_blank">
						<h2>Foster The People</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/lumineers.jpg" alt="The Lumineers" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=The Lumineers&hl=pt-br" target="_blank">
						<h2>The Lumineers</h2>
					</a>
				</header>
			</div>
		</article>
		<article>
			<img src="../assets/img/banner/tameimpala.jpg" alt="Tame Impala" />
			<div class="inner">
				<header>
					<a href="https://www.google.com.br/search?q=Tame Impala&hl=pt-br" target="_blank">
						<h2>Tame Impala</h2>
					</a>
				</header>
			</div>
		</article>
	</section>

	<!-- One -->
	<section id="one" class="wrapper style2">
		<div class="inner">
			<div class="grid-style">

				<div>
					<div class="box">

						<div class="content">
							<header class="align-center">
								<p>Surge um estilo de peso</p>
								<h2> A História do Rock</h2>
							</header>
							<p> O <strong>rock and roll</strong>, conhecido também como<strong> rock'n'roll</strong>, é
								um estilo musical que surgiu nos
								Estados Unidos no final dos anos 1940 e início dos anos 1950, com raízes nos estilos
								musicais norte-americanos, como: country, blues, R&B e gospel, e que rapidamente se
								espalhou para o resto do mundo.</p>
							<footer class="align-center">
								<a href="https://www.uppermag.com/rock-and-roll/" target="_blank"
									class="button alt">Saiba Mais</a>
							</footer>
						</div>
					</div>
				</div>

				<div>
					<div class="box">

						<div class="content">
							<header class="align-center">
								<p>De onde veio esse nome?</p>
								<h2>Origem da Expressão "Rock and Roll"</h2>
							</header>
							<p> A expressão, que literalmente significa <strong>"balançar e rolar"</strong>, fazia parte
								da gíria dos
								negros americanos desde as primeiras décadas do século XX, para referir-se ao ato
								sexual.Assim, ela já aparecia em várias letras de blues e rhythm and blues antes de ser
								adotada como nome do novo estilo
								musical.</p>
							<footer class="align-center">
								<a href="https://super.abril.com.br/mundo-estranho/de-onde-vem-a-expressao-rock-and-roll/"
									target="_blank" class="button alt">Saiba Mais</a>
							</footer>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- two -->
	<section id="two-title" class="wrapper style3">
		<div class="inner">
			<header class="align-center">
				<p>Ouça músicas como nunca antes

				</p>
				<h2>Nossa Solução</h2>
			</header>
		</div>
	</section>

	<section id="two" class="wrapper style2">
		<div class="inner">
			<div class="grid-style">

				<div>
					<div class="box">

						<div class="content">
							<header class="align-center">
								<p>Sem Anúncios!</p>
								<h2>Escute Música Grátis</h2>
							</header>
							<img class="img-site" src="../assets/img/site-print.png" alt="">
						</div>
					</div>
				</div>

				<div>
					<div class="box">

						<div class="content">
							<header class="align-center">
								<p>Venha Ouvir o Melhor Estilo Musical</p>
								<h2>Conecte-se Agora</h2>
							</header>
							<p> Nesse site você encontra os melhores hits que do <strong>Rock and Roll</strong>. Temos
								músicas desde os <strong>anos 50</strong>, para quem curte algo mais
								<strong>Rockabilly</strong>, até os sons mais sujos que surgiram dos <strong>anos
									70</strong> a diante.</p>
							<p>Além disso quando você realiza o cadastro no nosso site geramos uma
								<strong>Playlist</strong> exclusiva de acordo com a sua data de nascimento, assim pode
								desfrutar das melhores músicas de sua época.</p>
							
							<p>E para melhorar tudo isso é de graça, isso mesmo não custa nem um centavo usar a nossa
								plataforma e ainda não iremos ficar lhe mostrando nenhum anúncio chato. Just keep calm
								and <strong>Rock'n'Roll</strong>.</p>
								<p>Estamos trabalhando para trazer o melhor conteúdo possível, aguardem novas funcionalidades...</p>
								<footer class="align-center normalize-box">
									<a href="cadastro.php"
										 class="button alt">Cadastre-se Agora</a>
									</footer>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Three -->
	<section id="three-title" class="wrapper style3">
		<div class="inner">
			<header class="align-center">
				<p>Time de Desenvolvedores</p>
				<h2>Icoders</h2>
			</header>
		</div>
	</section>

	
	<section id="three" class="team-2 wrapper style2 text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 col-team text-center">
					<div class="box bx-team">
							<div class="js-tilt" data-tilt>
						<img class="img-team rounded-circle" src="../assets/img/team/carol.jpeg" alt="Carol"></div>
						<h2 class="name-teamate bl">Carolina Prado</h2>
						<p>Documentadora e Desenvolvedora</p>
						<ul class="icons">
							<li><a href="https://www.github.com/klenne" class="icon fa-github"><span
								class="label">Github</span></a></li>
							<li><a href="https://www.facebook.com" class="icon fa-facebook"><span
										class="label">Facebook</span></a></li>
							<li><a href="https://www.linkedin.com" class="icon fa-linkedin"><span
										class="label">linkedin</span></a></li>


						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-team text-center">
					<div class="box bx-team">
							<div class="js-tilt" data-tilt>
						<img class="img-team rounded-circle" src="../assets/img/team/klenne.jpg" alt="Guilherme"></div>

						<h2 class="name-teamate bl">Guilherme Klesse</h2>
						<p>Analista de Requisitos e Desenvolvedor</p>
						<ul class="icons">
							<li><a href="https://www.github.com/klenne" class="icon fa-github"><span
										class="label">Github</span></a></li>
							<li><a href="https://www.facebook.com" class="icon fa-facebook"><span
										class="label">Facebook</span></a></li>
							<li><a href="https://www.linkedin.com" class="icon fa-linkedin"><span
										class="label">linkedin</span></a></li>


						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-team text-center">
					<div class="box bx-team">
							<div class="js-tilt" data-tilt>
						<img class="img-team rounded-circle" src="../assets/img/team/h2.jpeg" alt="Humberto"></div>
						<h2 class="name-teamate bl">Humberto Barone</h2>
						<p>Gerente de Projeto e Desenvolvedor</p>
						<ul class="icons">
							<li><a href="https://www.github.com/klenne" class="icon fa-github"><span
										class="label">Github</span></a></li>
							<li><a href="https://www.facebook.com" class="icon fa-facebook"><span
										class="label">Facebook</span></a></li>
							<li><a href="https://www.linkedin.com" class="icon fa-linkedin"><span
										class="label">linkedin</span></a></li>


						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-team ml-20 text-center">
					<div class="box bx-team">
							<div class="js-tilt" data-tilt>
						<img class="img-team rounded-circle" src="../assets/img/team/ze2.jpg" alt="jose Marcilio"></div>
						<h2 class="name-teamate bl">José Marcilio</h2>
						<p>Analista de Testes e Desenvolvedor</p>
						<ul class="icons">
							<li><a href="https://www.github.com/klenne" class="icon fa-github"><span
								class="label">Github</span></a></li>
							<li><a href="https://www.facebook.com" class="icon fa-facebook"><span
										class="label">Facebook</span></a></li>
							<li><a href="https://www.linkedin.com" class="icon fa-linkedin"><span
										class="label">linkedin</span></a></li>


						</ul>
					</div>
				</div>
				<div class=" col-md-4 col-sm-6 col-team ml-21 text-center">
					<div class="box bx-team">
							<div class="js-tilt" data-tilt>
						<img class="img-team rounded-circle" src="../assets/img/team/hideki.jpg" alt="Rodrigo"></div>
						<h2 class="name-teamate bl">Rodrigo Hideki</h2>
						<p>Analista de Testes e Desenvolvedor</p>
						<ul class="icons">
							<li><a href="https://www.github.com/klenne" class="icon fa-github"><span
								class="label">Github</span></a></li>
							<li><a href="https://www.facebook.com" class="icon fa-facebook"><span
								class="label">Facebook</span></a></li>
							<li><a href="https://www.linkedin.com" class="icon fa-linkedin"><span
								class="label">linkedin</span></a></li>

						</ul>
					</div>
				</div>

			</div>
		</div>

	</section>



	<!-- Footer -->
	<footer id="footer">
		<div class="container">
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
			</ul>
		</div>
		<div class="copyright">
			&copy; 2019 Icoders
		</div>
		<div class="copyright">
			Apoiado por <a href="https://institutocriativo.org.br/">Instituto Criativo</a>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/jquery.scrollex.min.js"></script>
	<script src="../assets/js/skel.min.js"></script>
	<script src="../assets/js/util.js"></script>
	<script src="../assets/js/main.js"></script>

	<script src="../assets/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
</body>

</html>