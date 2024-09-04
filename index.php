<?php
require_once __DIR__ . '/category/product.php';
require_once __DIR__ . '/category/only.php';
require_once __DIR__ . '/catdogs/catdogs.php';





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach($products as $product): ?>
            <div>
                 <h1> Nome : <?php echo  $product->name  ?></h1>
                 <h2>Tipo : <?php echo  $product->type ?></h2>
                 <h3>Prezzo : <?php echo  $product-> price ?> </h3>
                 <h4>Descrizione :<?php echo  $product-> description ?> </h4>
                 <h5>Only :<?php echo  $product-> only ?? '-' ?> </h5>
                             
            </div>
        <?php endforeach; ?>
    
</body>
</html>