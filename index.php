<?php

$leyendo = file_get_contents("index.json");
$twits = json_decode($leyendo, true);


require_once "index.html";

