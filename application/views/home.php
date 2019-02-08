<?php

	$this->load->view('template/head');
	$this->load->view('template/header');

?>

<section class="options">
	<div class="container">
		<h1 class="grid-12 options-titulo">Bem vindo ao <br>Painel Administrativo</h1>
		<ul>
			
			<a href="<?= base_url('index.php/empresas') ?>">
				<li class="grid-6 options-item">
					<h2 class="box">Empresas</h2>
					<h2 class="total">n° <?= $totalEmpresas ?></h2>
					<img src="" alt="">
				</li>
			</a>

			<a href="<?= base_url('index.php/colaboradores') ?>">
				<li class="grid-6 options-item">
					<h2 class="box" >Colaboradores</h2>
					<h2 class="total">n° <?= $totalColaboradores ?></h2>
					<img src="" alt="">
				</li>
			</a>	
			
		</ul>
	</div>
</section>

<style>
	.options {
		margin-bottom: 150px;
		
	}

	.options-titulo {
		text-align: center;
		padding: 60px 0;
		font-size: 2em;
	}

	.options-item {
		
		text-align: center;
		margin-bottom: 	10px;
		padding: 50px 20px 50px 20px;
		border-radius: 5px;
		color: #fff;
	}

	

	.options-item .box {
		text-transform: uppercase;
		border-bottom: 2px solid #2679ff;
		margin-bottom: 5px;
		padding-bottom: 10px;
		font-size: 1.2em;
		color: #000;	
	}

	.box:hover {
		text-decoration: underline;
	}

	.total {
		color: #000;
	}



</style>











<?php

	$this->load->view('template/footer');

?>