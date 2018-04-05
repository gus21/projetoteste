<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Sobre</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
	body{margin-top:20px;}

	ul.notes li {
		margin: 10px 40px 50px 0px;
		float: left;
	}

	ul.notes li, ul.tag-list li {
		list-style: none;
	}

	ul.notes li div small {
		position: absolute;
		top: 5px;
		right: 5px;
		font-size: 10px;
	}

	div.rotate-1 {
		-webkit-transform: rotate(-6deg);
		-o-transform: rotate(-6deg);
		-moz-transform: rotate(-6deg);
	}

	div.rotate-2 {
		-o-transform: rotate(4deg);
		-webkit-transform: rotate(4deg);
		-moz-transform: rotate(4deg);
		position: relative;
		top: 5px;
	}

	.lazur-bg {
		background-color: #23c6c8;
		color: #ffffff;
	}

	.red-bg {
		background-color: #ed5565;
		color: #ffffff;
	}

	.navy-bg {
		background-color: #1ab394;
		color: #ffffff;
	}

	.yellow-bg {
		background-color: #f8ac59;
		color: #ffffff;
	}
	.green-bg {
		background-color: green;
		color: #ffffff;
	}
	img{
		position: relative;
		top:20px;
	}
	#centro{
		position: relative;
		top:30px;
	}

	ul.notes li div {
		text-decoration: none;
		color: #000;
		display: block;
		position: relative;
		top:40px;
		height: 240px;
		width: 240px;
		padding: 1em;
		-moz-box-shadow: 5px 5px 7px #212121;
		-webkit-box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
		box-shadow: 5px 5px 7px rgba(33, 33, 33, 0.7);
		-moz-transition: -moz-transform 0.15s linear;
		-o-transition: -o-transform 0.15s linear;
		-webkit-transition: -webkit-transform 0.15s linear;
		font-size:17px;
	}


</style>

</head>
<body>
	<?php
	include 'cabecario.php';
	?>



	<div class="container bootstrap snippet">
		<div class="row">
			<ul class="notes">
				<li>
					<div class="rotate-1 lazur-bg">
						<h4>Visão</h4>
						<p id="centro">Ser uma referência no
							desenvolvimento de aplicações 
						para a web.</p>
					</div>
				</li>   
				<li>
					<div class="rotate-2 red-bg">
						<h4>Missão</h4>
						<p>Garantir a excelência no
							desenvolvimento e entrega de
							sites funcionais, confiáveis
						e que tenham usabilidade.</p>
					</div>
				</li>    
				<li>
					<div class="rotate-1 yellow-bg">
						<h4>Valores</h4>
						<p>Ter a preferência do cliente
							e oferecer um sistema seguro 
							para o mesmo. Qualidade do pessoal e 
							excelência no atendimento e
						no desenvolvimento Web.</p>
					</div>
				</li>  
				<li>
					<div class="rotate-2 green-bg">
						<h4>Quem somos?</h4>
						<p>Abraão Henrique </p>
						<p>Gustavo dos Santos</p>
						<p>Gustavo Dantas</p>
						<p>Luiz Carlos Jr</p>
						<p>Tuanno Danyllo</p>
					</div>
				</li>  
			</ul>  
			<center><img src="img/logoifpe.png"></center>
		</div>
	</div>
	<body>


	<!-- <div id="missao">
		<h3> Missão</h3>
		<p>	Garantir a excelência no
		desenvolvimento e entrega de
		sites funcionais, confiáveis
		e que tenham usabilidade.</p>
	</div>
	<div id="valores">
		<h3> Valores</h3>
		<p>Ter a preferência do cliente
		e oferecer um sistema seguro 
		para o mesmo. Qualidade do pessoal e 
		excelência no atendimento e
		no desenvolvimento Web.</p>
	</div>
	<div id="visao">
		<h3>Visão</h3>
		<p>Ser uma referência no
		desenvolvimento de aplicações 
		para a web.</p>
	</div> -->
	<!--<center>
		<h2>Quem Somos?</h2>

		<p>Abraão Henrique </p>
		<p>Gustavo dos Santos </p>
		<p>Gustavo Dantas</p>
		<p>Luiz Carlos Jr</p>
		<p>Tuanno Danyllo</p>
		<img src="img/logoifpe.png">
		<br>
		<a href="index.php">
	  </a>
	</center>-->

	<?php
	include 'rodape.php';
	?>