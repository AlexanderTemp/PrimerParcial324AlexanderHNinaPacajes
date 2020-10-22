<?php

function comparacontra($ci, $contra){
    $resultado=false;
    $login1=[
        "ci"=>"5950236",
        "contra"=>"alexander3456",
    ];
    $login2=[
        "ci"=>"9985475",
        "contra"=>"dos3cuatro",
    ];
    $login3=[
        "ci"=>"6875418",
        "contra"=>"12345ana",
    ];
    $login4=[
        "ci"=>"9985463",
        "contra"=>"regenc123",
    ];
    $login5=[
        "ci"=>"8974135",
        "contra"=>"lulu3120",
    ];
    $login6=[
        "ci"=>"4648907",
        "contra"=>"sonichedgehog",
    ];
    if(($login1["ci"])&&($login1['contra']==$contra)){
        $resultado=true;
    }else if(($login2['ci']==$ci)&&($login2['contra']==$contra)){
        $resultado=true;
    }else if(($login3['ci']==$ci)&&($login3['contra']==$contra)){
        $resultado=true;    
    }else if(($login4['ci']==$ci)&&($login4['contra']==$contra)){
        $resultado=true;
    }else if(($login5['ci']==$ci)&&($login5['contra']==$contra)){
        $resultado=true;
    }else if(($login6['ci']==$ci)&&($login6['contra']==$contra)){
        $resultado=true;
    }
    return $resultado;
}
function obtenerheader(){
    $log=$_SESSION['user'];

    $identificadordato1 = [
        "ci" => "5950236",
        "nombrecompleto" => "Alexander Humberto Nina Pacajes",
        "fechanac"=> "1998-05-30",
        "residencia"=> "2",
        "sourceimagen"=> "usuariovaron1.jpg",
    ];
    $identificadordato2 = [
        "ci" => "9985475",
        "nombrecompleto" => "Jose Antonio Lozada Lopez",
        "fechanac"=> "1998-03-20",
        "residencia"=> "1",
        "sourceimagen"=> "usuariovaron2.jpg",
    ];  
    $identificadordato3 = [
        "ci" => "6875418",
        "nombrecompleto" => "Ana Lucia Lopez Perez",
        "fechanac"=> "1999-06-05",
        "residencia"=> "2",
        "sourceimagen"=> "usuariomujer1.jpg",
    ];
    $identificadordato4= [
        "ci" => "9985463",
        "nombrecompleto" => "Regina Encarnacion Murillo Torrez",
        "fechanac"=> "1998-12-13",
        "residencia"=> "1",
        "sourceimagen"=> "usuariomujer2.jpg",
    ];
    $identificadordato5 = [
        "ci" => "8974135",
        "nombrecompleto" => "Laura Luciana Osco Nina",
        "fechanac"=> "2000-08-07",
        "residencia"=> "3",
        "sourceimagen"=> "usuariomujer3.jpg",
    ];
    $identificadordato6 = [
        "ci" => "4648907",
        "nombrecompleto" => "Sonia Tejerina Telleria",
        "fechanac"=> "1997-02-10",
        "residencia"=> "5",
        "sourceimagen"=> "usuariomujer4.jpg",
    ];

    if($log==$identificadordato1["ci"]){
        $nombre=$identificadordato1["nombrecompleto"];
        echo "<h1>Bienvenido:$nombre</h1>";
    }else if($log==$identificadordato2["ci"]){
        $nombre=$identificadordato2["nombrecompleto"];
        echo "<h1>Bienvenido:$nombre</h1>";
    }else if($log==$identificadordato3["ci"]){
        $nombre=$identificadordato3["nombrecompleto"];
        echo "<h1>Bienvenido:$nombre</h1>";
    }else if($log==$identificadordato4["ci"]){
        $nombre=$identificadordato4["nombrecompleto"];
        echo "<h1>Bienvenido:$nombre</h1>";
    }else if($log==$identificadordato5["ci"]){
        $nombre=$identificadordato5["nombrecompleto"];
        echo "<h1>Bienvenido:$nombre</h1>";
    }else if($log==$identificadordato6["ci"]){
        $nombre=$identificadordato6["nombrecompleto"];
        echo "<h1>Bienvenido:$nombre</h1>";
    }
}
function obtenerdatos(){
        $log=$_SESSION['user'];

    $identificadordato1 = [
        "ci" => "5950236",
        "nombrecompleto" => "Alexander Humberto Nina Pacajes",
        "fechanac"=> "1998-05-30",
        "residencia"=> "2",
        "sourceimagen"=> "usuariovaron1.jpg",
    ];
    $identificadordato2 = [
        "ci" => "9985475",
        "nombrecompleto" => "Jose Antonio Lozada Lopez",
        "fechanac"=> "1998-03-20",
        "residencia"=> "1",
        "sourceimagen"=> "usuariovaron2.jpg",
    ];  
    $identificadordato3 = [
        "ci" => "6875418",
        "nombrecompleto" => "Ana Lucia Lopez Perez",
        "fechanac"=> "1999-06-05",
        "residencia"=> "2",
        "sourceimagen"=> "usuariomujer1.jpg",
    ];
    $identificadordato4= [
        "ci" => "9985463",
        "nombrecompleto" => "Regina Encarnacion Murillo Torrez",
        "fechanac"=> "1998-12-13",
        "residencia"=> "1",
        "sourceimagen"=> "usuariomujer2.jpg",
    ];
    $identificadordato5 = [
        "ci" => "8974135",
        "nombrecompleto" => "Laura Luciana Osco Nina",
        "fechanac"=> "2000-08-07",
        "residencia"=> "3",
        "sourceimagen"=> "usuariomujer3.jpg",
    ];
    $identificadordato6 = [
        "ci" => "4648907",
        "nombrecompleto" => "Sonia Tejerina Telleria",
        "fechanac"=> "1997-02-10",
        "residencia"=> "5",
        "sourceimagen"=> "usuariomujer4.jpg",
    ];
    $nombre="";
    $ci="";
    $fechanac="";
    $residencia="";
    
    if($log==$identificadordato1["ci"]){
        $nombre=$identificadordato1["nombrecompleto"];
        $ci=$identificadordato1["ci"];
        $fechanac=$identificadordato1["fechanac"];
        $residencia=$identificadordato1["residencia"];
    }else if($log==$identificadordato2["ci"]){
        $nombre=$identificadordato2["nombrecompleto"];
        $ci=$identificadordato2["ci"];
        $fechanac=$identificadordato2["fechanac"];
        $residencia=$identificadordato2["residencia"];
    }else if($log==$identificadordato3["ci"]){
        $nombre=$identificadordato3["nombrecompleto"];
        $ci=$identificadordato3["ci"];
        $fechanac=$identificadordato3["fechanac"];
        $residencia=$identificadordato3["residencia"];
    }else if($log==$identificadordato4["ci"]){
        $nombre=$identificadordato4["nombrecompleto"];
        $ci=$identificadordato4["ci"];
        $fechanac=$identificadordato4["fechanac"];
        $residencia=$identificadordato4["residencia"];
    }else if($log==$identificadordato5["ci"]){
        $nombre=$identificadordato5["nombrecompleto"];
        $ci=$identificadordato5["ci"];
        $fechanac=$identificadordato5["fechanac"];
        $residencia=$identificadordato5["residencia"];
    }else if($log==$identificadordato6["ci"]){
        $nombre=$identificadordato6["nombrecompleto"];
        $ci=$identificadordato6["ci"];
        $fechanac=$identificadordato6["fechanac"];
        $residencia=$identificadordato6["residencia"];
    }
    echo "<h3>Carnet de Identidad: </h3>";
    echo "<h4>$ci</h4>";
    
    echo "<h3>Nombre Completo: </h3>";
    echo "<h4>$nombre</h4>";

    echo "<h3>Fecha de Nacimiento: </h3>";
    echo "<h4>$fechanac</h4>";
    echo "<h3>Residencia: </h3>";
    echo "<h4>$residencia</h4>";
}
function imagenes(){
    $log=$_SESSION['user'];

    $identificadordato1 = [
        "ci" => "5950236",
        "nombrecompleto" => "Alexander Humberto Nina Pacajes",
        "fechanac"=> "1998-05-30",
        "residencia"=> "2",
        "sourceimagen"=> "usuariovaron1.jpg",
    ];
    $identificadordato2 = [
        "ci" => "9985475",
        "nombrecompleto" => "Jose Antonio Lozada Lopez",
        "fechanac"=> "1998-03-20",
        "residencia"=> "1",
        "sourceimagen"=> "usuariovaron2.jpg",
    ];  
    $identificadordato3 = [
        "ci" => "6875418",
        "nombrecompleto" => "Ana Lucia Lopez Perez",
        "fechanac"=> "1999-06-05",
        "residencia"=> "2",
        "sourceimagen"=> "usuariomujer1.jpg",
    ];
    $identificadordato4= [
        "ci" => "9985463",
        "nombrecompleto" => "Regina Encarnacion Murillo Torrez",
        "fechanac"=> "1998-12-13",
        "residencia"=> "1",
        "sourceimagen"=> "usuariomujer2.jpg",
    ];
    $identificadordato5 = [
        "ci" => "8974135",
        "nombrecompleto" => "Laura Luciana Osco Nina",
        "fechanac"=> "2000-08-07",
        "residencia"=> "3",
        "sourceimagen"=> "usuariomujer3.jpg",
    ];
    $identificadordato6 = [
        "ci" => "4648907",
        "nombrecompleto" => "Sonia Tejerina Telleria",
        "fechanac"=> "1997-02-10",
        "residencia"=> "5",
        "sourceimagen"=> "usuariomujer4.jpg",
    ];
    $imagen="";
    
    if($log==$identificadordato1["ci"]){
        $imagen=$identificadordato1["sourceimagen"];
    }else if($log==$identificadordato2["ci"]){
        $imagen=$identificadordato2["sourceimagen"];
    }else if($log==$identificadordato3["ci"]){
        $imagen=$identificadordato3["sourceimagen"];
    }else if($log==$identificadordato4["ci"]){
        $imagen=$identificadordato4["sourceimagen"];
    }else if($log==$identificadordato5["ci"]){
        $imagen=$identificadordato5["sourceimagen"];
    }else if($log==$identificadordato6["ci"]){
        $imagen=$identificadordato6["sourceimagen"];
    }
    echo "<img src='examen/imagenes/$imagen' alt='imagenusuario'>";
}
?>