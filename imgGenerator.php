<?php
//APPEL BDD==============================================================
include 'colorsDB.php';
//END BDD================================================================
/*================================================
Définitons des variables*/
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



/*================================================
Définitons des fonctions*/

function imgGenerator($colorsChoose) {
("Content-type: image/png");
$image = imagecreate(300,150);

$colorBg = imagecolorallocate($image, $colorsDatabases[$colorsChoose]['proprietes']); // Le fond de la couleur
$colorCp = imagecolorallocate($image, 47, 79, 79);// couleur copyright

imagestring($image, 4, 35, 15, "Copyright BuycolorDotCom", $colorCp);

imagepng($image, "img/". $colorsChoose . ".png");

}


/*================================================
Appel des fonctions*/

for ($i = 0; $i <= (count($avaiableColors) +1); $i++) {
imgGenerator($avaiableColors[$i]);
echo "<p>" . $avaiableColors[$i] . " + " . $colorsDatabases[$avaiableColors[$i]]['proprietes'] . " as saved</p>";
}
//END


