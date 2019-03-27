<center>Calculadora</center>

<td align="table">
<?php

	$num1 = $_POST['numero1']; // metodo para recibir un dato POST
	$num2 = $_POST['numero2'];
	$oper = $_POST['operar'];
	
	echo "Numero 1: ".$num1;
	echo "<br>Numero 2: ".$num2;
	echo "<br>Operaciòn: ".$oper;
	
	
	switch($oper){
		case "s":
			echo "<br>La suma es: ". ($num1+$num2);
			break;
		case "r":
			echo "<br>La resta es: ". ($num1-$num2);
			break;
		case "m":
			echo "<br>La multiplicación es: ". ($num1*$num2);
			break;
		case "d":
			echo "<br>La división es: ". ($num1/$num2);
			break;
		case "p":
			echo "<br>La potencia es: ". pow($num1,$num2);
			break;
		case "c":
			echo "<br>La raiz cuadrada es: ". sqrt($num1+$num2);
			break;
		case "t":
			echo "<br>Todas las operaciones: <br>"."suma: ". ($num1+$num2).
			"<br>resta: ".($num1-$num2)."<br>multiplicación ".($num1*$num2).
			"<br> división: ".($num1/$num2). "<br>potencia: ". pow($num1,$num2).
			"<br>Raíz: ".sqrt($num1+$num2);
			break;
		default:
			echo "Opción incorrecta";
	}
	
?>
</table>