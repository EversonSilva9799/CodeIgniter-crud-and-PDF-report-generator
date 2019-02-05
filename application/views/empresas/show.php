<?php 
    $this->load->view('template/head');
    $this->load->view('template/header');


?>
<h1 class="detalhes">Detalhes da Empresa</h1>

<section class="container empresa">

<!-- <div class="id-empresa grid-2">
    <h2><?= $empresa->id_empresa?></h2>
</div> -->

<div class="dados-empresa grid-6">
    <div class="id-empresa">
        <h2><?= $empresa->id_empresa?></h2>
    </div>
    <h1>Empresa: <span><?= $empresa->nome ?></span></h1>
    <h2>CNPJ: <span><?=  $empresa->cnpj ?></span></h2>
    <h2>E-mail: <span><?=  $empresa->email ?></span></h2>
</div>

<div class="grid-6">
    <div class="lista-colaboradores">
        <h1>Colaboradores</h1>

        <?php foreach($colaboradores as $colaborador): ?>
            <h3 class="nome-colaborador"><a href="/colaboradores/<?= $colaborador->id_colaborador?>"><?= $colaborador->nome ?></a></h3>
        <?php endforeach; ?>
    </div>
</div>
</section>

<style>

.empresa {
     
}

.detalhes {
    text-align: center;
    margin: 60px 0;
}

.id-empresa {
    width: 120px;
    border: 3px solid #2778f9;
    padding: 40px 0; 
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
    margin-bottom: 50px;
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

.lista-colaboradores {
    float: right;
    height: 400px;
    overflow: auto;
}

.lista-colaboradores h1 {
    margin-bottom: 20px;
}

.nome-colaborador {
    margin-bottom: 8px;
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