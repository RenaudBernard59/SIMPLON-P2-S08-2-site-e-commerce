<?php



$avaiableColors = array (
    'black',
    'white',
    'grey',
    'red',
    'orange',
    'yellow',
    'green',
    'blue',
    'violet'

);


function imgGenerator($colorsChoose) {
("Content-type: image/png");
$image = imagecreate(300,150);

$colorArray = imagecolorallocate($image, $colorsDatabases[$colorsChoose]['proprietes']; // Le fond de la couleur
$darkslategray = imagecolorallocate($image, 47, 79, 79);// couleur copyright

imagestring($image, 4, 35, 15, "Copyright BuycolorDotCom", $darkslategray);

imagepng($image, "img/". $colorArray . ".png");

}

for ($i = 0, $i > (count($avaiableColors) +1, $i++) {
imgGenerator($avaiableColors[$i]);
echo "<p>" . $avaiableColors[$i] . " as saved</p>";

}

