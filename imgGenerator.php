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
header ("Content-type: image/png");
$image = imagecreate(300,150);

$colorBg = imagecolorallocate($image, ($colorsDatabases[$colorsChoose]['proprietes'][0]), ($colorsDatabases[$colorsChoose]['proprietes'][1]), ($colorsDatabases[$colorsChoose]['proprietes'][2])); // Le fond de la couleur
$colorCp = imagecolorallocate($image, 47, 79, 79);// couleur copyright
imagestring($image, 15, 35, 15, "Copyright BuycolorDotCom", $colorCp);

imagepng($image, "img/". $colorsChoose . ".png");

}


/*================================================
Appel des fonctions*/

for ($i = 0; $i < (count($avaiableColors)); $i++) {
$colorsChoose = $avaiableColors[$i];
imgGenerator($colorsChoose);
echo "<p>" . $avaiableColors[$i] . " + " .
$colorsDatabases[$colorsChoose]['proprietes'][0] . ", " . $colorsDatabases[$colorsChoose]['proprietes'][1] . ", " . $colorsDatabases[$colorsChoose]['proprietes'][2]. ", " . " as saved</p>";
}
//END


