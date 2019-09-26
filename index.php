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

    <form action="upload.php"  method=post>
        <p>Name:</p> <input type="text" max="13" name="name" required><br>
        <p>Alignment: </p><select name="alignment"><option value="Republic">Republic</option> <option value="Sith">Sith</option><br></select>
        <p>Lightsaber Power (%):</p> <input type="number" min="1" max="100" name="lightsaberPower" required><br>
        <p>Force Power (%): </p> <input type="number" min="1" max="100"  name="forcePower" required><br>
        <p> Blaster Power (%):</p> <input type="number" min="1" max="100"  name="blasterPower" required><br>
        <p> Upload Avatar Image:</p> <input type="text" name="image" required><br>
        <input type="submit" value="Submit">
    </form>

</div>

</body>

</html>




