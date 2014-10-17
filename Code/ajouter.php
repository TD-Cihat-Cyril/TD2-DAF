<h3><a href="form_daf.php">Retour au DAF</a></h3>
<?php
	//connection au serveur
		mysql_connect( "localhost", "root", "" ) ;
		mysql_select_db( "my_sionapolitano" ) ;
	
	
	
		 
		
?>

<form action="ajoutimmat.php" method="GET">

<p>ID Visiteur : <select id="idVisiteur" name="idVisiteur">
<option value="" selected="selected">Selectionner un nom</option>
<?php

$result = mysql_query("SELECT id FROM Visiteur ");
while($row = mysql_fetch_assoc($result)){
echo '<option value="'.$row['id'].'">'.$row['id'].'</option>';
}
?> 
</select></p>
<p>Date: <input type="text" size="30" name="mois" value="0" /></p>
<p>Immatriculation : <input type="text" size="30" name="ImmatVehicule" value="0" /></p>

    
    <input type="submit" value="Envoyer" />
</p>
</form>