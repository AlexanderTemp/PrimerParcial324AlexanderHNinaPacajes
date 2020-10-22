<?php
//include "connec.inc.php";
//session_start();
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
        <style>"/*Globales*/
            html{
                box-sizing: border-box;
                font-size:62.5%;/** RESET PARA REMS: 62.5%=10PX DE 16PX**/
            }
            /*pequeño segmeto de código que hace que el padding NO afecte al ancho que uno quiera otorgarle a un elemento ya que si: width 10px y  padding de 5px entonces el elemento medirá 20px que no se quiere*/
            *, *:before, *:after {
                box-sizing: inherit;
            }
            /*body se le aplica a TODO el documento*/
            body{
                font-family: 'Lato', sans-serif;
                font-size:1.6rem;
                /*El interlineado de cada parrafo*/
                line-height: 2;
            }
            img{
                /*se vuelven imagenes responsivas que se ajusten al contenedor*/
                max-width:100%;
            }
            h1{
                font-size:3.0rem;
                text-decoration-line: line-through;
                border-color: black;
            }
            h2{
                font-size: 1.8rem;
            }
            h3{
                font-size:1.6rem;
            }
            h4{
                font-size:1.2rem;
            }
            .contenedor{
                max-width: 120rem;
                margin:0 auto 0 auto;
            }
            a{
                text-decoration: none;
            }
            .contenido-centrado{
                max-width: 800px;
            }

            /*Utilidades sirven para llamar directamente en nuestro link de los html puden ser creadasd por nosotors y llamarlos cuando lo necesitemos*/
            .seccion{
                margin-top:1rem;
                margin-bottom:1rem;
            }
            .fw-300{
                font-weight: 300;
            }
            .centrar-texto{
                text-align:center;
            }
            .d-block{
                /*el imprtant quita el css ley el final es el que cuenta */
                display:block!important;
            }

            .sitio-header{
                padding:0;
                margin: 0;
            }
            .sitio-header.inicio{
                background-image: url(imagenes/header.jpg);
                background-position: center;
                background-size: cover;
                height: 27vh;
                min-height:15rem;
            }
            .barra{
                display: flex;
                justify-content: space-between;
                height: 27vh;
                min-height: 15rem;
                align-items: center;
                padding-top:0rem;
            }
            .contenido-header{
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }
            .contenido-header h1{
                color:#333333;
                padding: 0rem 0rem 0rem 2rem;
                max-width: 60rem;
                line-height: 2;
                text-decoration: none;
                text-align: center;
            }
            .barra a{
                color:white;
                text-decoration:none;
                /*ahora 1.8 rem = 18px*/
                font-size: 1.8rem;
                margin-right:2rem;
            }
            .barra img{
                max-height: 15rem;
                max-width: 15rem;
                padding: 1rem;
            }


            .main{
                display: flex;
                justify-content: center;
                align-items: center;
                margin:7rem 0;
            }
            .usuario-con h2{
                text-align: center;
                font-size: 2.5rem;
                padding: 0.5rem;
                margin:0;
            }

            .site-footer{
                background-color: #333333;
                margin:0;
            }
            .contenedor-footer{
                background-color: #333333;
                margin:0;
                padding:0;
                display:flex;
                justify-content: center;
                align-items: center;
            }
            .contenedor-footer h3{
                color: white;
                font-size: 2.1rem;
            }

            .main-usu {
                display: flex;
                justify-content: space-evenly;
                align-items: center;
                margin: 4rem 0;
            }
            .datos-personales h2{
                font-size: 2rem;
                line-height: 2rem;
                color: red;
            }
            .datos-personales h3{
                font-size: 1.5rem;
                line-height: 0.5rem;
                color: dimgrey;
            }
            .datos-personales h4{
                font-size:1.6rem;
                line-height: 0;
            }
            .tabla-notasusu{
                border-collapse: inherit;
                border-spacing: 0px;
            }
            .tabla-notasusu h2{
                font-size: 2rem;
                line-height: 0.2rem;
            }
            .tabla-notasusu h3{
                font-size: 1.5rem;
                line-height: 0.2rem;
                color: black;
            }

            .tabla-notasusu tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            .tabla-notasusu th {
                background-color: #333333;
                color: white;
            }
            .volver-boton{
                display: flex;
                justify-content: center;
                align-items: center;
                color:rebeccapurple;
            }



            .tabla-phpsen, th, td{
                border-spacing: 3px;
                border:1px solid red;
            }
            .tabla-phpsen td{
                text-align: center;
            }"></style>
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
//    $sql="select nombrecompleto from identificador where ci='$log'";
//    $res=mysqli_query($conn,$sql);
//    $nombre=$res->fetch_assoc();
      obtenerheader();
//    echo "<h1>Bienvenido: $dato</h1>";
      imagenes();
    ///aqui va la imagen perfin
                    ?>
                </div> 
            </div>
        </header>

        <main class="main-usu">
            <div class="datos-personales">
                <h2>Datos personales: </h2>
                <?php
    obtenerdatos();
    /////datos personales h3 h4
                ?>    

            </div>
            <div class="notas-personales">
                <table class="tabla-notasusu">
                    <tr>
                        <th><h2>Materia(s):</h2></th>
                        <th><h2>Nota(s):</h2></th>
                    </tr>
                    <?php
//////////las notas 
  //  notas();
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