<html>
 <body bgcolor="888ED4">
  <form name=frm1 action="monedas.php" method="POST">
   <table border="0" align="center">
		  <tr>
            <td align="left"><font face="Wide Latin" size="6" >Digite Dinero
			<font face="Times new Roman" size="3" >*
             </td>
            <td><input type="number" name="num1" border="10" placeholder="Cantidad " required></td>
			<td><font face="Wide Latin" size="6" >COP</td>
          </tr>
   
  
      <br></table></br>
       <br><center><button><img src="images/coin1.png" width=70 heigth=70 title="Digitar"><hr color=red noshade>Calcular</button></center>
		</form>
         </body>
          </html>

          <?php
          $num=$_POST['num1'];
	echo "<br>.<br>.<br>";
	echo "<table border=1 align=center >";
	echo "<tr>";
	echo "<td width=60% bgcolor='GREEN'>";
	echo "<table border=1>";

          echo "<font size=5>El cambio de la cantidad ".$num." COP es:<br>";

	echo "</tr>";
  	echo"</table>";
	echo"</td>";
	
	echo "<tr>";
	echo "<td width=60% bgcolor='YELLOW'>";
	echo "<table border=1>";
          $coin=array(100, 50, 20, 10, 5,1);    // Arreglo de monedas        
          $cambio=array(0,0,0,0,0,0);		   // Arreglo de cambio
       
          for($i=0; $i<count($coin); $i++){
             if($num>=$coin[$i]){
                $cambio[$i]=floor($num/$coin[$i]);// Si el dato ingresado es mayor a la moneda se obtiene cambio
                $num=$num-($cambio[$i]*$coin[$i]);    // actualizamos el resultado del dato ingresado
              }
          }
          for($i=0; $i<count($coin); $i++){
              if($cambio[$i]>0){ //Si el cambio obtenido es mayor a cero
                  if($coin[$i]>=5) // Y si las monedas son mayores iguales a 5
                      echo "<font size=5>Cambio: ".$cambio[$i]."<font size=5> BILLETES de: ".$coin[$i]."<font size=5> COP<br>"; //muestra resultado en billete y monedas
                  else // si la cantidad de monedas no es superior a 5 
                      echo "<font size=5>Cambio: ".$cambio[$i]."<font size=5> MONEDAS de: ".$coin[$i]."<font size=5> COP<br>"; //muestra resultado en billete y monedas
              }
          }
	echo "</tr>";
	echo"</table>";
	echo"</td>";
	echo"</table>";
	echo "<br><br><br><h1 align=right>Edwin García";
          ?>
		  