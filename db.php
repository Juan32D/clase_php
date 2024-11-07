<?php
$conexion = new mysqli("localhost", "root","","clase_php");
//var_dump($conexion);

$consulta = $conexion->query("SELECT * FROM usuarios");
$registro = $consulta->fetch_object(); 
//sentencia de consulta de registros;



echo $registro->id;
echo "<br>";

echo $registro->nombres;
echo "<br>";

echo $registro->documento;
echo "<br>";
echo $registro->telefono;
echo "<br>";



$consulta2 = $conexion ->query ("SELECT * FROM  usuarios where documento = 1041329560")->fetch_object();
echo "<br>";
if ($consulta2){

    echo "el documento existe";
}
else{

    echo"el documento no existe";
} 



$insert = $conexion ->query("INSERT INTO usuarios VALUES(null, 43858862,'juan',3127379828)");
var_dump($insert);


//while($total)
//{
    // echo $registro->documento."<br>";
    //echo $registro->telefono."<br>";
    //echo $registro->nombres."<br>";

//}

