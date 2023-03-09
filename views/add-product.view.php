<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views\styles\pico.min.css">
    <link rel="stylesheet" href="views\styles\add-product.style.css">
    <title>Add Product</title>
</head>
<body>
    <header>
        <h1>Product Add</h1>
        <div class="buttons">
            <button form="product_form" type="submit">Save</button>
            <a href="index.php"><button>Cancel</button></a>
        </div>
    </header>
    <main>
        <form id="product_form" method="POST">
            <label for="sku">SKU <input required id="sku" name="sku" type="text"></label>
            <label for="name">Name <input required id="name" name="name" type="text"></label>
            <label for="price">Price <input required id="price" name="price" type="text"></label>
            <label for="productType"> Type
                <select required id="productType" name="type">
                    <option>select-type</option>
                    <option id="Book">Book</option>
                    <option id="DVD">DVD</option>
                    <option id="Furniture">Furniture</option>
                </select>
            </label>
            <div id="cont"></div>
        </form>
        <script src="views/switch.js"></script>
    </main>
    <footer>
        <p>Scandiweb Test Assignment</p>
    </footer>
</body>
</html>