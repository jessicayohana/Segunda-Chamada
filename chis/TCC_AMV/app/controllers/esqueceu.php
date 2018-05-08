<?php

require_once "../views/esqueceu.php";


if (isset($_POST['email']) AND !empty($_POST['email'])) {
	print_r($_POST);

	echo $_POST['email'];

} else {
	echo "ainda nao tem nada";
}
