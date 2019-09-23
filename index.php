<?php
$dbh = new PDO('mysql:host=db;dbname=Luke-Collection', 'root', 'password');


/**
 * Function to collect data from the Database and output array.
 *
 * @param $dbh star wars characters data.
 *
 *
 */
function pullSetNames($dbh)
{
    $query = $dbh->prepare("SELECT `Name`,`Alignment`,`Force Power (%)`, `Lightsaber Power (%)`,`Blaster Power (%)` FROM `star_wars_characters`");
   $query->setFetchMode(PDO::FETCH_ASSOC);
   $query->execute();
   $result = $query-> fetchall();
   $sets = $result;
   var_dump($sets);
}

pullSetNames($dbh);

?>

<html>
<head>

</head>

<body>
</body>

</html>




