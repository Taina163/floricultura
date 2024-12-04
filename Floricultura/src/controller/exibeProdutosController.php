<?php

use Model\produtosModel;
use Model\subcategoriasModel;
require './vendor/autoload.php';

if (isset($_REQUEST['subid'])) {
    require_once 'src/model/subcategoriasModel.php';
    require_once 'src/model/produtosModel.php';
    $produtos = new produtosModel();
    $resultProdutos = $produtos->loadBySubcategorias($_REQUEST['subid']);
    $subcategorias = new subcategoriasModel();
    $resultSubcategorias = $subcategorias->loadById($_REQUEST['subid']);

    $status_count = 0; //
    $count = 0; //count id do carrocel
    $index = 0; //cada linha tem tres 

    foreach ($resultSubcategorias as $rounds) {
        echo('<div class="row">'); //abre row
        echo('<h2>' . $rounds['nome'] . '</h2>');
        foreach ($resultProdutos as $values) {
            if ($values['subcategorias_id'] == $rounds['id']) {

                echo('<div class="col-md-4">'); //abre col
                echo('<div class="card d-grid m-3">');
                echo('<div class="card-header">');
                echo('<h4 class="card-title">' . $values['nome'] . '</h4>');
                echo('</div>');
                echo('<div class="card-body">');
                echo('<img src="' . $values['imagem']
                . '" class="d-block" style="width: 245px;height:245px;">');
                echo('</div>');
                echo('<div class="card-footer">');
                echo('<h6 class="card-text">R$ ' . $values['preco_base'] . '</h6>');
                echo('<a  class="btn btn-info"'
                . 'href="exibirProduto.php?id=' . $values['id'] . '">'
                . 'Visualizar</a>');
                echo('</div>');
                echo('</div>'); //fecha col
                echo('</div>'); //fecha row
            }
        }
    }
}else{




require_once 'src/model/subcategoriasModel.php';
require_once 'src/model/produtosModel.php';
$produtos = new produtosModel();
$resultProdutos = $produtos->loadAll();
$subcategorias = new subcategoriasModel();
$resultSubcategorias = $subcategorias->loadAll();

$status_count = 0; //
$count = 0; //count id do carrocel
$index = 0; //cada linha tem tres 

foreach ($resultSubcategorias as $rounds) {
    echo('<div class="row">'); //abre row
    echo('<h2>' . $rounds['nome'] . '</h2>');
    foreach ($resultProdutos as $values) {
        if ($values['subcategorias_id'] == $rounds['id']) {

            echo('<div class="col-md-4">'); //abre col
            echo('<div class="card d-grid m-3">');
            echo('<div class="card-header">');
            echo('<h4 class="card-title">' . $values['nome'] . '</h4>');
            echo('</div>');
            echo('<div class="card-body">');
            echo('<img src="' . $values['imagem']
            . '" class="d-block" style="width: 245px;height:245px;">');
            echo('</div>');
            echo('<div class="card-footer">');
            echo('<h6 class="card-text">R$ ' . $values['preco_base'] . '</h6>');
            echo('<a  class="btn btn-info"'
            . 'href="exibirProduto.php?id=' . $values['id'] . '">'
            . 'Visualizar</a>');
            echo('</div>');
            echo('</div>'); //fecha col
            echo('</div>'); //fecha row
        }
    }
}}
?>

