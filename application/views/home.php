<?php

	$this->load->view('template/head');
	$this->load->view('template/header');

?>

<section class="options">
	<div class="container">
		<h1 class="grid-12 options-titulo">Bem vindo ao <br>Painel Administrativo</h1>
		<ul>
			
			<a href="/empresas">
				<li class="grid-4 options-item">
					<h2>Empresas</h2>
					<h2>13</h2>
					<img src="" alt="">
				</li>
			</a>

			<a href="/colaboradores">
				<li class="grid-4 options-item">
					<h2>Colaboradores</h2>
					<h2>42</h2>
					<img src="" alt="">
				</li>
			</a>	
			
		</ul>
	</div>
</section>

<style>

	.options-titulo {
		text-align: center;
		padding: 60px 0;
		font-size: 2em;
	}

	.options-item {
		border: 1px solid rgba(0,0,0,0.4);
		margin-bottom: 	150px;
		padding: 50px 20px 50px 20px;
		background-color: rgba(4,61,155, 0.5);
		border-radius: 5px;
		color: #fff;
	}



</style>











<?php

	$this->load->view('template/footer');

?>