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
    <h1>Formulario HCDL | ACCESS POINTS</h1>

    <ul>
        <li><a href="aps.php">Access Point</a></li>
        <li><a href="equipos.php">Equipos HCDL</a></li>
        <li><a href="impresoras.php">Impresoras</a></li>
    </ul>

        <input type="text" name="name2" placeholder="Nombre" required>
        <input type="text" name="modelo" placeholder="Modelo" required>
        <input type="text" name="mac1" placeholder="Direccion MAC" required>
        <input type="text" name="snumber" placeholder="Numero de serie" required>
        <input type="submit" name="register3">

    </form>

        <table border="1">
            <tr>
                <td>ID</td>
                <td>NOMBRE</td>
                <td>MODELO</td>
                <td>DIRECCION MAC</td>
                <td>NUMERO DE SERIE</td>
            </tr>

            <?php
            $sql="SELECT * from aps";
            $result=mysqli_query($conex, $sql);

            while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['id'] ?></td>
                <td><?php echo $mostrar['nombre'] ?></td>
                <td><?php echo $mostrar['modelo'] ?></td>
                <td><?php echo $mostrar['mac'] ?></td>
                <td><?php echo $mostrar['serial_n'] ?></td>
                <td>
                    <?php echo "<a href='editar.php?id=".$mostrar['id']."'>EDITAR</a>"; ?>
                    -
                    <?php echo "<a href='eliminar.php?id=".$mostrar['id']."' onclick='return confirmar()'>ELIMINAR</a>"; ?>
                </td>
            </tr>

            <?php
            }
            ?>
        </table>

        <?php
            include("registrar3.php");
        ?>

</body>
</html>