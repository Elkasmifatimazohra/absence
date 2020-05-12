<!DOCTYPE html>
<html>
<head>
	<title>changer</title>
</head>
<body style="background-color: #d3d7df;">
<?php

if(isset($_GET['id'])){
$id=$_GET['id'];
$mat=$_GET['mat'];
$dat=$_GET['dat'];

?>
<fieldset style="width: 200px;">
	<legend>changer le nombre d'heures</legend>
<form action="index2.php" >
<input type="text" name="action2" value=<?php echo $id; ?>><br>
<input type="text" name="is1" value=<?php echo $dat; ?>><br>
<input type="text" name="is2" value=<?php echo $mat;?>><br>	
<input type="text" name="is3"><br>
<input type="submit" name="aj" value="ajouter"><br>
</fieldset>
</form>
<?php } ?>

</body>
</htm

