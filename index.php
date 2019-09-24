<?php
$dbh = new PDO('mysql:host=db;dbname=Luke-Collection', 'root', 'password');
require_once ('functions.php');

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
   return $sets;
}

$sets = pullSetNames($dbh);

?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
<h1>Star Wars Character Table</h1>
<div class="dataContainer">
<?php echo cardContainer($sets);
?>
</div>

<h1>Create your own Character!</h1>
</body>

</html>




