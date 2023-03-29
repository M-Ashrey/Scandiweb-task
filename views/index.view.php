<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views\styles\pico.min.css">
    <link rel="stylesheet" href="views\styles\style.css">
    <title>Product List</title>
</head>
<body>
    <header>
        <h1>Product List Page</h1>
        <div class="buttons">
            <a href="add-product"><button>ADD</button></a>
            <button id="delete-product-btn" type="submit" form="products">MASS DELETE</button>
        </div>
    </header>
    <main>
    <form id='products' method='post' action=''>
        <ul>
        
            <?php 
                foreach ($products as $product) {
                    $sku = $product->getSku();
                    $name = $product->getName();
                    $price = $product->getPrice();
                    $spec = $product->getSpec();
                    echo "<li>
                            <input class='delete-checkbox' name='delete-checkbox[]' type='checkbox' value='$sku'>
                            <p>$sku</p>
                            <h2>$name</h2>
                            <p>$price</p>
                            <p>$spec</p>
                        </li>";
                }
            ?>
        </ul>
    </form>
    </main>
    <footer>
        <p>Scandiweb Test Assignment</p>
    </footer>
    <script src="views/delete.js"></script>
</body>
</html>