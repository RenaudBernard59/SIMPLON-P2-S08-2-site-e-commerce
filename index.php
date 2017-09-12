<?php
//#######################################################################################
include('indexDB.php');

$avaiableColors = array('black', 'white', 'grey', 'red', 'orange', 'yellow', 'green', 'blue', 'violet');

function indexGenrator($indexDatabases, $selectedColors) {
/*###############################################
# Définition de la fonction de la génération des liens vers les articles
#
#
################################################*/
  echo '<div class="col-md-4">';
  echo "<h2>" . $selectedColors . "</h2>";
  echo '<img src="img/' . $selectedColors . '.png" alt="' . $selectedColors . '" class="col-md-12" />'; 
  echo "<p>" . $indexDatabases[$selectedColors]['article'][0] . "</p>";
  echo "<p>" . $indexDatabases[$selectedColors]['article'][1] . '<srong>' . $indexDatabases[$selectedColors]['article'][2] . "</strong></p>";
  echo '<p><a class="btn btn-default" href="color.php?color=' . $selectedColors . '" role="button">View details &raquo;</a></p>';
  echo  "</div>";

}//END indexGenrator


/*================================================
Appel fonctions*/
//GENRATION DE LA PAGE
/*=========================================================================
======
=.......................... Inclusion de la page
======
==========================================================================*/

include('header.php');?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello world! et bienvenu sur BuycolorDotCom</h1>
        <p>BuycolorDotCom le premier site au monde pour acheter des couleurs.<br/>
	Devenez aujourd'hui propriétaire d'une couleurs et touchez des royalties sur leurs utlisations.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">J'en veux plus &raquo;</a></p>
      </div>
    </div>
<!--/*==================================*/-->
<div class="container">
  <div class="row">
<?php
for ($i = 0 ; $i < (count($indexDatabases)) ; $i++) {
    indexGenrator($indexDatabases, $avaiableColors[$i]);
}
?>

<!--/*==================================*/-->
  </div>
</div> 
<hr>

<?php include('footer.php');

/*=========================================================================
======
=.......................... FIN Inclusion de la page
======
==========================================================================*/
//#######################################################################################
/*
        <div class="col-md-4">
          <h2>Blue</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-default" href="color.php?color=blue" role="button">View details &raquo;</a></p>
        </div>
*/
?>
