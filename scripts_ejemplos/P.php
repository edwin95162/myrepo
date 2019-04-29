<center>PUNTO_4</center>

<html><!--mi comentario -->
    <head>
          <title>SUMA</title>
         
    </head>
    <body">

     <br><br>
	<form name="form1" action="P.php" method="POST">
    <center>

      <table border="0" align="center">
          <center><p>Puntos </center>
          <tr>
            <td align="left"><font face="Times new Roman" size="3" >Digite un numero
              <font face="Times new Roman" size="3" >*
             </td>

            <td><input type="number1" name="num1" border="1" placeholder="Numero " required></td>
          </tr>
		  
		  <tr><td align= "center"><input type="submit"  value="Calcular" > <!--boton de ingreso de datos-->
			</td><br></tr>
	
    </table>
	</form>
  

    </body>
</html>


<?php
echo "Resultado:<br>" ;//punto 10
		$n1 = $_POST['num1'];
		$total[]=$n1;
		
		
		//Poner un bluce y condicionales
		echo "<br>resultado cantidad:". $total[0]; //acumulador
		
		include("suma.php"); //pide nuevamente un número
		
		echo "$total"."<br>"; //muestra resultado
		//cierre bucle


?>