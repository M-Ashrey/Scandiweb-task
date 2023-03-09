<?php

require('config.php');
require('./data/db.class.php');
require('./data/product.class.php');
require('./data/book.class.php');
require('./data/dvd.class.php');
require('./data/furniture.class.php');
require('app.class.php');

$db = new db(CONFIG['db']);
$app = new app();