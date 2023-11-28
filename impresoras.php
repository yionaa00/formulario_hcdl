<?php
$conex = mysqli_connect("localhost", "root", "", "formulario_hcdl");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario| HCDL</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('¿Estas seguro de eliminar este campo?, se eliminaran los datos establecidos');
        }
    </script>
    <link rel="stylesheet" type="text/css" href="#">


</head>
<body>
    <form method="post">
        
        <h1>Formulario HCDL | IMPRESORAS</h1>

        <ul>
            <li><a href="aps.php">Access Point</a></li>
            <li><a href="equipos.php">Equipos HCDL</a></li>
            <li><a href="impresoras.php">Impresoras</a></li>
        </ul>

        <input type="text" name="name1" placeholder="Nombre" required>
        <input type="text" name="ip2" placeholder="Direccion IP" required>
        <input type="submit" name="register2">

        
    </form>
        <table border="1">
            <tr>
                <td>id</td>
                <td>nombre</td>
                <td>ip2</td>
            </tr>

            <?php
            $sql="SELECT * from impresoras";
            $result=mysqli_query($conex, $sql);

            while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['id'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['ip2'] ?></td>
                <td>
                    <?php echo "<a href='editar3.php?id=".$mostrar['id']."'>EDITAR</a>"; ?>
                    -
                    <?php echo "<a href='eliminar3.php?id=".$mostrar['id']."' onclick='return confirmar()'>ELIMINAR</a>"; ?>
                </td>
            </tr>

            <?php
            }
            ?>
        </table>



        <?php
            include("registrar2.php");
        ?>

</body>
</html>