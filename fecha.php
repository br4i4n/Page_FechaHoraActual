
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
    <style>
        body {
            color: white;
            background-size: cover; 
            backdrop-filter: blur;
            background-image: url("https://images4.alphacoders.com/113/1133950.jpg");
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }

        h1 {
         
            text-align: center;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
            border: 1px solid white;
            backdrop-filter: blur(5px);
            top: 44%;
            left: 50%;
            transform: translate(-50%, -60%);
        }
    </style>
</head>
<body>
    <h1>FECHA Y HORA ACTUAL</h1>
</body>
</html>

<?php


$dias = array(" ","Lunes", "Martes", "Miercoles", "Jueves", "Sabado", "Domingo");
$meses=array("Enero","Febrero", "Marzo","Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre","Octubre","Nombiembre", "Diciembre");

$dia1 = date('w');
$mes = date('d');
$anio = date('Y');
$nombreMes = date('n');
$horaActual = date("h:i:s");

echo ($dias[$dia1]." ".$mes." de ".$meses[$nombreMes-1]." de ".$anio."<br>"); 

    echo $horaActual;


?>
