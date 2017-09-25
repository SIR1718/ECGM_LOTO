<?php
$textJSON = file_get_contents("http://62.28.241.149/~pmoreira/KEYSERVER/KeyServerJSON.php");

$varPHP = json_decode($textJSON);

//var_dump($varPHP);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chaves Certeiras do Euromilhões</title>
	<meta charset="utf-8">
	 
	<link rel="stylesheet" type="text/css" href="euro.css">

</head>
<body>

<h1>Chave do Euromilhões</h1>
<!-- comentário -->

<div class="key">
<ul class="numbers">
<?php 
for ($n = 0; $n < count($varPHP->numbers); $n++) {
	echo "<li>".$varPHP->numbers[$n]."</li>";
}
?>
</ul>


<ul class="stars">
<?php 
for ($n = 0; $n < count($varPHP->stars); $n++) {
	echo "<li>".$varPHP->stars[$n]."</li>";
}
?>
</ul>
</div>


<div class="key">
<ul class="numbers">
	<li>2</li>
	<li>4</li>
	<li>10</li>
	<li>24</li>
	<li>45</li>
</ul>
<ul class="stars">
	<li>2</li>
	<li>3</li>
</ul>
</div>

</body>
</html>