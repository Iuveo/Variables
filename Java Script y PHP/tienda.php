<?php
	if(!isset($_GET['pt'])) $_GET['pt']=110;
	if(!isset($_GET['pd'])) $_GET['pd']=93;
	if(!isset($_GET['c'])) $_GET['c']=20;
	if(!isset($_GET['d'])) $_GET['d']=10;
?>

<b><H3>Compramos una camisa y unos pantalones por los que tendríamos que pagar 110 euros. Nos descuentan un 20 % en la camisa,
 un 10% en los pantalones y nos cobran 93 euros. ¿Cuánto costaba la camisa y cuánto los pantalones?</H3></b>

<center>	
<table>																														
<form>
<tr>																														
	<td>Precio Total</td>
	<td><input id="pt" name="pt" placeholder="Precio Total" onkeyup="calcular()" value="<?=$_GET['pt']?>"/> €</td></br>
</tr>
<tr>
	<td>Precio Descuento</td>
	<td><input id="pd" name="pd" placeholder="Precio con Descuento" onkeyup="calcular()" value="<?=$_GET['pd']?>"/> €</td></br>
</tr>	
	<td>Descuento Camisa</td>
	<td><input id="c" name="c" placeholder="Descuento1" onkeyup="calcular()" value="<?=$_GET['c']?>"/> % </td></br>
<tr>
	<td>Descuento Pantalón</td>
	<td><input id="d" name="d" placeholder="Descuento2" onkeyup="calcular()" value="<?=$_GET['d']?>"/> % </td></br>
</tr>
<tr>
	<td colspan=2><center><button>calcular</button></center></td>
</tr>
</form>
</table>
</center>
</br>
<center><b>JAVA SCRIPT</b></center>
Precio Camisa<div id="resultado" style=" 
padding:30px;
background-color:lightgreen;
"></div>
</br>
Precio Pantalón<div id="resultado2" style=" 
padding:30px;
background-color:lightblue;
"></div>

<script>
function calcular(){
	pt=document.getElementById('pt').value;
	pd=document.getElementById('pd').value;
	c=document.getElementById('c').value;
	d=document.getElementById('d').value;
	pt=parseFloat(pt);
	pd=parseFloat(pd);
	a=Math.round (pt-((pt*c)-100*(pt-pd))/(c-d));
	b=Math.round (((pt*c)-100*(pt-pd))/(c-d));

	document.getElementById('resultado'). innerHTML=a+' €';
	document.getElementById('resultado2'). innerHTML=b+' €';	
}
calcular();
</script>
</br>
<center><b>PHP</b></center>
Precio Camisa
<div style=" 
padding:30px;
background-color:lightgreen;
">

<?php
	$pt=$_GET["pt"];
	$pd=$_GET["pd"];
	$c=$_GET["c"];
	$d=$_GET["d"];
	
	echo ($pt-(($pt*$c)-100*($pt-$pd))/($c-$d));
	echo " €"
?>
</div>
</br>
Precio Pantalón
<div style=" 
padding:30px;
background-color:lightblue;
">

<?php
	$pt=$_GET["pt"];
	$pd=$_GET["pd"];
	$c=$_GET["c"];
	$d=$_GET["d"];
	
	echo ((($pt*$c)-100*($pt-$pd))/($c-$d));
	echo " €"
?>
</div>
</br>
</br>
<center><H2>PROBLEMAS</H2></center>
<center>
<a href="romboide.php"> <font color="black">1_romboide</a><br/>	
<a href="pentagono.php"> <font color="black">2_pentagono</a><br/>	
<a href="volumen.php"> <font color="black">	4_volumen</a><br/>
</center>