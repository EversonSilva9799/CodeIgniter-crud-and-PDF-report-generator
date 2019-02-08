
<h1 class="header">Relatório dos Colaboradores - <?= date("d/m/Y") ?></h1>
<hr>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>CPF</th>
            <th>Sexo</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($colaboradores as $colaborador): ?>

            <tr>
                <td><?= $colaborador->nome ?></td>
                <td><?=  $colaborador->email ?></td>
                <td><?=  $colaborador->cpf ?></td>
                <td><?=  $colaborador->sexo === 'M' ? 'Masculino' : 'Feminino' ?></td>
            </tr>

        <?php endforeach; ?>
    </tbody> 
</table>

<style>

.header {
    text-align: center;
    margin-bottom: 100px;
    font-size: 1.5em;
}

table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #ddd;
    padding: 8px;
}

th {
    background-color: #ddd;
}
}

</style>

