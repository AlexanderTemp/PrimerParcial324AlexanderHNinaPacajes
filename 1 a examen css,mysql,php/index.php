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
                    <a href="/examen/index.php">
                        <h1>Sistema de Control Académico Alex</h1>
                    </a>
                    <img src="imagenes/globalusu.png" alt="imagenglobal">
                </div> 
            </div>
        </header>


        <main class="main">

            <div class="usuario-con">
                <h2>Identifícate</h2>
                <form class="" action="login.php" method="post">
                    <label for="usuario">Usuario: </label><br>
                    <input type="text" name="usuario"><br>

                    <label for="contra">Contraseña: </label><br>
                    <input type="password" name="contra"><br>
                    <input type="submit">
                </form> 
            </div>
        </main>


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