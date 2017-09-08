<?php
//APPEL BDD==============================================================

include 'colorsDB.php';


//END BDD================================================================






/*================================================
Regarder si la couleur possède un article */
function checkColorExist($colorsDatabases)  {
  foreach($colorsDatabases as $cle => $element)
    {
	  if (isset($_GET) == $cle) {
	  return $colorExist = true;
	  } else {
	  return $colorExist = false;
	  }
	  $colorExist = false;

    }
} //END checkColorExist

function articleGenrator() {
  echo "<h2>Description</h2>";
  <?php echo $colorsDatabases[$_GET['color']]['article'];?>





	      
		







}


$colorExist = checkColorExist($colorsDatabases);
//GENRATION DE LA PAGE
/*==========================================================================
==========================================================================
==========================================================================
==========================================================================*/
if ($_GET['color'] && $colorExist) {
/*Si paramètre OK on affiche la page */

/*=========================================================================
======
=.......................... Inclusion de la page
======
==========================================================================*/
?>
<?php
include('header.php');?>
    <div class="container">
      <div class="row">
	<nav class="col-sm-2">
	  <h2>Menu</h2>
		<ul>
		<li><a href="color.php?color=black">black</a></li>
		<li><a href="color.php?color=white">white</a></li>
		<li><a href="color.php?color=grey">grey</a></li>
		<li><a href="color.php?color=red">red</a></li>
		<li><a href="color.php?color=orange">orange</a></li>
		<li><a href="color.php?color=yellow">yellow</a></li>
		<li><a href="color.php?color=green">green</a></li>
		<li><a href="color.php?color=blue">blue</a></li>
		<li><a href="color.php?color=violet">violet</a></li>
		</ul>
	</nav>
	<section class="col-sm-10">
	<h2>La superbe <?php echo $_GET['color']; ?> !</h2>	 
	  <div class="row">
	    <article class="col-md-10">

	    <!-- INCLURE HTML -->
	    
	    
	    </article>
	    <aside class="col-md-2">
		<figure>
		<img src="img/<?php echo $_GET['color']; ?>.png" alt="<?php $_GET['color']; ?>" />
		<figcaption>Aperçu de la couleur</figcaption>
		</figure>
		<p>Prix :
		<?php echo $colorsDatabases[$_GET['color']]['prix'];?></p>
	<button type="button" class="btn btn-primary btn-lg">Ajouter au panier</button>
	    </aside>
	  </div>
	</section>
      </div>

      <hr>
<?php include('footer.php');

/*=========================================================================
======
=.......................... FIN Inclusion de la page
======
==========================================================================*/
?>
<?php
/*Si problème paramètre*/
} else {

echo "ERROR !!!";

}//END issetColor
/*==========================================================================
==========================================================================
==========================================================================
==========================================================================*/


