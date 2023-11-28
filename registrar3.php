<?php

include("connect.php");

if (isset($_POST['register3'])){
    if (strlen($_POST['name2']) >= 1 &&
        strlen($_POST['modelo']) >= 1 && 
        strlen($_POST['mac1']) >= 1 &&
        strlen($_POST['snumber']) >= 1 ){
            $name2 = trim($_POST['name2']);
            $modelo = trim($_POST['modelo']);
            $mac1 = trim($_POST['mac1']);
            $snumber = trim($_POST['snumber']);
            $consulta = "INSERT INTO `aps`(nombre, modelo, mac, serial_n) VALUES ('$name2','$modelo','$mac1','$snumber')";
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