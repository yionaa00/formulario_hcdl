<?php
    include("connect.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>EDITAR</title>
    <link rel="stylesheet" type="text/css" href="#">


</head>
<body>
    <?php

        if(isset($_POST['enviar'])){

            $id=$_POST['id'];
            $nombre2=$_POST['nombre'];
            $ip2=$_POST['ip2'];

            $sql="update impresoras set nombre='".$nombre2."', ip2='".$ip2."' where id='".$id."'";
            $resultado=mysqli_query($conex,$sql);

            if($resultado){
                echo "<script language='JavaScript'>
                    alert('Los datos se actualizaron correctamente');
                    location.assign('impresoras.php');
                </script>";
        
            }else{
                echo "<script language='JavaScript'>
                    alert('Los datos N0 se actualizaron');
                    location.assign('impresoras.php');
                </script>";
            }
            mysqli_close($conex);

        }else{

            $id=$_GET['id'];
            $sql="select * from impresoras where id='".$id."'";
            $resultado=mysqli_query($conex,$sql);

            $fila=mysqli_fetch_assoc($resultado);
            $nombre2=$fila["nombre"];
            $ip2=$fila["ip2"];

            mysqli_close($conex);

    ?>

    <h1>EDITAR FORMULARIO</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>Nonbre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre2; ?>"><br>

        <label>Direccion IPV4:</label>
        <input type="text" name="ip2" value="<?php echo $ip2; ?>"><br>

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <input type="submit" name="enviar" value="Actualizar">
        <a href="impresoras.php">Regresar</a>


    </form>
    <?php
        }
    ?>


</body>
</html>