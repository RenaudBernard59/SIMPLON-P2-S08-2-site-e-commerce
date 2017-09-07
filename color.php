<?php

$listeArticles = array (
'black' => '',
'white' => '',
'grey' => '',
'red' => '',
'orange' => '',
'yellow' => '',
'green' => '',
'blue' => '',
'violet' => ''
);


/*Regarder si la couleur possède un article*/
foreach($listeArticles as $cle => $element) {
	if (isset($_GET) == $cle) {
	$colorExist = true;
} else {

	$colorExist = false;

}
}//END tableColor



if ($_GET['color'] && $colorExist) {
/*Si paramètre OK on affiche la page */
?>

<?php include('header.php');?>
    <div class="container">
      <div class="row">
	<div class=""></div>
<?php echo $_GET['color'];?>


     </div>
    </div>

      <hr>
<?php include('footer.php');?>

<?php
/*Si problème paramètre*/
} else {

echo "ERROR !!!";

}//END issetColor



