<?php
$conf = parse_ini_file("config.ini");

$string_connection = $conf["driver"] . ":host=" . $conf["server"] . "; dbname=" . $conf["dbname"] .
    "; port=" . $conf["port"];

try{
    $conn = new PDO($string_connection, $conf["user"], $conf["password"]);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo("Connected succesfully!");
}
catch(PDOException $e){
    echo("Connect failed: " . $e->getMessage());
}
?>