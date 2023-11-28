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
            $modelo=$_POST['modelo'];
            $mac1=$_POST['mac'];
            $snumber=$_POST['serial_n'];

            $sql="update aps set nombre='".$nombre2."', modelo='".$modelo."', mac='".$mac1."', serial_n='".$snumber."' where id='".$id."'";
            $resultado=mysqli_query($conex,$sql);

            if($resultado){
                echo "<script language='JavaScript'>
                    alert('Los datos se actualizaron correctamente');
                    location.assign('aps.php');
                </script>";
        
            }else{
                echo "<script language='JavaScript'>
                    alert('Los datos N0 se actualizaron');
                    location.assign('aps.php');
                </script>";
            }
            mysqli_close($conex);

        }else{

            $id=$_GET['id'];
            $sql="select * from aps where id='".$id."'";
            $resultado=mysqli_query($conex,$sql);

            $fila=mysqli_fetch_assoc($resultado);
            $nombre2=$fila["nombre"];
            $modelo=$fila["modelo"];
            $mac1=$fila["mac"];
            $snumber=$fila["serial_n"];

            mysqli_close($conex);

    ?>

    <h1>EDITAR FORMULARIO</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>Nonbre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre2; ?>"><br>

        <label>Modelo:</label>
        <input type="text" name="modelo" value="<?php echo $modelo; ?>"><br>

        <label>Direccion MAC:</label>
        <input type="text" name="mac" value="<?php echo $mac1; ?>"><br>

        <label>Numero de serie:</label>
        <input type="text" name="serial_n" value="<?php echo $snumber; ?>"><br>

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <input type="submit" name="enviar" value="Actualizar">
        <a href="aps.php">Regresar</a>


    </form>
    <?php
        }
    ?>


</body>
</html>