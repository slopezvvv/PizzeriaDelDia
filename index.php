<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'MODELO/Persona.php';
include_once 'MODELO/Cliente.php';
session_start();
$_SESSION["user"] = serialize(new Cliente("Juanito perez", 973848485));
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pizzeria pedidos online</title>
    </head>
    <body>
        <form action="CONTROLADOR/ControladorPedido.php" method="POST">
            <header>Pida su pizza ahora!</header>
            <select name="tipoProducto">
                <?php
                include_once('MODELO/Productos.php');
                ?>
                <option value="PROMO_INDIVIDUAL_BEBIDA"><?php echo("PRECIO: ".Productos::PROMO_INDIVIDUAL_BEBIDA.", Promo individual + bebida"); ?></option>
                <option value="PROMO_MEDIANA_BEBIDA"><?php echo("PRECIO: ".Productos::PROMO_MEDIANA_BEBIDA.", Promo mediana + bebida"); ?><option/>
                <option value="PROMO_FAMILIAR_BEBIDA"><?php echo("PRECIO: ".Productos::PROMO_FAMILIAR_BEBIDA.", Promo familiar + bebida"); ?><option/>
                <option value="PROMO_XL_BEBIDA"><?php echo("PRECIO: ".Productos::PROMO_XL_BEBIDA.", Promo XL + bebida"); ?><option/>
            </select>
            <input type="submit" value="Pedir pizza!"/>
        </form>
    </body>
</html>
