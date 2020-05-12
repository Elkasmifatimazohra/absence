<!DOCTYPE html>
 <html lang="en">
   <head>
   <title>titre</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 </head>
<body>
<center><h1>la liste des absences</h1></center>
<table class="table table-bordered">
<thead >
	  <td>LA DATE</td> <td>LA MATIERE</td> <td>NOMBRE DES HEURES</td> <td>SUPPRIMER</td> <td>AJOUTER</td>
</thead>
  <tbody>
<?php
  foreach ($resultat as $res) {?>
     <tr>  <td><?php echo $res['dat']; ?> </td><td><?php echo $res['matire']; ?></td> 
    <td><?php echo $res["nombre_heures"];?></td>
     <td><?php $lien1="index2.php?&id=".$id."&mat=".$res['matire']."&action11='supprimer' "?> <a href=<?php echo    $lien1; ?>>supprimer</a></a>
     	<td><?php $lien="changer11.php?id=".$id."&mat=".$res['matire']."&dat=".$res['dat']." "?> <a href=<?php echo $lien; ?>>changer</a></a></td>
</tr>
 <?php  }  ?>
</tbody>
</table>
<br><br><br>

<form action="index2.php" method="POST">
<table class="table table-bordered">
<thead >
    <td>ID_eleve</td> <td>LA MATIERE</td> <td>NOMBRE DES HEURES</td> <td>la date</td> <td>AJOUTER</td>
</thead>
  <tbody>
    <tr>
      <td><input type="text" name="action1" value=<?php echo $id;?>></td>
      <td><input type="text" name="id1" ></td>
      <td><input type="text" name="id3" ></td>
      <td><input type="text" name="id2" blacholder="YYYY-MM-DD" ></td>
      <td>
  <input type="reset" name="annuler" value="annuler" style="background-color:#7d80f2 ; width: 100px;">
 <input type="submit" name="ajouter" value="ajouter" style="background-color:#7d80f2 ; width: 100px;">
     </td>
   </tr>
 </tbody>
</table>
</form>






