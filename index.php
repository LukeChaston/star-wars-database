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
    $query = $dbh->prepare("SELECT `Name`,`Alignment`,`Force Power (%)`, `Lightsaber Power (%)`,`Blaster Power (%)`, `Image` FROM `star_wars_characters`");
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
    <link rel="stylesheet" type="text/css" href="normalize.css"/>
</head>

<body>
<h1>Star Wars Character Table</h1>
<section class="dataContainer">
    <div class="cards">
<?php echo cardContainer($sets);?>
    </div>


</section>

<h1>Create your own Character!</h1>
</body>

</html>




