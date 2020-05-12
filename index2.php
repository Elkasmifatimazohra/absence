<?php
 include'controleur.php';
 if (isset($_GET['action'])) {  
     if ($_GET['action']='absence') {
          if (isset($_GET['id'])) {     
              acceuil2($_GET['id']); } }}


else if(isset($_GET['action11'])) { 
              acceuil4($_GET['id'],$_GET['mat']) ;
 } 

 else if (isset($_POST['action1'])){
         $id=$_POST['action1'];
         $mat=$_POST['id1'];
         $dat=$_POST['id2'];
         $nb=$_POST['id3'];
         acceuil3($id,$dat,$mat,$nb);}

else if(isset($_GET['action2'])) {
            acceuil5($_GET['action2'],$_GET['is1'],$_GET['is2'],$_GET['is3']);
}
 

 else             
{acceuil1();
 }
 ?>



