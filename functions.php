<?php
function cardContainer ($sets)
{
    $result = '';
    foreach ($sets as $set) {
        $result .= '<div; class=“set”> <h1>' . $set['Name'] . '</h1>
                   <h2> Alignment ' . $set['Alignment'] . '</h2>
                   <h2>Force Power (%) ' . $set['Force Power (%)'] .' </h2>
                   </div>';
    }
    return $result;
}
   ?>