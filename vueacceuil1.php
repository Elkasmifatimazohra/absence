
<?php $titre='gestion des eleves';?>
<?php $titre1 ='Liste des élèves';?>
<?php $titre2 =' ID_ELEVES';?>
<?php $titre3 ='CNE'; ?>
<?php $titre4 =' NOM'; ?>
<?php $titre5 ='PRENOM'; ?>
<?php $titre6= 'AGE'; ?>
<?php $titre7= 'ADRESSE EMAIL'; ?>
<?php $titre8= 'PHOTO'; ?>
<?php $titre9= 'ABSENCE'; ?>

 <?php  
   ob_start();  
   
  foreach ($resultat as $res) {
   ?>
   <tbody> <tr> 
   	<td> <?php echo $res['id_comptes']; ?> </td>
        <td> <?php echo $res['CNE']; ?> </td>
        <td> <?php echo $res['nom']; ?> </td>
        <td> <?php echo $res['prenom']; ?> </td>
        <td> <?php echo $res['age']; ?> </td>
        <td> <?php echo $res['adresse_email']; ?> </td>
        <td><?php $ph=$res['nom'].".png";?> <img src=<?php echo $ph;?>> </td>
        <td><?php  $lien="index2.php?id=".$res["id_comptes"]."&action=’absence’ "; ?> <a href=<?php echo $lien; ?>> absence </a></td>
        </tr></tbody> <?php   }  ?> 
  
<?php   $contenu = ob_get_clean(); ?>
<?php  require 'gabarit.php'; ?>

