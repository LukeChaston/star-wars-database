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

    <form>
        Alignment:<br>
        <input type="text" name="alignment">
    </form>

    <form>
        Force Power (%):<br>
        <input type="text" name="forcePower">
    </form>

    <form>
        Lightsaber Power (%):<br>
        <input type="text" name="lightsaberPower">
    </form>

    <form>
        Blaster Power (%):<br>
        <input type="text" name="blasterPower">
    </form>

    <form>
        Upload your own avatar:<br>
        <input type="text" name="imageAvatar">
    </form>

</div>

</body>

</html>




