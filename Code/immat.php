<h3><a href="form_daf.php">Retour à la liste</a></h3>
<?php
	//connection au serveur
		mysql_connect( "localhost", "root", "" ) ;
		mysql_select_db( "my_sionapolitano" ) ;
	
	
	// récupération des données
		$visiteur = $_POST['idVisiteur'];
		$immat = $_POST['ImmatVehicule'];
		$mois = $_POST['mois'];	
	
	// requete 
		$sql = mysql_query("UPDATE AffectationVehicule SET idVisiteur='$visiteur', ImmatVehicule='$immat' WHERE idVisiteur='$visiteur' AND mois='$mois'");
		
		echo "La modification à bien été prise en compte";


?>