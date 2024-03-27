<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />


</head>

<body class="">
 
              <div class="card-body">
               
                    
                  <?php  if(isset($item8)){ 
                    
  
                     echo "

                     <h2>DEMANDE DE RESERVATION DES TERRAINS DE SPORT</h2></br></br>
                     <p>A Monsieur le directeur de l’Ecole Nationale Supérieure d’Arts et Métiers Casablanca</p></br></br>
                     <p><b>Objet : </b> Demande de réservation de terrain </p></br></br>
                     <p>Monsieur,</p></br></br>
                     <p>Nous avons l’honneur de solliciter une autorisation d’occupation des terrains de sport pour la date et la durée signalée ci-dessous et nous nous engageons à respecter le patrimoine et l’organisation de l’espace réservé et à assumer la responsabilité en cas de son destruction.</p></br></br></br>
                     <p>Représentant:</p></br>
                     <h3>Nom:             $item8->Nom_Representant</h3>
                     <h3>Niveau:          $item8->Niveau_Representant</h3>
                     <h3>Téléphone:       $item8->Téléphone_Representant</h3>
                     <h3>Email:           $item8->Email_Representant</h3>
                     <h3>Date:            $item8->Date</h3>
                     <h3>Horaire:         $item8->Horaires</h3></br></br>
                     <p>Dans l’attente de votre confirmation, veuillez agréer, Monsieur, nos salutations distinguées.</p>


                ";
                    }?>

<?php  if(isset($item9)){
  
echo "
<p>Casablanca, le $item9->created_at</p>
<p>A l’intention de Monsieur le Directeur </p>
<h3>Objet : Demande de stage<h3>
<p>Monsieur,</p>
<p>Considérant d’une part le rôle que l’ENSAM de Casablanca joue pour la formation des profils pluri-compétents, humanistes, innovants et dotés d’un esprit entrepreneurial, pouvant opérer dans différents secteurs industriels privés et publics à l’échelle nationale et internationale, et d’autre part, l’engagement reconnu de votre structure, en tant qu’entreprise citoyenne, à soutenir les initiatives de développement humain, en particulier dans les domaines de l’éducation et de la formation, Nous vous demandons de bien vouloir admettre au sein de votre établissement pour un stage en entreprise doté d’encadrement de professionnels, en fonction de vos objectifs et disponibilités, </<p>
<h3>L’étudiant	: $item9->Nom_Etudiant  $item9->Prenom_Etudiant</h3>
<h3>Filière     : $item9->Filière </h3> 
<h3>Période     : $item9->Période</h3> 
<p>Il va sans dire que, d’une part, nos stagiaires seront soumis à la réglementation en vigueur dans votre entreprise, et que d’autre part, l’ENSAM, les assure contre les risques d’accident durant la période de stage (Assurance SICAREME).</p>
<p>Veuillez agréer, Monsieur le Directeur, l’expression de nos salutations distinguées.</p>
   ";
}?>

                   <?php  if(isset($item7)){ 
                    
  
                    echo "
                    <h1>DEMANDE DE RESERVATION D’ESPACES ET DE MATERIELS<h1>
                    
                    <p>A Monsieur le directeur de l’Ecole Nationale Supérieure d’Arts et Métiers Casablanca</p></br></br>
                    <p>Dans le cadre des activités parascolaires, </p></br></br>
                    <h3>Le       :          $item7->Date</h3>
                    <h3>Organise :          $item7->Event<h3>
                    <h4>Date et Durée :     $item7->Date $item7->Durée</h4>
                    <h4>Public/Cible :	     $item7->Public</h4>
                    <p>En effet, vue  le type de la dite activité, son organisation requière la disponibilité des espaces et des équipements suivants :</p></br></br>
                    <h3>Espace :            $item7->Espace</h3>
                    <h3>Equipements :       $item7->Equipements</h3>
                    <p>Pour cela, nous vous demandons, monsieur le Directeur, de bien vouloir nous autoriser l’exploitation des dites espaces et/ou matériels pour la date et la durée signalée précédemment, et je m’engage à respecter le patrimoine et l’organisation de l’espace loué ainsi que les consignes d’utilisation de matériel emprunté et à assumer le coût de son remplacement en cas de perte ou de destruction.</p></br></br>
                    <p>Dans l’attente de votre confirmation, veuillez agréer, nos salutations distinguées.</p>
                    <p>Représentant de l’activité :</p>
                    <h3>Nom :              $item7->Nom_Representant</h3>
                    <h3>Niveau :           $item7->Niveau_Representant</h3>
                    <h3>Téléphone:         $item7->Téléphone_Representant</h3>
                    <h3>Email:             $item7->Email_Representant</h3>
                    
                       ";
                   }?>
                   
                   <?php  if(isset($item6)){ 
                    
  
                    echo "
                    </br>
                    <h1 >ATTESTATION<h1>
                    <p>Le Directeur de l’Ecole Nationale Supérieure d’Arts et Métiers de Casablanca atteste que l’élève ingénieur :</p>
                     <h2>Nom: $item6->Nom_Etudiant</h2>
                     <h2>Prénom: $item6->Prenom_Etudiant</h2>
                     <h2>CNE: $item6->CNE</h2>  
                     <p>Inscrit(e) en première année cycle ingénieur, Filière Génie Mécanique durant l’année universitaire 2020-2021 est concerné(e) par la session normale des examens qui se déroulera du 8 au 14 Juillet 2021.

                     Cette attestation est délivrée à l’intéressé(e) pour justifier l’absence au stage en industrie.
                     
                     </p>
                     ";
                   }?>
                      
                      



                    
                 
               
              </div>
          
 
</body>

</html>