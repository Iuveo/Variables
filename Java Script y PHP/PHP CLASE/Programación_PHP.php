<form>
<input name="v"/>
<input name="r"/>
<button>Enviar</button>
</form>

<?php

print_r($_GET);

$v = $_GET['v'];
$r = $_GET['r'];

echo 'Intensidad = '.$v/$r;

?>