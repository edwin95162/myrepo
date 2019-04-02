<center>Taller</center>


<html><!--mi comentario -->
    <head>
          <title>CALCULADORA HTML</title>
         
    </head>
    <body">

     <br><br>
	<form name="form1" action="ScriptsPHP.php" method="POST">
    <center>

      <table border="0" align="center">
          <center><p>Punto 11 Extra </center>
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
  
	<form name="form2" action="ScriptsPHP.php" method="POST">
    <center>

      <table border="0" align="center" >
          <center><p>Punto 10 </center>
          <tr>
            <td align="left"><font face="Times new Roman" size="3" >Digite un numero
              <font face="Times new Roman" size="3" >*
             </td>

            <td><input type="number2" name="num2" border="1" placeholder="Numero " required></td>
          </tr>
		  
		  <tr><td align= "center"><input type="submit"  value="Calcular" > <!--boton de ingreso de datos-->
			</td><br></tr>
	
    </table>
  </form>
  

    </body>
</html>



<?php
	
//Generar lista de numeros del 1 al 10
//Script con while. for, do-while
	$n1 = $_POST['num1'];



		echo "<table border=1  >";
		echo "Tabla ascendente";


	$i=1;
	while ($i <= $n1) {
		if ($i%2==0){
			echo "<td bgcolor='YELLOW'>". $i ."</td>";
		}else{
			echo "<td bgcolor='BLUE'>". $i ."</td>";
			}
	$i++;//$i=$i+1
}
		echo"</table><br>";


	echo "<table border=1  >";
	echo "Tabla descendente";


	$i=$n1;
	while ($i >0 ) {
		if ($i%2==0){
			echo "<td bgcolor='YELLOW'>". $i ."</td>";
		}else{
			echo "<td bgcolor='BLUE'>". $i ."</td>";
			}
	$i--;//$i=$i+1
		}


	echo"</table><br>";

//TABLAS JUNTAS
	echo "Tabla JUNTAS";

	echo "<table  width=1% cellpadding=1 cellspacing=3 align=center  border=1>";
	echo "<tr>";
	echo "<td width=60% >";
	echo "<table border=1>";


	$i=1;
	while ($i <= $n1) {
		if ($i%2==0){
			echo "<tr>";
			echo "<td bgcolor='YELLOW'>". $i ."     </td>";
			echo "</tr>";        
		}else{
			echo "<td bgcolor='BLUE'>". $i ."</td>"; 
			}
 
	 $i++;//$i=$i+1
	 echo "</tr>";
   	};

	echo"</table>";
	echo"</td>";

	echo "<td width=60% >";
	echo "<table  border=1>";

	$i=$n1;
	while ($i >0 ) {
		echo "<tr>";
		if ($i%2==0){
      		echo "<td bgcolor='YELLOW'>". $i ."     </td>";
        }else{
			echo "<td bgcolor='BLUE'>". $i ."</td>";
		}
  $i--;//$i=$i+1
  echo "</tr>";  
}
		echo"</table>";
		echo"</td>";
		echo"</tr>";
		echo"</table>";




		echo "<hr>";
		echo "<br>Punto 1:<br>"."1 2 3 4 5 6 7 8 9 10"; //punto1
		
		echo "<hr>";
		$i = 1;//punto2
		echo "<br>Punto 2:<br> ";
		while ($i<=10){
			echo "$i ";
			$i++;
		}
		
		echo "<hr>";//punto3
		echo "<br>Punto 3:<br> ";
		$j=1;
		do{
			echo "$j";
			$j++;
		}while($j<=100);
		
		echo "<hr>";
		echo "<br>Punto 4:<br> ";//punto4
		for ($k=1; $k<=100; $k++){
			$k++;
			echo "$k ";
		}
		
		echo "<hr>";
		$r= 1;//punto5
		echo "<br>Punto 5:<br> ";
		while($r<=10){
			$r++;
			$rr=rand(1,100);
			echo "$rr  " ;
		}
		
		echo "<hr>";
		echo "<br>Punto 6: <br>"; //punto6
		$suma=0;
		for ($i=1; $i<=100;$i++) { 
		$suma=$i+$suma; 
		}
		echo "$suma";
		
		echo "<hr>";
		echo "<br>Punto 7: <br>";//punto7
		$l=1;
		do{
			echo "$l ";
			$l= $l+2;
		}while($l<=100);
		
		echo "<hr>";
		$t= 1;//punto8
		$acumulador1=0;
		$acumulador2=0;
	
		echo "<br>Punto 8: <br>";
		echo "<table border = '1' cellpadding='4'><br>";
		while($t<=10){
			$tt=rand(1,100);
			echo $tt."&nbsp;&nbsp;";
			if($tt%2==0){
				$acumulador1++;
				
			}else {
				$acumulador2++;
				
			}
			$t++;
		}
		echo "</table>";
		echo "<br><b>REPORTE FINAL 1</b>";
		echo "<table border=2>";
		echo "<tr><td>Total de pares:</td><td>". $acumulador1 ."</td></tr>";
		echo "<tr><td>Total de impares:</td><td>". $acumulador2 ."</td></tr>";
		echo "</table>";
		
		echo "<hr>";
		$n= 1;//punto9
		$acumulador3=0;
		$acumulador4=0;
		$acumulador5=0;
		$acumulador6=0;
		
		echo "<br>Punto 9:<br> ";
		echo "<table border = '1' cellpadding='4'><br>";
		while($n<=10){
			$nn=rand(-100,100);
			echo $nn."&nbsp;&nbsp;";
			if($nn%2==0){
				if($nn>=0){
				$acumulador3++;
				}else{
					$acumulador5++;
					}				
			}else {
				if($nn>=0){
				$acumulador4++;
				}else{
					$acumulador6++;
					}	
			}
			$n++;
		}
		echo "</table>";
		echo "<br><b>REPORTE FINAL 2</b>";
		echo "<table border=2>";
		echo "<tr><td>Total de pares positivos:</td><td>". $acumulador3 ."</td></tr>";
		echo "<tr><td>Total de impares positivos:</td><td>". $acumulador4 ."</td></tr>";
		echo "<tr><td>Total de pares negativos:</td><td>". $acumulador5 ."</td></tr>";
		echo "<tr><td>Total de impares negativos:</td><td>". $acumulador6 ."</td></tr>";
		echo "</table>";
		
		
		echo "<hr>";
		echo "Punto 10:<br>" ;//punto 10
		$n2 = $_POST['num2'];
		$contador7=0;
		$tabla=0;
		do{
			
			$tabla=($n2*$contador7);
			echo "$n2"." * "."$contador7"." = "."$tabla"."<br>";
			$contador7++;
		}while($contador7<=10)
		
			
?>
