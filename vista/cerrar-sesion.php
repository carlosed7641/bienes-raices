<?php

session_start();
//Cierra la sesión abierta
$_SESSION = [];

//Redirige a la página principal
header('Location: /bienesraices/');
