<?php

use Model\ComprasModel;

@session_start();
if(isset($_SESSION['logado'])){
if ($_POST) {
    print_r($_POST);
    require_once '../model/comprasModel.php';
    $compra = new comprasModel();
    $compra->setData(date('Y-m-d'));
    $compra->setLista_produtos($_POST['lista_produtos']);
    $compra->setValor_total($_POST['valor_total']);
    $compra->setUsuarios_id($_SESSION['id']);
    $total = $compra->insert();

    
    
    header('location: ../index.php?cod=compraFeita');
    $_SESSION['carrinho']= array();
}else{



//inicializa carrinho
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

if (isset($_REQUEST['delete'])) { //em caso de delete
    $location = array_search($_REQUEST['delete'], $_SESSION['carrinho']);

    unset($_SESSION['carrinho'][$location]);
}

if (isset($_REQUEST['id'])) { //em caso de adicionar
    array_push($_SESSION['carrinho'], $_REQUEST['id']);
}


//var_dump($_SESSION['carrinho']);
//var_dump($_COOKIE['carrinho']);
header('location:../carrinho.php');
}}else{
    header('location:../carrinho.php');
}
?>

