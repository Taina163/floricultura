<?php
require_once './shared/header.php';
?>

<div class="container">

  <?php
  if (isset($_REQUEST['cod'])) {
    if ($_REQUEST['cod'] == 'compraFeita') {
      echo ('<div class="toast show">
  <div class="toast-header">
    Compra realizada com sucesso!
    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
  </div>
  <div class="toast-body">
    
  </div>
</div>');
    }
    if ($_REQUEST['cod'] == 'naoLogado') {
      echo ('<div class="toast show">
  <div class="toast-header">
    Entre na sua conta primeiro!
    <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
  </div>
  <div class="toast-body">
    
  </div>
</div>');
    }
  }


  require_once 'src/controller/exibeProdutosController.php';
  ?>
</div>
</body>

</html>