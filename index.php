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

<div class="boxes">

    <form action="index.php"  method="get">
        <p>Name:</p> <input type="text" name="name"><br>
        <p>Alignment: </p><input type="text" name="alignment"><br>
        <p>Lightsaber Power (%):</p> <input type="text" name="lightsaberPower"><br>
        <p>Force Power (%): </p> <input type="text" name="forcePower"><br>
        <p> Blaster Power (%):</p> <input type="text" name="blasterPower"><br>
        <p> Upload Avatar Image:</p> <input type="text" name="uploadAvatar"><br>
        <input type="submit" value="Submit">
    </form>

</div>

</body>

</html>




