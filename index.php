<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="content/main.css">
</head>
<body>
    <!-- NAVBAR -->
    <div class="container-fluid">
        <ul id="nav-wrapper" class="nav nav-tabs y">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="#">Tienda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Productos</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="productos/product_a.php">Mini Cactus</a></li>
                    <li><a class="dropdown-item" href="productos/product_b.php">Lote bolígrafos</a></li>
                    <li><a class="dropdown-item" href="productos/product_c.php">Baraja "Bicycle"</a></li>
                    <li><a class="dropdown-item" href="productos/product_d.php">Axe bodyspray</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Carrito</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="productos/chart.php">Ir al Carrito</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- PRODUCTS -->
    <div class="products">
        <a href="productos/product_a.php">
            <div class="product-wrapper">
                <img src="content/cactus.jpg" alt="">
                <h3>Mini Cactus</h3>
                <h4>14'99 eur</h4>
            </div>
        </a>
        <a href="productos/product_b.php">
            <div class="product-wrapper">
                <img src="content/pen.jpeg" alt="" >
                <h3>Lote bolígrafos</h3>
                <h4>3'99 eur</h4>
            </div>
        </a>
        <a href="productos/product_c.php">
            <div class="product-wrapper">
                <img src="content/card.jpg" alt="">
                <h3>Baraja "Bicycle"</h3>
                <h4>7'99 eur</h4>
            </div>
        </a>
        <a href="productos/product_d.php">
            <div class="product-wrapper">
                <img src="content/axe.jpeg" alt="" >
                <h3>Axe bodyspray</h3>
                <h4>2'49 eur</h4>
            </div>
        </a>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>