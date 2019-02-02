<?php 
    $this->load->view('template/head');
    $this->load->view('template/header');

?>

<h1 class="titulo-empresas">Empresas</h1>


<table class="empresas">
    <thead>
        <tr>
            <th>Nome</th>
            <th>CNPJ</th>
            <th>E-mail</th>  
            <th>Ações</th> 
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Empresa 1</td>
            <td>22.55.66.77-555</td>
            <td>empresa1@mail.com</td>
            <td></td>
        </tr>

        <tr>
            <td>Empresa 2</td>
            <td>88.99.66.24.-481</td>
            <td>empresa2@mail.com</td>
            <td></td>
        </tr>

        <tr>
            <td>Empresa 3</td>
            <td>65.74.11.52.-963</td>
            <td>empresa3@mail.com</td>
            <td></td>
        </tr>

        <tr>
            <td>Empresa 4</td>
            <td>98.74.47.14-256</td>
            <td>empresa4@mail.com</td>
            <td></td>
        </tr>
    </tbody>
</table>

<style>

    .titulo-empresas {
        text-align: center;
        font-size: 3em;
        color: #222;
        margin: 40px 0;
    }

    .empresas {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        max-width: 100%;
        margin-bottom: 60px;
        
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


</style>


<?php

    $this->load->view('template/footer');
?>