<?php

date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

//Pastas
//realpath - caminho absoluto //dirname Retorna o caminho do diretório pai
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));

require_once(realpath(dirname(__FILE__) . '/database.php'));