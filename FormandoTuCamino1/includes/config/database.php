<?php 

function conectarDB() : mysqli {
    //$db = mysqli_connect('localhost', 'root', '', 'formandotucamino');
    $db = mysqli_connect('us-cdbr-east-05.cleardb.net', 'bd7834c20c3db0', 'ec73f17f', 'heroku_b03382de6cb3a7d');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}
conectarDB();