<?php

function soma($numero1,$numero2) {
return $numero1 + $numero2;
}
function subtracao($numero1,$numero2) {
return $numero1 - $numero2;
}
function multiplicacao($numero1,$numero2) {
return $numero1 * $numero2;
}
function divisao($numero1,$numero2) {
return $numero1 / $numero2;
}

if($_POST['operacao'] == 1){
	echo soma($_POST['numero1'],$_POST['numero2']);
} else {
	if($_POST['operacao'] == 2){
	echo subtracao($_POST['numero1'],$_POST['numero2']);
	}else {
		if($_POST['operacao'] == 3){
		echo multiplicacao($_POST['numero1'],$_POST['numero2']);
		} else {
		echo divisao($_POST['numero1'],$_POST['numero2']);
		}
	}
}
?>



<!doctype html>
<html lang=\"en\">
<head></head>
<body>
<h1> Calculadora </h1>
<form method="POST">
<label>Numero 1</label> <input type="number" name="numero1"><br>
<label>Numero 2</label> <input type="number" name="numero2">
<p>Operacao</p>
<select name="operacao" size="1">
<option value="1">Soma</option>
<option value="2">Subtração</option>
<option value="3">Multiplicação</option>
<option value="4">Divisão</option>

</select>
<br>
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>

</body>
</html>
