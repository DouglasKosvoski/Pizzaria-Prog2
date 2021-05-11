<main>
  <h2><?php $titulo ?></h2>
  <table class="cardapio">
    <thead>
      <tr>
        <td style="padding: 0.6rem">
          <a href="controller.php?acao=cadastrar">Inserir Novo</a>
        </td>
      </tr>
      <tr>
        <th>Codigo</th>
        <th>Nome</th>
        <th>Ingredientes</th>
        <th>Acoes</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if (count($lista) == 0) {
        echo "<p>Nenhum sabor Encontrrado.</p>";
      }
      else {
        foreach ($lista as $sabor) { ?>
          <tr>
            <td><?=$sabor->getId() ?></td>
            <td><?=$sabor->getName() ?></td>
            <td><?=$sabor->getIngredients() ?></td>
            <td>
              <a href="controller.php?acao=alterar&cod=<?=$sabor->getId()?>">Alterar</a> |
              <a href="controller.php?acao=excluir&cod=<?=$sabor->getId()?>">Excluir</a>
            </td>
          </tr>
        <?php } ?>
      <?php } ?>
    </tbody>
  </table>
  <br><br>
</main>