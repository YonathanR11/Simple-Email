<?php

require_once "controllers/inicio.controlador.php";
require_once "controllers/email.controlador.php";
require_once "models/email.modelo.php";

$inicio = new ControladorInicio();
$inicio->ctrInicio();