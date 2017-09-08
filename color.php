<?php
//APPEL BDD==============================================================
include 'colorsDB.php';
//END BDD================================================================
/*================================================
Définitons des fonctions*/






function checkColorExist($colorsDatabases)  {
  /* Regarder si la couleur possède un article
      On boucle dans le tableau la liste des couleurs.
      Si elle existe il faut que le script PHP affiche la page
      Sinon STOP et ERROR. 
      Return true ou false selon les cas.
  */
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

function articleGenrator($colorsDatabases) {
/* Génération d'un code HTML baliser à partir des éléments du tableau.
*********************************
* STRUCTURE DES DONNEES		*
* $colorsDatabases[		*
* >couleur			*
* >>article[			*
* >>>section1[			*
* >>>>>P multiples[].		*
* ];END s1			*
* >>>section2[			*
* >>>>>P multiples[].		*
* ].END s2			*
* ];END art			*
* >>proprietes = [0, 1, 2];	*
* >>prix = valeur.		*
* ];END cDB			*
*********************************
On ne recherche que le contenu des articles via  :
>>> $colorsDatabases[['color']]['article'][... La dedans ...]
On y trouve 2 sections
>>>afficher section1
>>> >>> CONTENU
>>>afficher section2
>>> >>> CONTENU
CONTENU = array numérique
CONTENU = paragraphe
>>> afficher "<p>" + CONTENU + "<p>
Rechercher CONTENU dans Array[Numerique]
for i = 0, i < longueurAray+1, i++
  afficher array[i]
//////
  echo $colorsDatabases[$_GET['color']]['article'];
======================================================*/
  echo "<h2>Description</h2>";
  echo "<section>";
  for ($i = 0; $i <= (count($colorsDatabases[$_GET['color']]['article']['section1'][$i]) +1); $i++) {
  echo "<p>" . $colorsDatabases[$_GET['color']]['article']['section1'][$i] . "</p>";
}
  echo "</section>";
  echo "<section>";
  echo "<h3>Encore plus d'infos</h3>";
  for ($j = 0; $j <= (count($colorsDatabases[$_GET['color']]['article']['section2'][$j]) +1); $j++) {
  echo "<p>" . $colorsDatabases[$_GET['color']]['article']['section2'][$j] . "</p>";
}
  echo "</section>";
}//END articleGenrator
/*================================================
Appel fonctions*/

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

<?php include('header.php');?>
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
	    <?php
	      articleGenrator($colorsDatabases);
	    ?>
	    
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
<?php include('footer.php');?>
<?php
/*=========================================================================
======
=.......................... FIN Inclusion de la page
======
==========================================================================*/

/*Si problème paramètre*/
} else {

echo "ERROR !!!";

}//END issetColor
/*==========================================================================
==========================================================================
==========================================================================
==========================================================================*/


