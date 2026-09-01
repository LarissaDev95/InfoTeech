<h2>Lista de Produtos</h2>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($produtos as $produto): ?>
        <tr>
            <td><?= $produto->id_produto ?></td>
            <td><?= $produto->nome ?></td>
            <td>R$ <?= number_format($produto->preco, 2, ',', '.') ?></td>
            <td><?= $produto->quantidade_estoque ?></td>
            <td><?= $produto->status_produto ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>