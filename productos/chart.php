
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
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

    <div class="shopping-cart">
        <h3 class='shopping-cart-title'>Producto</h3>
        <h6 class='shopping-cart-subtitle'>Cantidad</h6>
        
    <?php

    $nl = "<br>";


    $amount = ['Mini Cactus' => 0, 'Lote Bolígrafos' => 0, 'Baraja de cartas' => 0, 'Axe bodyspray' => 0];

    // No element in shopping cart yet variable
    $empty = true;

    if(isset($_COOKIE['product_a'])){
        $amount['Mini Cactus'] = $_COOKIE['product_a'];
    };

    if(isset($_COOKIE['product_b'])){
        $amount['Lote Bolígrafos'] = $_COOKIE['product_b'];
    };

    if(isset($_COOKIE['product_c'])){
        $amount['Baraja de cartas'] = $_COOKIE['product_c'];
    };

    if(isset($_COOKIE['product_d'])){
        $amount['Axe bodyspray'] = $_COOKIE['product_d'];
    };

    

    foreach($amount as $key => $value) {
        if($value>0){
            echo '<ul class="list-group">';
                echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                    echo $key;
                    echo '<span class="badge bg-primary rounded-pill">'. $value .'</span>';
                echo '</li>';
            echo '</ul>';
            $empty = false;
        }
    }

    if($empty){
        echo '<ul class="list-group">';
        echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
            echo 'Oh no! parece que tu carrito está vacío...';
            echo '<span class="badge bg-primary rounded-pill">vacío</span>';
        echo '</li>';
    echo '</ul>';
    }



    ?>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>