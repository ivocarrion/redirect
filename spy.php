<?php
if(isset($_REQUEST["d"])) {
	 $mysqli = new mysqli('mysql.hostinger.es','u445025416_ivo','20marina14','u445025416_espia');
      if (!$mysqli){
        die ("<h2>error connecting MYSQL<h2>"); //die treu missatge i surt pagina
      }
      $origen=$_REQUEST["o"];
      $destino=$_REQUEST["d"];
      $query="INSERT INTO visitas (origen,destino)VALUES ('$origen','$destino')";
      $result=$mysqli->query($query);
         
     switch($destino){
           	case 'diario':
    			   	 header("Location: http://www.diariodeibiza.com");
    			   	 break;
           	case 'meteo':
           		 header("Location: http://www.meteoibiza.com");
			   	      break;
			     case 'wind':
           		 header("Location: http://www.windfinder.com/forecast/vila_deivissa");
			       	 break;
			     case 'btt':
      				header("Location: http://www.ibizabtt.com");
      				break;
		    	case 'travel':
        				header("Location: http://www.ibiza.travel/es/cicloturismo.php");
        				break;
         }
}
  ?>