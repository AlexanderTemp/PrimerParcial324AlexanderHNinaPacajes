<?php
include "connec.inc.php";
session_start();
//var_dump($_SESSION);
if(isset($_SESSION['user'])){
    $log=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilosindex.css">
    </head>
    <body bgcolor="<?php
    if(isset($_GET['btn'])){
        $col=$_GET['colorcambiado'];
        if(isset($col)){
            echo $p=$col;
        }else{
            echo $p="#ffffff";
        }

    }else{
        echo $p="#f8efd4";
    }           

                   ?>">
        <header class="sitio-header inicio">
            <div class="contenedor contenido-header">
                <div class="barra">
                    <?php 
    $sql="select nombrecompleto from identificador where ci='$log'";
    $res=mysqli_query($conn,$sql);
    $nombre=$res->fetch_assoc();
    $dato=$nombre['nombrecompleto'];
    echo "<h1>Bienvenido: $dato</h1>";
                    ?>
                    <img src="<?php
    $sql2="select imagenperfil from identificador where ci='$log'";
    $res2=mysqli_query($conn,$sql2);
    $imagen=$res2->fetch_assoc();
    $mostrarimg=$imagen['imagenperfil'];
    echo "$mostrarimg";
                              ?>" alt="imagenusuario">
                </div> 
            </div>
        </header>

        <main class="main-usu">
            <div class="datos-personales">
                <h2>Datos personales: </h2>
                <?php
    $sql3="select * from identificador where ci='$log'";
    $res3=mysqli_query($conn, $sql3);
    $arrd=$res3->fetch_assoc();
    $nombrecompletousu=$arrd['nombrecompleto'];
    $ciusu=$arrd['ci'];
    $ciudadaniausu="";
    switch($arrd['residencia']){
        case '1':
            $ciudadaniausu="Chuquisaca (CH)";
            break;
        case '2':
            $ciudadaniausu="La Paz (LP)";
            break;
        case '3':
            $ciudadaniausu="Cochabamba (CB)";
            break;
        case '4':
            $ciudadaniausu="Oruro (OR)";
            break;
        case '5':
            $ciudadaniausu="Potosí (PT)";
            break;
        case '6':
            $ciudadaniausu="Tarija (TJ)";
            break;
        case '7':
            $ciudadaniausu="Santa Cruz (SC)";
            break;
        case '8':
            $ciudadaniausu="Beni (BE)";
            break;
        case '9':
            $ciudadaniausu="Pando (PD)";
            break;    
    }
    $fechanac=$arrd['fechanacimiento'];
    //echo "<h3>Nombre Completo:</h3>";
    //echo "</br>";
    //echo "<h2>$nombrecompletousu</h2>";
    //echo "</br>";
    //echo "<h3>Carnet de Identidad: </h3>";
    //echo "</br>";
    //echo "<h2>$ciusu</h2>";
    //echo "</br>";
    //echo "<h3>Ciudadanía (Residencia):</h3>";
    //echo "</br>";
    //echo "<h2>$ciudadaniausu</h2>";
    //echo "</br>";
    //echo "<h3>Fecha de Nacimiento: </h3>";
    //echo "</br>";
    //echo "<h2>$fechanac</h2>";

                ?>    
                <h3>Nombre Completo:</h3>
                <h4><?php echo $nombrecompletousu;?></h4>
                <h3>Carnet de Identidad:</h3>
                <h4><?php echo $ciusu;?></h4>
                <h3>Ciudadanía: </h3>
                <h4><?php echo $ciudadaniausu;?></h4>
                <h3>Fecha de Nacimiento: </h3>
                <h4><?php echo $fechanac;?></h4>

            </div>
            <div class="notas-personales">
                <table class="tabla-notasusu">
                    <tr>
                        <th><h2>Materia(s):</h2></th>
                        <th><h2>Nota(s):</h2></th>
                    </tr>
                    <?php
    $sql4="select * from notas where ci='$log'";
    $res4=mysqli_query($conn,$sql4);
    while($notasusu=$res4->fetch_assoc()){
        echo "<tr>";
        $notaintusu=$notasusu['nota'];
        $materiaintusu=$notasusu['materia'];
        echo "<td><h3>$materiaintusu</h3></td>";
        echo "<td><h3>$notaintusu</h3></td>";         
        echo "</tr>";
    }
                    ?>
                </table>

            </div>


        </main>

        <section class="volver-boton">
            <form action="">
                <input type="submit" name="boton" value="CERRAR SESIÓN">
                <?php
    if(isset($_GET['boton'])){
        unset($_SESSION['user']);
        $conn->close();
        header("location: index.php");
    }
                ?>
            </form>
        </section>



        <footer class="site-footer">
            <div class="contenedor contenedor-footer">
                <h3>No te gusta el color de fondo, ¡cámbialo!:&nbsp;&nbsp;&nbsp;</h3>
                <form action="">
                    <select name="colorcambiado" id="">
                        <option value="#a3d8f4">Celeste</option>
                        <option value="#c3aed6">Morado</option>
                        <option value="#f5a25d">Naranja</option>
                        <option value="#94b4a4">Verde</option>
                    </select>
                    <input type="submit" name="btn" value="Aceptar">
                </form>
            </div>
        </footer>
    </body>
</html>


<?php
}
?>