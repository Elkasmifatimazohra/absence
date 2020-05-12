<?php
 // Renvoie la liste de tous les élèves

 function geteleves( ) {  
        $bdd=getbdd( ) ;
        $b='SELECT* FROM  comptes';
        $comte=$bdd->prepare($b);
        $comte->execute();
        $resultat= $comte->fetchall();
        return $resultat ;  }


 Function getbdd( )
{ 
     $bdd = new PDO('mysql:host=localhost;dbname=ensat;charset=utf8', 'root', '');      
      return $bdd;
}

Function getabsence($id) // permet d’afficher les absence d’un étudiant avec $id=id de l’étudiant

{   $bdd=getbdd( ) ;
    $b="SELECT*FROM eleve WHERE id_eleve=$id";
    $comte=$bdd->prepare($b);
    $comte->execute();
     $resultat= $comte->fetchall();
     return $resultat ;}

// ajouter absence 
function ajouterabsence($id , $dat ,$matiere ,$nb_heures ) // permet d’ajouter les absences 
{ 
    $bdd=getbdd( ) ;  
     $b="INSERT INTO eleve values(:id_eleve,:dat,:matire,:nombre_heures)";
      $comte=$bdd->prepare($b);
     $ext=$comte->execute(array(":id_eleve" => $id ,":dat"=>$dat,":matire"=>$matiere,":nombre_heures"=>$nb_heures ));   
     return $ext ;
}



function supprimer($id,$mat)
{  $bdd =getbdd();
   $s1="DELETE FROM eleve where id_eleve='".$id."' and  matire='".$mat."' ";
   $s2=$bdd->prepare($s1);
   $res=$s2->execute();
  
}


function changer($d1,$d2,$d3,$d4)
{
  $bdd=getbdd();
  $sql= $sql="UPDATE eleve SET   nombre_heures='".$d4."'  where  id_eleve='".$d1."' 
        and dat='".$d2."' and  matire='".$d3."' " ;
  $smt=$bdd->prepare($sql);
  $smt->execute();

}



?>
