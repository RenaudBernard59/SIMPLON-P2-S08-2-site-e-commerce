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
function ImgGenerator($colorsChoose,  $colorsDatabases)
{
    //var_dump($colorsChoose);
    header ("Content-type: image/png");
    $pr1 = $colorsDatabases[$colorsChoose]['proprietes'][0];
    $pr2 = $colorsDatabases[$colorsChoose]['proprietes'][1];
    $pr3 = $colorsDatabases[$colorsChoose]['proprietes'][2];
    //var_dump($pr1);
    //var_dump($pr2);
    //var_dump($pr3);
    $image = ImageCreate (400, 250)
            or die ("Erreur lors de la création de l'image");

            
    $colorBg = imagecolorallocate ($image,$pr1, $pr2, $pr3);
    
    $colorCp = imagecolorallocate($image, 47, 79, 79);// couleur copyright
    imagestring($image, 15, 35, 15, "Copyright BuycolorDotCom", $colorCp);
    imagepng ($image, 'img/' . $colorsChoose . '.png');
    imagedestroy($image);
}

/*================================================
Appel des fonctions dans la boucle*/


$i = 0;
$j = count($avaiableColors) + 1;
while ($i <= $j) {
  $colorsChoose = $avaiableColors[$i];
  ImgGenerator($colorsChoose,  $colorsDatabases);
echo "<p>" . $colorsChoose . " + " .
$colorsDatabases[$colorsChoose]['proprietes'][0] . ", " .
$colorsDatabases[$colorsChoose]['proprietes'][1] . ", " .
$colorsDatabases[$colorsChoose]['proprietes'][2]. ", " .
" as saved</p>";
  $i++;
}

//END
  
?>