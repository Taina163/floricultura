<?php

use Model\ProdutosModel;

@session_start();
/* foreach ($_SESSION['carrinho'] as $mostrar) {
  echo($mostrar);
  } */
if (isset($_SESSION['logado'])) {
    if (!empty($_SESSION['carrinho']) && $_SESSION['carrinho'] != null) {


        //var_dump($_SESSION['carrinho']);

        $whereIn = implode(',', $_SESSION['carrinho']);
        require_once './model/produtosModel.php';
        $produtos = new produtosModel();
        $resultList = $produtos->loadWhereIn($whereIn);
        $valor_total = 0;
        $lista_produtos = "";
        //if(!empty($_SESSION['carrinho'])){

        foreach ($resultList as $values) {
            //foreach($_SESSION['carrinho'] as $ids){ //para poder exibir itens repetidos
            foreach ($_SESSION['carrinho'] as $ids) { //para poder exibir itens repetidos
                if ($ids == $values['id']) {
                    echo('<tr>'
                    . '<td>' . $values['nome'] . '</td>'
                    . '<td>R$' . $values['preco_base'] . '</td>'
                    . '<td><a href="controller/carrinhoController.php?delete=' . $values['id'] . '">Retirar</a></td>'
                    . '</tr>');

                    $valor_total = $valor_total + $values['preco_base'];
                    if ($lista_produtos == "") {
                        $lista_produtos = $lista_produtos . $values['nome'];
                    } else {
                        $lista_produtos = $lista_produtos . ", " . $values['nome'];
                    }
                }
            }
        }

        echo('</tbody>');
        echo('<tfoot>');
        echo('<tr>');
        echo('<th></th>');
        echo('<th colspan="2" style="text-align:right">Valor Total: R$' . $valor_total . '</th>');

        echo('</tr>');
        echo('</tfoot>');
        echo(' </table>');
        echo('</div>');
        echo('<div class="col-md-2"></div>');
        echo('</div>');
    }
} else {
    echo('<div class="alert alert-danger">'
    . 'Logue em sua conta para poder adicionar itens ao carrinho!'
    . '</div>');
}
?>