<?php
//connection au serveur
		mysql_connect( "localhost", "root", "" ) ;
		mysql_select_db( "my_sionapolitano" ) ;
		

    $_GET['modifier'] = $_GET['idVisiteur'];
    $retour = mysql_query('SELECT * FROM AffectationVehicule WHERE idVisiteur=\'' . $_GET['modifier'] . '\'');
    $donnees = mysql_fetch_array($retour);
    
    $visiteur = stripslashes($donnees['idVisiteur']);
    $immat = stripslashes($donnees['ImmatVehicule']);
    $mois = $donnees['mois'];
?>
<form action="immat.php" method="POST">
<p>ID Visiteur : <input type="text" size="30" name="idVisiteur" value="<?php echo $visiteur; ?>" /></p>
<p>Mois: <input type="text" size="30" name="mois" value="<?php echo $mois; ?>" /></p>
<p>Immatriculation : <input type="text" size="30" name="ImmatVehicule" value="<?php echo $immat; ?>" /></p>

    
    <input type="hidden" name="id" value="<?php echo $visiteur; ?>" />
    <input type="submit" value="Envoyer" />
</p>
</form>