<?php

function connectDB () :PDO {
    $dbh=new PDO ('mysql:host=db;dbname=Luke-Collection', 'root', 'password');
    return $dbh;
}
/**
 * Function to collect data from the Database and output array.
 *
 * @param $dbh star wars characters data.
 *
 *
 */
function pullSetNames( array $dbh) :array;
{
    $query = $dbh->prepare("SELECT `name`,`alignment`,`forcePower(%)`, `lightsaberPower(%)`,`blasterPower(%)`, `image` FROM `star_wars_characters`");
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $query->execute();
    $result = $query->fetchall();
    $sets = $result;
    return $sets;

}

    /**
     * Function to  output data in different card formats.
     *
     * @param $sets star wars characters data.
     *
     */
    function cardContainer(array $sets) :array;
    {
        $result = '';
        foreach ($sets as $set) {
            $result .= '<div class=sets> <div class="text"><h1>' . $set['name'] . '</h1><h2> Alignment: ' . $set['alignment'] . '</h2>
                       <h2>Force Power (%): ' . $set['forcePower(%)'] . ' </h2>
                   <h2>Lightsaber Power (%): ' . $set['lightsaberPower(%)'] . ' </h2>
                   <h2>Blaster Power (%): ' . $set['blasterPower(%)'] . ' </h2></div>
                  <div class="image"> <img src="' . 'Images/' . $set['image'] . '"/></div></div>';
        }
        return $result;
    }