<?php

$db = DB;
$pass = PASS;
$host = HOST;
$usuario = USER;
$mysqli = new mysqli($host, $usuario, $pass, $db);
if ($mysqli->connect_errno):
echo "Falha na conexão :(" . $mysqli->connect_errno . ")" . $mysqli->connect_error;
endif;




