<?php 
    $this->load->view('template/head');
    $this->load->view('template/header');

?>

<h1 class="titulo-empresas">Colaboradores</h1>


<table class="empresas">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>CPF</th>  
            <th>Sexo</th>
            <th>Ações</th> 
        </tr>
    </thead>

    <tbody>
        <tr>
            <td>Luan Rodrigues</td>
            <td>luan@mail.com</td>
            <td>856.741.669-65</td>
            <td>Masculino</td>
            <td></td>
        </tr>

        <tr>
            <td>Alcides Silva</td>
            <td>alcides@mail.com</td>
            <td>956.741.152-85</td>
            <td>Masculino</td>
            <td></td>
        </tr>

        <tr>
            <td>Lourdes Barbosa</td>
            <td>lourdes@mail.com</td>
            <td>856.451.236-95</td>
            <td>Feminino</td>
            <td></td>
        </tr>

        <tr>
            <td>Bruna Gonçalves</td>
            <td>bruna@mail.com</td>
            <td>956.745.221-96</td>
            <td>Feminino</td>
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