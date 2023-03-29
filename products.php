<?php
require_once("app/app.php");

$products = $db->getProducts();

//view
include("views/index.view.php");


$app->massDelete($db);