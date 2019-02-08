<?php 
    $this->load->view('template/head');
    $this->load->view('template/header');

//    if($colaborador->empresa_id){
//     echo 'existe';
//     }
//     else {
//         echo 'não existe';
//     }
//     exit;
?>

<h1 class="form-titulo">Atualizar dados do Colaborador</h1>
<div class="error">
    <div class="container">
        <?= validation_errors(); ?>
    </div>
</div>



<form action="<?= base_url('index.php/colaboradores/atualizar/') ?><?= $colaborador->id_colaborador ?>" method="post" class="form-colaborador">
    <label for="name">Nome:</label>
    <input type="text" placeholder="Nome" name="nome" value="<?= $colaborador->nome ?>">

    <label for="name">E-mail:</label>
    <input type="text" placeholder="E-mail" name="email" value="<?= $colaborador->email ?>">

    <label for="cpf">CPF:</label>
    <input type="text" placeholder="CPF" name="cpf" value="<?= $colaborador->cpf ?>">

    <label class="label-sexo"  for="sexo">Selecione o sexo:</label>
    <select name="sexo" class="sexo">
        <option value="M" <?= $colaborador->sexo === 'M'? 'selected': '' ?>>Masculino</option>
        <option value="F" <?= $colaborador->sexo === 'F'? 'selected': '' ?>>Feminino</option>
    </select>

    <label class="label-empresa" for="empresa_id">Selecione a Empresa:</label>
    <select name="empresa_id" class="empresa-colaborar">

        <?php if (!$colaborador->empresa_id): ?>
            <option disabled selected>Nenhuma</option>
            <?php foreach($empresas as $empresa): ?>
                <option value="<?= $empresa->id_empresa ?>"><?= $empresa->nome ?></option>
            <?php endforeach; ?>
        <?php endif; ?>
        
        <!-- Se o colaborador já tem uma empresa cadastrada poderá trocar para outra empresa -->
        <?php if ($colaborador->empresa_id): ?>
            <?php foreach($empresas as $empresa): ?>
                <option  value="<?= $empresa->id_empresa ?>" <?= $colaborador->empresa($colaborador->empresa_id)[0]->nome === $empresa->nome ?'selected':''?>><?= $empresa->nome ?></option>
            <?php endforeach; ?>
        <?php endif; ?>

    </select>

    <input type="submit" value="Atualizar" >
</form>
    


<style>

.form-titulo {
    text-align: center;
    margin: 40px 0;
}

.form-colaborador {
    width: 500px;
    max-width: calc(100% - 40px);
    margin: 0 auto;
    margin-top: 40px;
    margin-bottom: 220px;
    position: relative;  
}

.form-colaborador input {
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

.form-colaborador input:last-child {
    border: none;
    margin-top: 15px;
    background-color: #2778f9;
    color: #fff;
    font-size: 1.2em;
    letter-spacing: 2px;
    cursor: pointer;
}

.label-sexo, .label-empresa, select  {
    display: block;
}

.error {
    text-align: center;
    background-color: #ff4242;
    color: #fff;
}

.sexo {
    height: 35px;
    margin-bottom: 30px;
    display: inline-block;
}

.empresa-colaborar {
    height: 35px;
}

@media only screen and (max-width: 780px) {
    
}


</style>


<?php

    $this->load->view('template/footer');
?>