
<?php
// datos de conexion en clase 
/*
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'usbw';
$dbname = 'diplomadob2';
*/


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1234';
$dbname = 'proyectofinal';


//creando el metodo para la conexion

// Comprueba conexion con MySQL
/*
$conexion = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
   if(! $conexion)
      echo "conexion erronea<br>";
   else
      echo "conexion exitosa<br>";
*/

//Metodo de la plataforma 
#puerto pro defecto en MySQL 3306
$conexion= new mysqli($dbhost,$dbuser,$dbpass,$dbname,'3306');
      if(mysqli_connect_errno()){
          echo "No conectado", mysqli_connect_error();
          exit();
      }
      else{
          echo "";
      }
      


//conoexion a postgreSQL
#ejemplo $conexion = pg_connect("host=localhost dbname=BASE_DE_DATOS user=USUARIO password=CONTRASEÑA");
//$conexionP = pg_connect("host=".$dbhost." dbname=".$dbname." user=".$dbuser." password=".$dbpass);



?>      



