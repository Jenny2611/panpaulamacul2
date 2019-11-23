<?php

try {
    $db = new mysqli('localhost', 'root', 'root', 'panpaula' );
} catch(Exception $e) {
    echo $e->getMessage();
    exit;
}

/*
if($db->ping() ) {
     echo 'todo bien';

} else {
    echo $db->connect_error; 
}
*/
