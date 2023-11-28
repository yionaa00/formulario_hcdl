<?php

    $id=$_GET['id'];
    include("connect.php");

    $sql="delete from impresoras where id='".$id."'";
    $resultado=mysqli_query($conex,$sql);

    if($resultado){

        echo "<script language='JavaScript'>
                alert('Los datos se eliminaron correctamente de la BASE DE DATOS');
                location.assign('impresoras.php');
        </script>";

    }else{

        echo "<script language='JavaScript'>
            alert('Los datos NO se eliminaron de la BASE DE DATOS');
            location.assign('impresoras.php');
        </script>";
    }

?>