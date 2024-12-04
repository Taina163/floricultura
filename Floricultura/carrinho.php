<?php
require_once'./shared/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 border-bottom border-3">
            <h2>Itens no carrinho:</h2>

            <table id="myTable" class="display table-hover">
                <thead>
                    <tr class="table-info">
                        <th>Lista de Produtos</th>
                        <th>Valor Produto</th>
                        <th>Retirar Produto</th>
                    </tr>
                </thead>
                <tbody>
<?php

require_once'src/controller/exibirTabelaCarrinho.php';


                
                    
               echo(' <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <form method="post" action="src/controller/carrinhoController.php">
                            <input type="hidden" name="lista_produtos" value="'.@$lista_produtos.'">
                            

                            <input type="hidden" name="valor_total" value="'. @$valor_total.'">
                           
                            <div class="mb-3 mt-3">

                                <select class="form-select" required name="farmacias_id">');
