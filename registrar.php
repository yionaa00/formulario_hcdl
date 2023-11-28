<?php

include("connect.php");

if (isset($_POST['register'])){
    if (strlen($_POST['name']) >= 1 &&
        strlen($_POST['ipv4']) >= 1 && 
        strlen($_POST['mac']) >= 1 ){
            $name = trim($_POST['name']);
            $ipv4 = trim($_POST['ipv4']);
            $mac = trim($_POST['mac']);
            $consulta = "INSERT INTO `equipos_hcdl`(nombre, ipv4, mac) VALUES ('$name','$ipv4','$mac')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado){
                ?>
                    <h3 class="ok">REGISTRADO</h3>
                <?php
            } else {
                ?>
                    <h3 class="bad">NO REGISTRADO</h3>
                <?php
            }
        }
    }
?>