<?php 
    $this->load->view('template/head');
    $this->load->view('template/header');

?>

<h1 class="titulo-empresas">Empresas</h1>
<div class="container">
    <a href="/empresas/cadastro" class="btn btn-cadastro">Cadastrar Nova Empresa</a>
</div>

<div class="wrap">
    <table class="empresas container">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>E-mail</th>  
                <th>Ações</th> 
            </tr>
        </thead>

        <tbody>
            <?php foreach ($empresas as $empresa): ?>

                <tr>
                    <td><?=  $empresa['name'] ?></td>
                    <td><?=  $empresa['cnpj'] ?></td>
                    <td><?=  $empresa['email'] ?></td>
                    <td>
                        <a href="" class="btn btn-alterar">Alterar</a>
                        <a href="" class="btn btn-excluir">Excluir</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="container page">
    <div class="pagination">
        <?= $this->pagination->create_links(); ?>
    </div>
</div>


<style>

    .titulo-empresas {
        text-align: center;
        font-size: 3em;
        color: #aaa;
        margin: 40px 0;
    }

    .wrap {
        overflow: auto;
        max-width: 100%;
        margin-bottom: 100px;
    }

    .empresas {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        min-width: 600px;
       
       
        
    }

    .empresas  tr:nth-child(even){background-color: #f2f2f2;}

    .empresas  tr:hover {background-color: #ddd;}

    .empresas  th {
        padding: 15px 0 15px 15px;
        text-align: left;
        background-color: #eee;
        font-size: 1.3em;
        font-weight: 300;
        overflow: auto;
    }

    .empresas td {
        padding: 15px 0 15px 15px;
        overflow: auto;
    }

    .btn {
        width: 120px;
        padding: 10px;
        border-radius: 5px;
        color: #fff;
    }

    .btn-alterar {
        background-color: #2778f9;
    }

    .btn-excluir {
        background-color: #e82727;
    }

    .btn-cadastro {
        background-color: #46b716;
        display: inline-block;
        width: 220px !important;
        margin-bottom: 20px;
 
    }

    .pagination a, strong {
        padding: 10px;
        
        
    }
    .page {
        margin-bottom: 20px;
    }


</style>


<?php

    $this->load->view('template/footer');
?>