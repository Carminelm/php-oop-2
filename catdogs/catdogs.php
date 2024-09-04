<?php

require_once __DIR__ . '/../category/product.php';

$products = [
    new Product  ('lettiera cat ','cuccia',19.00,'comoda per il tuo gatto'),
    new Product  ('dog house ','cuccia',19.00,'comoda per il tuo cane'),
    new Product  ('dog food','cibo',10.00,'pasto per il tuo cane'),
    new Product  ('cat foot','cibo',10.00,'pasto per il tuo gatto'),
    new Only ('palldog','gioco',5.00,'pallina rossa','solo per cami')
];








?>