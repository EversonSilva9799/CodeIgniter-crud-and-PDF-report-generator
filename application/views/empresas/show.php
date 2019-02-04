<?php 
    $this->load->view('template/head');
    $this->load->view('template/header');


?>
<h1 class="detalhes">Detalhes da Empresa</h1>

<section class="container empresa">

<div class="id-empresa grid-2">
    <h2><?= $empresa->id_empresa?></h2>
</div>

<div class="dados-empresa grid-10">
    <h1>Empresa: <span><?= $empresa->nome ?></span></h1>
    <h2>CNPJ: <span><?=  $empresa->cnpj ?></span></h2>
    <h2>E-mail: <span><?=  $empresa->email ?></span></h2>
</div>
</section>

<style>

.empresa {
    margin-bottom: 220px;
}

.detalhes {
    text-align: center;
    margin: 60px 0;
}

.id-empresa {
    border: 3px solid #2778f9;
    padding: 60px 0; 
    position: relative;
}

.id-empresa h2 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-weight: 500;
}

.dados-empresa {
    padding-left: 20px;
    border-left: 3px solid #2778f9;
    font-size: 0.8em;
    position: relative;
    top: 19px;
}

.dados-empresa h1 {
    margin-bottom: 5px;
}

.dados-empresa h2 {
    margin-bottom: 5px;
}

.dados-empresa span {
    font-weight: 500;
}

@media only screen and (max-width: 780px) {
    .detalhes {
        font-size: 1.5em;
        margin-bottom: 5px
    }

	.id-empresa {
        border: 0;
    
    }
}





</style>


<?php $this->load->view('template/footer'); ?>