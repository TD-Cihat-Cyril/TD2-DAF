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

$link = mysql_connect ("localhost", "root", "") or die ('Erreur : '.mysql_error() );

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

        echo '<td bgcolor="#669999"><b><u>immatriculation</u></b></td>';

        echo '<td bgcolor="#669999"><b><u>id</u></b></td>';

      echo '<td bgcolor="#669999"><b><u>Mois</u></b></td>';

       

      echo '</tr>'."\n";

    // lecture et affichage des résultats sur 2 colonnes, 1 résultat par ligne.    

    while($row = mysql_fetch_array($result)) {

        echo '<tr>';

        echo '<td bgcolor="#CCCCCC">'.$row["ImmatVehicule"].'</td>';

        echo '<td bgcolor="#CCCCCC">'.$row["idVisiteur"].'</td>';

      echo '<td bgcolor="#CCCCCC">'.$row["mois"].'</td>';

      

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