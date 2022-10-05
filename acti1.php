<?php
        $hijos = $_POST["numhijos"];
        $importe= $_POST["importe"];

        $comision = (7.5 / 100) * $importe;
            echo "Tu comision sera de: ".$comision;
        $comision = $comision;
        
        $bonificacion = 50 * $hijos;
            echo " Tu bonificacion sera de: ".$bonificacion;
        $bonificacion = $bonificacion;
        
        $sueldo_bruto = 600 + $comision + $bonificacion;
            echo " El sueldo bruto sera de: ".$sueldo_bruto;
        $sueldo_bruto = $sueldo_bruto;

        $descuento = (11 / 100) * $sueldo_bruto;
            echo " Tu descuento sera de: ".$descuento;
        $descuento = $descuento;

        $sueldo_neto = $sueldo_bruto - $descuento;
            echo " Tu sueldo neto/final sera de: ".$sueldo_neto;
?>