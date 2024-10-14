<?php
$connection = new mysqli("localhost","root","","crudphp");
if (! $connection){
    die("Error in connection".$connection->connect_error);
}
?>