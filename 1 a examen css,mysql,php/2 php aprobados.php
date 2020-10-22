<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="estilosindex.css">
    </head>
    <body>
        <?php
include "connec.inc.php";
$sql="select (select count(*) from identificador iden,(select iden.ci citemp, avg(nt.nota) prom from notas nt, identificador iden where nt.ci=iden.ci and iden.residencia=1 group by iden.ci) tmp
where iden.ci=tmp.citemp and tmp.prom>51) ch,
(select count(*) from identificador iden,(select iden.ci citemp, avg(nt.nota) prom from notas nt, identificador iden where nt.ci=iden.ci and iden.residencia=2 group by iden.ci) tmp
where iden.ci=tmp.citemp and tmp.prom>51) lpz,
(select count(*) from identificador iden,(select iden.ci citemp, avg(nt.nota) prom from notas nt, identificador iden where nt.ci=iden.ci and iden.residencia=3 group by iden.ci) tmp
where iden.ci=tmp.citemp and tmp.prom>51) cb,
(select count(*) from identificador iden,(select iden.ci citemp, avg(nt.nota) prom from notas nt, identificador iden where nt.ci=iden.ci and iden.residencia=4 group by iden.ci) tmp
where iden.ci=tmp.citemp and tmp.prom>51) oru,
(select count(*) from identificador iden,(select iden.ci citemp, avg(nt.nota) prom from notas nt, identificador iden where nt.ci=iden.ci and iden.residencia=5 group by iden.ci) tmp
where iden.ci=tmp.citemp and tmp.prom>51) pt,
(select count(*) from identificador iden,(select iden.ci citemp, avg(nt.nota) prom from notas nt, identificador iden where nt.ci=iden.ci and iden.residencia=6 group by iden.ci) tmp
where iden.ci=tmp.citemp and tmp.prom>51) tj,
(select count(*) from identificador iden,(select iden.ci citemp, avg(nt.nota) prom from notas nt, identificador iden where nt.ci=iden.ci and iden.residencia=7 group by iden.ci) tmp
where iden.ci=tmp.citemp and tmp.prom>51) sc,
(select count(*) from identificador iden,(select iden.ci citemp, avg(nt.nota) prom from notas nt, identificador iden where nt.ci=iden.ci and iden.residencia=8 group by iden.ci) tmp
where iden.ci=tmp.citemp and tmp.prom>51) be,
(select count(*) from identificador iden,(select iden.ci citemp, avg(nt.nota) prom from notas nt, identificador iden where nt.ci=iden.ci and iden.residencia=9 group by iden.ci) tmp
where iden.ci=tmp.citemp and tmp.prom>51) pd";
$res = mysqli_query($conn, $sql);
$arrres=$res->fetch_assoc();
//var_dump($arrres);    
$ch=$arrres['ch'];
$lp=$arrres['lpz'];
$cb=$arrres['cb'];
$or=$arrres['oru'];
$pt=$arrres['pt'];
$tj=$arrres['tj'];
$sc=$arrres['sc'];
$be=$arrres['be'];
$pd=$arrres['pd'];
        ?>
    <h2>¿Cuantos aprobados existen por departamento?</h2>
    <table class="tabla-phpsen">
        <tr>
            <th>Chuquisaca</th>
            <th>La Paz</th>
            <th>Cochabamba</th>
            <th>Oruro</th>
            <th>Potosí</th>
            <th>Tarija</th>
            <th>Santa Cruz</th>
            <th>Beni</th>
            <th>Pando</th>
        </tr>
        <tr>
            <?php
                echo "<td>$ch</td>";
                echo "<td>$lp</td>";
                echo "<td>$cb</td>";
                echo "<td>$or</td>";
                echo "<td>$pt</td>";
                echo "<td>$tj</td>";
                echo "<td>$sc</td>";
                echo "<td>$be</td>";
                echo "<td>$pd</td>";
            
            ?>
        </tr>
        
    </table>
    </body>
</html>