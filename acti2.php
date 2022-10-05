<?php
    $precio_inicial = $_POST["PI"];
    $cantidad_gaseosas = $_POST["gaseosas"];
    $importe_compra = $_POST["importe"];

    $precio_final = (95 / 100) * $precio_inicial;
        echo "Nuevo precio de la gaseosa: ".$precio_final;
    $precio_final = $precio_final;

        echo " El importe de la compra es de: ".$importe_compra;

    $importe_descuento = (7 / 100) * $importe_compra;
        echo " El importe de descuento sera de: ".$importe_descuento;
    $importe_descuento = $importe_descuento;

    $importe_pago = $importe_compra - $importe_descuento;
        echo " El importe de compra sera de: ".$importe_pago;
    
    $obsequio = 2 * $cantidad_gaseosas;
        echo " Caramos que debes recibir como obsequio: ".$obsequio;
?>