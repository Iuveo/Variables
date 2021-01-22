<?php
	if(!isset($_GET['a'])) $_GET['a']=2;
	if(!isset($_GET['b'])) $_GET['b']=30;
	if(!isset($_GET['h'])) $_GET['h']=4;
?>

<b><H3>Determina el lado mayor y superficie de un romboide de altura 4 cm,
 lado menor de 2 cm y 30 grados de abatimiento.</H3></b>

<center>	
<table>			
<form>

<tr>
	<td>Lado menor/base</td>
	<td><input id="a" name="a" placeholder="Lado menor/base" onkeyup="calcular()" value="<?=$_GET['a']?>"/> cm</td>     </br>	
	<td rowspan=3><img src="romboide.jpg" width="550"> </td>
</tr>
<tr>
	<td>Abatimiento</td>
	<td><input id="b" name="b" placeholder="Angulo abatimiento" onkeyup="calcular()" value="<?=$_GET['b']?>"/> º </td>  </br>
</tr>
	<td>Altura</td>
	<td><input id="h" name="h" placeholder="Altura" onkeyup="calcular()" value="<?=$_GET['h']?>"/> cm </td>			</br>
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
Lado Mayor<div id="resultado" style=" 
padding:30px;
background-color:lightgreen;
"></div>
</br>
Superficie<div id="resultado2" style=" 
padding:30px;
background-color:lightblue;
"></div>
<script>
function calcular(){
	a=document.getElementById('a').value;
	b=document.getElementById('b').value;
	h=document.getElementById('h').value;
	b=parseFloat(b);
	document.getElementById('resultado').innerHTML=Math.round(h/Math.cos(b*Math.PI/180)*100)/100+ ' cm';
	document.getElementById('resultado2').innerHTML=Math.round(a/h*100)/100+ ' cm<sup>2</sup>';
}	
calcular();
</script>
</br>
<center><b>PHP</b></center>
Lado Mayor
<div style=" 
padding:30px;
background-color:lightgreen;
">
<?php
	$a=$_GET["a"];
	$b=$_GET["b"];
	$h=$_GET["h"];
	echo round($h/cos($b*M_PI/180),2);
	echo " cm"
?>
</div>
</br>
Superficie
<div style=" 
padding:30px;
background-color:lightblue;
">
<?php
	$a=$_GET["a"];
	$b=$_GET["b"];
	$h=$_GET["h"];
	echo round(($a/$h),2);
	echo " cm<sup>2</sup>"
?>
</div>
</br>
</br>
<center><H2>PROBLEMAS</H2></center>
<center>
<a href="pentagono.php"> <font color="black">2_pentagono</a><br/>		
<a href="tienda.php"> <font color="black">3_tienda</a><br/>	
<a href="volumen.php"> <font color="black">4_volumen</a><br/>
</center>
