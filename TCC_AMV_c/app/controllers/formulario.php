<?php

require_once "formulario.html";

print_r($_POST);

if (isset($_POST['curso']) AND !empty($_POST['curso'])) {
	print_r($_POST);

	echo $_POST['curso'];

} else {
	echo "ainda nao tem nada";
}
