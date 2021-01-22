front end -> se ejecuta en el cliente
back end -> se ejecuta en el servidor
full stack
<div>
<form>
<input id="r" name="r" placeholder="Resistencia" onkeyup="calcular()"/>
<input id="v" name="v" placeholder="Voltaje" onkeyup="calcular()"/>
<button onclick="calcular()">Enviar</button>
</form>
</div>
<div id="resultado" style="
	padding:30px;
	background-color:lightblue;
">
</div>
<script>
console.log('Vamos a calcular la intensidad que circula por una resistencia');
function calcular(){
	r=document.getElementById('r').value;
	v=document.getElementById('v').value;
	i=Math.round(v/r*100)/100;
	document.getElementById('resultado').innerHTML=i+' Amperios';
}
</script>
<?php
print_r($_GET);
?>