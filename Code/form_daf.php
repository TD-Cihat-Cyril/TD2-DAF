<html>

<title>Annuaire</title>

<body>

<?

// information pour la connection à le DB

$host = 'localhost';

$user = 'root';

$pass = '';

$db = 'my_sionapolitano';

 
// connection à la DB

$link = mysql_connect ($host,$user,$pass) or die ('Erreur : '.mysql_error() );

mysql_select_db($db) or die ('Erreur :'.mysql_error());

 
// requête SQL qui compte le nombre total d'enregistrement dans la table et qui

//récupère tous les enregistrements

$select = 'SELECT ImmatVehicule,idVisiteur,mois FROM AffectationVehicule';

$result = mysql_query($select,$link) or die ('Erreur : '.mysql_error() );

$total = mysql_num_rows($result);

 
 
// si on a récupéré un résultat on l'affiche.

if($total) {

    // debut du tableau

    echo '<table bgcolor="#FFFFFF">'."\n";

        // première ligne on affiche les titres prénom et surnom dans 2 colonnes

        echo '<tr>';

        echo '<td bgcolor="#669999"><b><u> ID Visiteur </u></b></td>';

        echo '<td bgcolor="#669999"><b><u> Immatriculation </u></b></td>';

      echo '<td bgcolor="#669999"><b><u> Mois </u></b></td>';

        echo '<td bgcolor="#669999"><b><u> Modifier </u></b></td>';

      echo '<td bgcolor="#669999"><b><u> Supprimer </u></b></td>' ;

      echo '</tr>'."\n";

    //  affichage des résultats    

    while($row = mysql_fetch_array($result)) {

        echo '<tr>';

        echo '<td bgcolor="#CCCCCC">'.$row["idVisiteur"].'</td>';
		
		echo '<td bgcolor="#CCCCCC">'.$row["ImmatVehicule"].'</td>';

		echo '<td bgcolor="#CCCCCC">'.$row["mois"].'</td>';
		
		echo '<td bgcolor="#CCCCCC"><a href="modif.php?idVisiteur='.$row["idVisiteur"].'&mois='.$row["mois"].'"> M </a></td>';
		
		echo '<td bgcolor="#CCCCCC"><a href="supprimer.php?idVisiteur='.$row["idVisiteur"].'&mois='.$row["mois"].'"> X </a></td>';

      

      echo '</tr>'."\n";

    }

    echo '</table>'."\n";

    // fin du tableau.

}

else echo 'Pas d\'enregistrements dans cette table...';

 
// on libère le résultat

mysql_free_result($result);

 
?>

</body>

</html>