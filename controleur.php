
<?php
   require'modele.php' ;
     //pour afficher la liste des etudiants
    function acceuil1( ){
    $resultat=geteleves();
    require'vueacceuil1.php';
      }
  //afficher les absences
  function acceuil2($id) {
  $resultat=getabsence($id);
  require 'vueacceuil2.php';
}

// ajouter absence
function acceuil3($id , $dat ,$mat ,$nb){
$ext= ajouterabsence($id , $dat ,$mat ,$nb) ;
acceuil2($id);
}

// supprimer absence

function acceuil4($id,$mat){
 
  supprimer($id,$mat) ;
   acceuil2($id);
}

// changer absence
  function acceuil5($d1,$d2,$d3,$d4) {
    $res=changer($d1,$d2,$d3,$d4) ;
     acceuil2($d1);  
}


?>