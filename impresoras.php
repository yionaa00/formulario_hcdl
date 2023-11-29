<?php
$conex = mysqli_connect("localhost", "root", "", "formulario_hcdl");
$where="";
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

    <h1>Formulario HCDL | IMPRESORAS</h1>

    <ul>
        <li><a href="aps.php">Access Point</a></li>
        <li><a href="equipos.php">Equipos HCDL</a></li>
        <li><a href="impresoras.php">Impresoras</a></li>
    </ul>

    <form action="" method="GET">
        <input class="form-control me-2" type="search" placeholder="Buscar" name="busqueda">
        <button class= "btn btn-outline-info" type="submit" name="enviar"> <b>Buscar</b> </button>
    </form>

    <?php
        if(isset($_GET['enviar'])){
            $busqueda = $_GET['busqueda'];

            if(isset($_GET['busqueda'])){
                $where="WHERE impresoras.nombre LIKE '%".$busqueda."%' OR ip2 LIKE'%".$busqueda."%'";
            }
        }
    ?>

    <br>

    <form method="post">

        <input type="text" name="name1" placeholder="Nombre" required>
        <input type="text" name="ip2" placeholder="Direccion IP" required>
        <input type="submit" name="register2">

        
    </form>
        <br>
        <table border="1">
            <tr>
                <td>id</td>
                <td>nombre</td>
                <td>ip2</td>
            </tr>

            <?php
            $sql="SELECT * from impresoras $where";
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