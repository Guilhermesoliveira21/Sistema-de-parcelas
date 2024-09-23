<?php 
require_once MODEL . 'preloader.php';

$card = new Product();
$cardProduct = $card->findAllProductCard();



include_once VIEW . 'common/header.html';
include_once VIEW . 'common/topo-menu.html';
include_once VIEW . 'card/conteudo.html';


?>