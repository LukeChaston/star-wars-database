<?php

USE phpunit\Framework\TestCase;
class StackTest extends TestCase
{
    public function testsuccesscardContainer (){
        $input=[['Name' => "Name", 'Alignment'=> "Alignment", 'Force Power (%)' => "Force Power (%)", 'Lightsaber Power (%)' => "Lightsaber Power (%)", 'Blaster Power (%)' => "Blaster Power (%)", "Image" => "Image" ]];
        $expected='<div class=sets> <div class="text"><h1>Name</h1><h2> Alignment: Alignment</h2><h2>Force Power (%): Force Power (%) </h2>
                   <h2>Lightsaber Power (%): Lightsaber Power (%) </h2>
                   <h2>Blaster Power (%): Blaster Power (%) </h2></div>
                  <div class="image"> <img src="Images/Image"/></div></div>';
               $case=cardContainer($input);
               $this->assertEquals ($case,$expected);
    }
}
function cardContainer ($sets)
{
    $result = '';
    foreach ($sets as $set) {
        $result .= '<div class=sets> <div class="text"><h1>' . $set['Name'] . '</h1><h2> Alignment: ' . $set['Alignment'] . '</h2><h2>Force Power (%): ' . $set['Force Power (%)'] .' </h2>
                   <h2>Lightsaber Power (%): ' . $set['Lightsaber Power (%)'] .' </h2>
                   <h2>Blaster Power (%): ' . $set['Blaster Power (%)'] .' </h2></div>
                  <div class="image"> <img src="' . 'Images/' .  $set['Image'] . '"/></div></div>';
    }
    return $result;
}
?>