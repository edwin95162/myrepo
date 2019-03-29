<center>Taller</center>


<?php
		echo "<br>Números: "."1 2 3 4 5 6 7 8 9 10"; //punto1
		
		
		$i = 1;//punto2
		echo "<br>Números: ";
		while ($i<=10){
			echo "$i ";
			$i++;
		}
		
		$j=1;//punto3
		do{
			echo "$j ";
			$j++;
		}while($j<=100);
		
		echo "<br>Números: ";//punto4
		for ($k=1; $k<=100; $k++){
			$k++;
			echo "$k ";
		}
		
		$r= 1;//punto5
		echo "<br>Números: ";
		while($r<=10){
			$r++;
			$rr=rand(1,100);
			echo "$rr  " ;
		}
		
		echo "<br>Números: "; //punto6
		$suma=0;
		for ($i=1; $i<=100;$i++) { 
		$suma=$i+$suma; 
		}
		echo "$suma";
		
		echo "<br>Números: ";//punto7
		$l=1;
		do{
			echo "$l ";
			$l= $l+2;
		}while($l<=100);
		
		$t= 1;//punto8
		echo "<hr>";
		echo "<br>Números: ";
		echo "<table border = '1' cellpadding='4'><br>";
		while($t<=10){
			$tt=rand(1,100);
			echo $tt."&nbsp;&nbsp;";
			if($tt%2==0){
				//acumulador de pares;
				
			}else {
				//acumulador de impares;
				
			}
			$t++;
		}
		echo "</table>";
		
		echo "<br><b>REPORTE FINAL</b>";
		echo "<table border=1>";
		echo "<tr><td>Total de pares:</td><td>". aqui variable pares ."</td></tr>";
		echo "<tr><td>Total de impares:</td><td>". aqui variable impares ."</td></tr>";
		echo "</table>";
?>