<?php

require_once("config.php");

require_once("Sql.php");

$sql = new Sql();

$usuarios->select("SELECT codigopessoa, pessoa FROM estudos.pessoa;");

echo json_encode($usuarios);

