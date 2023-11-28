<?php

    $id=$_GET['id'];
    include("connect.php");

    $sql="delete from aps where id='".$id."'";
    $resultado=mysqli_query($conex,$sql);

    if($resultado){

        echo "<script language='JavaScript'>
                alert('Los datos se eliminaron correctamente de la BASE DE DATOS');
                location.assign('aps.php');
        </script>";

    }else{

        echo "<script language='JavaScript'>
            alert('Los datos NO se eliminaron de la BASE DE DATOS');
            location.assign('aps.php');
        </script>";
    }

?>

<?php

    $id=$_GET['id'];
    include("connect.php");

    $sql="delete from equipos_hcdl where id='".$id."'";
    $resultado=mysqli_query($conex,$sql);

    if($resultado){

        echo "<script language='JavaScript'>
                alert('Los datos se eliminaron correctamente de la BASE DE DATOS');
                location.assign('equipos.php');
        </script>";

    }else{

        echo "<script language='JavaScript'>
            alert('Los datos NO se eliminaron de la BASE DE DATOS');
            location.assign('equipos.php');
        </script>";
    }

?>