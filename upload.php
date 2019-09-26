<?php


require_once 'functions.php';

$name=$_POST['name'];
$alignment=$_POST['alignment'];
$forcePower=$_POST['forcePower'];
$lightsaberPower=$_POST['lightsaberPower'];
$blasterPower=$_POST['blasterPower'];
$image= $_POST['image'];
$connectDB = connectDB();
$x = addDataToDb($connectDB, $name,$alignment, $forcePower,$lightsaberPower,$blasterPower, $image);



if ($x == false) {
    header('Location: error.php');
}
?>


<html>

<body>
Character created. Press here to go back..
<div class="buttonContainer">
    <a href="index.php"><button type="button">GO BACK TO FORM</button></a>
</div>
</body>
</html>








