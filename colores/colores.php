  <?php
   $filas=10;
   $columnas=10;
   $numero=1;
   $color=true;
   $clase='';
  ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-4" />
  <link rel="stylesheet" href="estilos.css"/>
</head>
  <style>
   tr{
    background-color: blue;
   }
   tr:nth-child(2n+1){
    background-color: green;
   }
  </style>

<body aling="center">
<title>Colores</title>
<header>
<h1>COLORES</h1>
</header>
	<div>
		
		  <table border="0.5px">
		   <?php
			for($t=0;$t<$filas;$t++){
						echo "<tr>";
						if ($t%2==0){
							$clase='clase=par';
						}
						else{
							$clase='clase=impar';
						} 
					for($y=0;$y<$columnas;$y++){
						if($color){
							echo "<td style=padding:8px;.$clase;>".$numero."</td>";
							$color=false;
							$numero++;
						}
						else{
							echo "<td style=padding:8px;>".$numero."</td>";
							$color=true;
								$numero++;
						}
					}
				echo "</tr>";
			}
		   ?>
		  </table>
	</div>
 </body>                                                                 
</html>
