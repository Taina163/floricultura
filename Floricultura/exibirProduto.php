
        <?php
        require_once'./shared/header.php';
        
        use Model\produtosModel;

if ($_REQUEST['id']) {
    require_once 'src/model/produtosModel.php';
    $produto = new produtosModel();
    $result = $produto->loadById($_REQUEST['id']); //chama o id do produto

    echo('<div class="container">');
    
    echo ('<div class="row">');
    foreach ($result as $produtos) {
       echo('<div class="col-md-6">');
        echo('<h2>' . $produtos['nome'] . '</h2>');
        echo('<p>' . $produtos['descricao'] . '</p>');
        echo('<img src="'.$produtos['imagem'].'" style="height: 200px;width:300px"> ');
          echo('<h4>Valor: R$' . $produtos['preco_base'] . '</h4>');
        echo('<a class="d-grid btn btn-info"'
                . 'href="src/controller/carrinhoController.php?id=' . $produtos['id'] . '"'
                . '>Adicionar ao carrinho</a>');
        echo('</div>');
    }

    echo ('</div>');

    echo('</div>');
}
?>
    </body>
</html>
