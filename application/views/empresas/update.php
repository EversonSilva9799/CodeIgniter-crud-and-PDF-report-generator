<?php 
    $this->load->view('template/head');
    $this->load->view('template/header');

?>

<h1 class="form-titulo">Atualizar dados da Empresa</h1>
<div class="error">
    <div class="container">
        <?= validation_errors(); ?>
    </div>
</div>

<form action="<?= base_url('index.php/empresas/atualizar/') ?><?= $empresa->id_empresa ?>" method="post" class="form-empresa">
    <label for="name">Nome:</label>
    <input type="text" placeholder="Nome" name="nome" value="<?= $empresa->nome ?>">

    <label for="name">CNPJ:</label>
    <input type="text" placeholder="CNPJ" name="cnpj" value="<?= $empresa->cnpj ?>">

    <label for="name">E-mail:</label>
    <input type="text" placeholder="E-mail" name="email" value="<?= $empresa->email ?>">
    <input type="submit" value="Atualizar">
</form>
    


<style>

.form-titulo {
    text-align: center;
    margin: 40px 0;
}

.form-empresa {
    width: 500px;
    max-width: calc(100% - 20px);
    margin: 0 auto;
    margin-top: 40px;
    margin-bottom: 220px;
    position: relative;
    
    

    
}

.form-empresa input {
    font-weight: bolder;
    display: block;
    margin-bottom: 30px;
    padding-left: 5px;
    width: 100%;
    height: 45px;
    border-radius: 5px;
    border: none;
    border-top: 3px solid  #2778f9;
    border-bottom: 3px solid  #2778f9;
}

.form-empresa input:last-child {
    border: none;
    background-color: #2778f9;
    color: #fff;
    font-size: 1.2em;
    letter-spacing: 2px;
    cursor: pointer;
}

.error {
    text-align: center;
    background-color: #ff4242;
    color: #fff;
   
}


</style>


<?php

    $this->load->view('template/footer');
?>