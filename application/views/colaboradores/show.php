<?php 
    $this->load->view('template/head');
    $this->load->view('template/header');


?>
<h1 class="detalhes">Detalhes do Colaborador</h1>

<section class="container colaborador">

<div class="dados-colaborador grid-6">
    <div class="id-empresa">
        <h2></h2>
    </div>
    <h1>Nome: <span><?= $colaborador->nome ?></span></h1>
    <h2>E-mail: <span><?=  $colaborador->email ?></span></h2>
    <h2>CPF: <span><?=  $colaborador->cpf ?></span></h2>
    <h2>Sexo: <span><?=  $colaborador->sexo ?></span></h2>
</div>

<div class="grid-6">
    <div class="empresa">
        <h1>Associado a empresa:</h1>
        <?php if($colaborador->empresa_id): ?>
            <h3 class="nome-empresa"><a href="<?= base_url('index.php/empresas/') ?><?= $empresa[0]->id_empresa?>"><?= $empresa[0]->nome?></a></h3>  
        <?php else: ?>
            <h3>Não associado</h3>
        <?php endif; ?>   
    </div>
</div>
</section>

<style>

.colaborador {
     
}

.detalhes {
    text-align: center;
    margin: 60px 0;
}

.id-colaborador {
    width: 120px;
    border: 3px solid #2778f9;
    padding: 40px 0; 
    position: relative;
}

.id-colaborador h2 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-weight: 500;
}

.dados-colaborador {
    padding-left: 18px;
    border-left: 3px solid #2778f9;
    margin-bottom: 50px;
    font-size: 0.8em;
    position: relative;
    top: 19px;
}

.dados-colaborador h1 {
    margin-bottom: 5px;
}

.dados-colaborador h2 {
    margin-bottom: 5px;
}

.dados-colaborador span {
    font-weight: 500;
}

.empresa {
    float: right;
    height: 400px;
    overflow: auto;
}

.empresa h1 {
    margin-bottom: 20px;
}

.nome-empresa {
    margin-bottom: 8px;
    font-weight: 500;
}

@media only screen and (max-width: 780px) {
    .grid-6 {
        width: calc(100% - 20px);
        
    }
    .detalhes {
        font-size: 1.5em;
        margin-bottom: 5px
    }

    .id-colaborador {
      
        margin: 0 auto;
        border: none;
    }

    .dados-colaborador{
        padding-left: 25px;
        text-align: none;
        border: none;
    }

    

    .empresa {
        float: none;
        text-align: center;
    }
}





</style>


<?php $this->load->view('template/footer'); ?>