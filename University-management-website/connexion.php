<?php

$mysqli=new mysqli("localhost","root","","scolarite");

if ($mysqli->connect_error) {
    die("erreur de connexion". $mysqli->connect_error);
}
?>