<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        include "connec.inc.php";
        $log=$_POST['usuario'];
        $cont=$_POST['contra'];
    ///con include puedo tener acceso a las variables de el otro archivo
        $sql="select * from usuario where ci='$log' and contra='$cont' ";
        $res=mysqli_query($conn,$sql);
        if(!empty($res) AND mysqli_num_rows($res) > 0){
            session_start();
            $_SESSION['user']=$log;
            //echo var_dump($_SESSION);
            header("location: usuario.php");
            echo 1;
        }else{
            echo "Usuario o Constraseña incorrecta";
        }
    ///$extraccion = mysqli_fetch_array($res);
    ///print_r($res)ç
    ///print_r($extraccion)
    ?>
</body>
</html>