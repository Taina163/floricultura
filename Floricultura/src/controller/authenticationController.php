<?php
if(!isset($_SESSION['logado'])){
    header('location: ../index.php?cod=expired');
}
?>