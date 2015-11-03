<?php
if(isset($_REQUEST["d"])) {
	 $mysqli = new mysqli('mysql.hostinger.es','u445025416_ivo','20marina14','u445025416_espia'); //hostonger
   //$mysqli = new mysqli('localhost','root','','spy',33060); //local
      if (!$mysqli){
        die ("<h2>error connecting MYSQL<h2>"); //die treu missatge i surt pagina
      }
      $origen=$_REQUEST["o"];
      $destino=$_REQUEST["d"];
      $query="INSERT INTO visitas (origen,destino)VALUES ('$origen','$destino')";
      $result=$mysqli->query($query);
      header("Location: ".$destino);   
    
}
  ?>