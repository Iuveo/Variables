
<?php
	if(!isset($_GET['a'])) $_GET['a']=5;
	if(!isset($_GET['b'])) $_GET['b']=4;
	
?>

<b><H3>Determina el área de un pentágono regular cuyo lado es de 5 cm y cuya apotema vale 4 cm</H3></b>

<center>	
<table>																													</br>	
<form>
<tr>
	<td>Lado</td>
	<td><input id="a" name="a" placeholder="Lado" onkeyup="calcular()" value="<?=$_GET['a']?>"/> cm</td>	</br>
	<td rowspan=2><img src="pentagono.jpg" width="550"> </td>
</tr>
<tr>
	<td>Apotema</td>
	<td><input id="b" name="b" placeholder="Apotema" onkeyup="calcular()" value="<?=$_GET['b']?>"/> cm</td></br>
</tr>
<tr>
	<td colspan=2><center><button>calcular</button></center></td>
</tr>
</form>
</table>
</center>	
</br>	
</br>
<center><b>JAVA SCRIPT</b></center> 
Área
<div id="resultado" style=" 
padding:30px;
background-color:lightgreen;
"></div>

<script>
function calcular(){
	a=document.getElementById('a').value;
	b=document.getElementById('b').value;
	b=parseFloat(b);
	document.getElementById('resultado').innerHTML=(5*a*b)/2+ ' cm<sup>2</sup>';
}	
calcular();
</script>
</br>
<center><b>PHP</b></center>
Área
<div style=" 
padding:30px;
background-color:lightblue;
">
<?php
	$a=$_GET["a"];
	$b=$_GET["b"];
	
	echo(5*$a*$b)/2;
	echo " cm<sup>2</sup>"
?>
</div>
</br>
</br>
<center><H2>PROBLEMAS</H2></center>
<center>
<a href="romboide.php"> <font color="black">1_romboide</a><br/>	
<a href="tienda.php"> <font color="black">3_tienda</a><br/>	
<a href="volumen.php"> <font color="black">4_volumen</a><br/>
</center>