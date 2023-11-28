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
            $ipv4=$_POST['ipv4'];
            $mac1=$_POST['mac'];

            $sql="update equipos_hcdl set nombre='".$nombre2."', ipv4='".$ipv4."', mac='".$mac1."' where id='".$id."'";
            $resultado=mysqli_query($conex,$sql);

            if($resultado){
                echo "<script language='JavaScript'>
                    alert('Los datos se actualizaron correctamente');
                    location.assign('equipos.php');
                </script>";
        
            }else{
                echo "<script language='JavaScript'>
                    alert('Los datos N0 se actualizaron');
                    location.assign('equipos.php');
                </script>";
            }
            mysqli_close($conex);

        }else{

            $id=$_GET['id'];
            $sql="select * from equipos_hcdl where id='".$id."'";
            $resultado=mysqli_query($conex,$sql);

            $fila=mysqli_fetch_assoc($resultado);
            $nombre2=$fila["nombre"];
            $ipv4=$fila["ipv4"];
            $mac1=$fila["mac"];

            mysqli_close($conex);

    ?>

    <h1>EDITAR FORMULARIO</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>Nonbre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre2; ?>"><br>

        <label>Direccion IPV4:</label>
        <input type="text" name="ipv4" value="<?php echo $ipv4; ?>"><br>

        <label>Direccion MAC:</label>
        <input type="text" name="mac" value="<?php echo $mac1; ?>"><br>

        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <input type="submit" name="enviar" value="Actualizar">
        <a href="equipos.php">Regresar</a>


    </form>
    <?php
        }
    ?>


</body>
</html>