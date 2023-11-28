<?php

include("connect.php");

if (isset($_POST['register2'])){
    if (strlen($_POST['name1']) >= 1 &&
        strlen($_POST['ip2']) >= 1 ){
            $name1 = trim($_POST['name1']);
            $ip2 = trim($_POST['ip2']);
            $consulta = "INSERT INTO `impresoras`(nombre, ip2) VALUES ('$name1','$ip2')";
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