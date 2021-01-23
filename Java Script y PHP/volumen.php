<?php
	if(!isset($_GET['v'])) $_GET['v']=60;
	
?>

<b><H3>Queremos fabricar una caja de base cuadrada, de tal manera que la altura de la caja más el perímetro de la base sumen 60 cm.
 Determina sus dimensiones para que contenga el mayor volumen posible</H3></b>

<center>	
<table>																													</br>	
<form>
<tr>
	<td>Volumen</td>
	<td><input id="v" name="v" placeholder="volumen" onkeyup="calcular()" value="<?=$_GET['v']?>"/> cm<sup>3</sup></td></br>
	<td rowspan=2><img src="volumen.jpg" width="250"> </td>
</tr>
<tr>
	<td colspan=2><center><button>calcular</button></center></td>
</tr>
</table>
</form>
</center>
</br>
</br>
<center><b>JAVA SCRIPT</b></center>
Base<div id="resultado" style=" 
padding:30px;
background-color:lightgreen;
"></div>
</br>
Altura<div id="resultado2" style=" 
padding:30px;
background-color:lightblue;
"></div>

<script>
function calcular(){
	v=document.getElementById('v').value;
	
	x=Math.round ((2*v)/12);
	y=Math.round (v-4*x);

	document.getElementById('resultado'). innerHTML=x+' cm';
	document.getElementById('resultado2'). innerHTML=y+' cm';
}
calcular();
</script>
</br>
<center><b>PHP</b></center>
Base
<div style=" 
padding:30px;
background-color:lightgreen;
">

<?php
	$v=$_GET["v"];
	echo (2*$v)/12;
	echo " cm"
?>
</div>
</br>
Altura
<div style=" 
padding:30px;
background-color:lightblue;
">

<?php

	$v=$_GET["v"];
	echo $v-4*(2*$v)/12;
	echo " cm"
?>
</div>
</br>
</br>
<center><H2>PROBLEMAS</H2></center>
<center>
<a href="romboide.php"> <font color="black">1_romboide</a><br/>	
<a href="tienda.php"> <font color="black">2_tienda</a><br/>	
<a href="pentagono.php"> <font color="black">3_pentagono</a><br/>
</center>