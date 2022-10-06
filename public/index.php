<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name'=>'MATHEUS', 'email'=> 'matheus@gmail.com']);
print_r($user);

// $sql = "SELECT * FROM users";
// $result = Database::getResultFromQuery($sql);

// while($row = $result->fetch_assoc()){
//     print_r($row);
//     echo '<br>';
// }