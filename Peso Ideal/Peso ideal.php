<!DOCTYPE html>
<html>
<head>
	<title>Descubra seu peso ideal!</title>
</head>
<body>
<form action="Peso ideal.php" method="get">
Altura:<input type="text" name="num">
<input type="submit">
<br>
Digite em metros, utlizando o ponto e não a vírgula (Por exemplo: 1.65, caso voce tenha 1,65 metros)
</form>

<?php 

$altura = $_GET['num'];

echo "Seu peso ideal é: ", (72.7*$altura)-58, " Kg";

?>


</body>
</html>