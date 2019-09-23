<?php
$dbh = new PDO('mysql:host=db;dbname=Luke-Collection', 'root', 'password');



$query->execute();

$result = $query->fetchAll();