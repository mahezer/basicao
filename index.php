<html>
  <body>
    <form action="<?php echo $PHP_SELF ?>" method="POST">
      Quantidade de bojos <input type="integer" name="qtde">
      <button type="submit">Salvar</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $margem = $_POST['qtde'] * 1.1;
        $p = ceil($margem / 8);
        $resultadoTecido = $p*0.4;
        $resultadoEspuma = $p*1.2;
        echo '<p> Quantidade de bojos: ' . $_POST['qtde'] . '</p>';
        echo '<p> Margem de erros: ' . $margem . '</p>';
        echo '<p> Quantidade de espuma: ' . $resultadoEspuma . ' metros</p>';
        echo '<p> Quantidade de tecido: ' . $resultadoTecido . ' kg</p>';
    }
    ?> 
  </body>
</html>
