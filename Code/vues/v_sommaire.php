    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li >
				  Visiteur :<br>
				  <?php
					$nom = $_SESSION['nom'];
					$prenom = $_SESSION['prenom'];
				  ?>
				<?php echo $nom."  ".$prenom  ?><br>
				 votre immatriculation est <b><?php echo $_SESSION['ImmatVehicule']?></b>
			</li>
           <li class="smenu">                                                                                         
              <a href="index.php?uc=gererFrais&action=saisirFrais" title="Saisie fiche de frais ">Saisie fiche de frais</a>
           </li>
		   <?php
			mysql_connect( "localhost", "root", "" ) ;
			mysql_select_db( "my_sionapolitano" ) ;
			
			$sql = mysql_query("SELECT login FROM Visiteur WHERE nom='$nom' AND prenom='$prenom'");
			$donnees = mysql_fetch_array($sql);
			if($donnees['login']=='cyril')
			{
				echo '<br><br><li class="smenu">
              <a href="form_daf.php">DAF</a>
           </li><br><br>';
			}
		   ?>
           <li class="smenu">
              <a href="index.php?uc=etatFrais&action=selectionnerMois" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
           </li>
 	   <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
           </li>
         </ul>
        
    </div>
    