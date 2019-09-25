<?php
require_once ('functions.php');
$dbh = connectDB();
$sets = pullSetNames($dbh);
$result = cardContainer($sets);

 ?>




<html>

<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="normalize.css"/>
    <h1>Star Wars Character Table</h1>
</head>

<body>


<section class="dataContainer">
    <div class="cards">
        <?php echo $result; ?>
    </div>


</section>

</body>

</html>




