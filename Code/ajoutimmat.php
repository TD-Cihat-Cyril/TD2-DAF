<h3><a href="form_daf.php">Retour à la liste</a></h3>
<?php
	//connection au serveur
		mysql_connect( "localhost", "root", "" ) ;
		mysql_select_db( "my_sionapolitano" ) ;
	
	
	// récupération des données
		$visiteur = $_GET['idVisiteur'];
		$mois = $_GET['mois'];
		$immat = $_GET['ImmatVehicule'];	
	
	// requete 
		$sql = mysql_query("INSERT INTO AffectationVehicule VALUES('$visiteur','$mois', '$immat')");
		
		echo "Ajout effectué";


?>