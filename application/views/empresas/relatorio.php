
<h1 class="header">Relatório das Empresas - <?= date("d/m/Y") ?></h1>
<hr>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>CNPJ</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($empresas as $empresa): ?>

            <tr>
                <td><?= $empresa->nome ?></td>
                <td><?=  $empresa->cnpj ?></td>
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

