<!doctype html> 
<html lang="fr">
 <head>   
    <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   
     <title><?= $titre ?></title>
     
</head> 
<body style="background-color: #d3d7df;" >  
       <div id="global">  
        
            <center> <br>
           <h1 id="titreBlog" style="color:#041028;"><?= $titre1 ?></h1></a> </center> <br>
      
       <table class="table table-bordered"  >
        <thead>
          
            <td><?= $titre2 ?></td>
            <td><?= $titre3 ?></td> 
            <td><?= $titre4 ?></td>  
            <td><?= $titre5 ?></td> 
            <td><?= $titre6 ?></td>
            <td><?= $titre7 ?></td>  
            <td><?= $titre8 ?></td> 
            <td><?= $titre9 ?></td>

         
       </thead>
      
   <div id="contenu">  
   <?= $contenu ?>

   

</div>     
      </div>   
  </div>
</body> 
</html>

