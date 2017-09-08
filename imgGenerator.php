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


function imgGenerator($colorArray) {
("Content-type: image/png");
$image = imagecreate(300,150);

$colorArray = imagecolorallocate($image, 255, 128, 0); // Le fond de la couleur
$darkslategray = imagecolorallocate($image, 47, 79, 79);// couleur copy

imagestring($image, 4, 35, 15, "Copyright buycolorDotCom", $darkslategray);

imagepng($image, "img/". $colorArray . ".png");

}



