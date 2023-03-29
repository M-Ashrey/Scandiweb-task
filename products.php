<?php


$products = $db->getProducts();

//view
include("views/index.view.php");


$app->massDelete($db);