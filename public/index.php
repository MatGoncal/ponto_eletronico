<?php
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(CONTROLLER_PATH . "/login.php");
// echo $_SERVER['REQUEST_URI'];
// exit();

// $uri = urldecode(
//     parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
// );

// if($uri === '/' || $uri === '' || $uri === '/index.php') {
//     $uri = '/day_records.php';
// }

// require_once(CONTROLLER_PATH . "/{$uri}");








// $sql = "SELECT * FROM users";
// $result = Database::getResultFromQuery($sql);

// while($row = $result->fetch_assoc()){
//     print_r($row);
//     echo '<br>';
// }