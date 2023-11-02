<?php
$connect = mysqli_connect('localhost', 'root', '', 'connect');
if(!$connect){
    echo "not connected to the database";
}

?>