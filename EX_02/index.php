<?php
    $shopping_cart = 11.95;
    $tipo = "perifericos";

    $shipping_price = 0;
    $GIMBERNAT_20_ = 0;
    if ($shopping_cart <20 && $tipo =="cable") {
        echo " No se puede enviar ";
    }else if($shopping_cart <20 && $tipo =="perifericos") {
        $shipping_price +=4.99;
        echo "Los gastos de envío son ", $shipping_price,"€";
        echo '<br />';
        echo '<br />';
        echo "Precio de cesta", $shopping_cart,"€";
        echo '<br />';
        echo '<br />';
        echo "Precio total", $shopping_cart+$shipping_price,"€";


    }else if ($shopping_cart >=20 && $shopping_cart <=50) {
        $shipping_price +=4.99;
        echo "Los gastos de envío son ", $shipping_price,"€";
        echo '<br />';
        echo '<br />';
        echo "Precio de cesta", $shopping_cart,"€";
        echo '<br />';
        echo '<br />';
        echo "Precio total", $shopping_cart+$shipping_price,"€";



    }else if($shopping_cart >50 && $shopping_cart <=150) {
        echo "Los portes són gratis";
        echo '<br />';
        echo '<br />';
        echo "Precio de cesta", $shopping_cart,"€";
        echo '<br />';
        echo '<br />';
        echo "Precio total", $shopping_cart+$shipping_price,"€";

    }else if($shopping_cart >150) {
        echo "Codigo de descuento  GIMBERNAT_20_%";
        echo '<br />';
        echo '<br />';
        echo "Precio de cesta", $shopping_cart,"€";
        echo '<br />';
        echo '<br />';
        echo "Precio total", $shopping_cart+$shipping_price,"€";

    }

