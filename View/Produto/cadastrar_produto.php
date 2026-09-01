<h2>Cadastrar Produto</h2>

<form method="POST" action="<?= URL_BASE ?>/produto/salvar">
    <input type="text" name="nome" placeholder="Nome" required>
    <input type="text" name="descricao" placeholder="Descrição" required>
    <input type="number" step="0.01" name="preco" placeholder="Preço" required>
    <input type="number" name="quantidade_estoque" placeholder="Estoque" required>
    <input type="text" name="status_produto" placeholder="Status" required>
    <button type="submit">Salvar</button>
</form>