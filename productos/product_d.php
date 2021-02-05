<?php

    if(isset($_POST['submit'])){
        $amount = htmlentities($_POST['amount']);

        setcookie('product_d', $amount, time() + 86400);
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto D</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../content/main.css">
</head>
<body>
    <!-- NAVBAR -->
    <div class="container-fluid">
        <ul id="nav-wrapper" class="nav nav-tabs y">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../index.php">Tienda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Productos</a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="product_a.php">Mini Cactus</a></li>
                    <li><a class="dropdown-item" href="product_b.php">Lote bolígrafos</a></li>
                    <li><a class="dropdown-item" href="product_c.php">Baraja "Bicycle"</a></li>
                    <li><a class="dropdown-item" href="product_d.php">Axe bodyspray</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Carrito</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="chart.php">Ir al Carrito</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- PRODUCTS -->
    <div class="products-ind">
        <div id="product-wrapper" class="card-group">
            <div class="card">
                <img src="../content/axe.jpeg" class="card-img-top" height='400'>
                <div class="card-body">
                <h5 class="card-title">Axe deodorant bodyspray</h5>
                <p class="card-text">Pasamos de malos olores con esta nueva edición de Axe bodyspray.</p>
                <p class="card-text"><small class="text-muted">2'49 eur</small></p>
                <form action="product_d.php" method="POST">
                        <div class="input-group">
                            <input type="number" name="amount" class="form-control" aria-label="" min='1' max='40' placeholder="Seleccione una cantidad...">
                            <button class="btn btn-outline-primary" type="submit" name="submit">Añadir al carrito</button>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>