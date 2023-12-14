<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
      <style>
        #topheader {
          background-color: #000000;
          color: white
      }

      .button {
          text-align: right;
          margin-right: 50px;
          margin-bottom: 10px;

      }

      .container {
          display: flex;
          justify-content: space-between;
         
      }

      .container>div {
          flex: 1;
          text-align: center;
         
          margin: 10px;
        
      }
      .USER
      {
          margin-right: 20px;
          float: right;
          margin-top: 55px;
          margin-left: 49px ;
          padding-right: 90px;
          
          text-align: right;
          
      }

.container {
  display: flex;
  justify-content: space-between; /* ou une autre valeur comme space-around ou flex-start / flex-end */
}

.container > div {
  flex: 1; /* pour que chaque div ait une part égale de l'espace disponible */
  text-align: center; /* pour centrer le contenu à l'intérieur des divs */
  margin: 10px; /* Ajoutez une marge entre les divs si nécessaire */
}
  </style>
</head>
<body>
  
  
  <div id="topheader">
      
     
     <img src="http://localhost/projet/img/logo.png" width="290px">
  
  </div>
    </head>
  
    <div class="button">
    <a href="ajout.produit.html"  class="btn btn-primary">Ajouter</a>
    <a href="recherche.produit.php"  class="btn btn-success">Recherche</a>
 
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
 
<?php

echo"<h1 style>Selectionnez l'action que vous allez traiter:</h1> <br><br>";


require_once('proteineController.php');
$us=new proteineController();
$res=$us->liste();
echo "<table border=1>
<tr>
<td></td>
<td>idproteine</td>
<td>Nom</td>
<td>Description</td>
<td>Prix</td>
<td>Modifier</td>
<td>Recherche</td>
<td>Supprimer</td>
</tr>";
if (is_array($res) || is_object($res)){
foreach ($res as $row)
{
echo "<tr>

<td><input type='radio' name='idproteine' value='" . $row['idproteine'] . "'></td>
<td>$row[idproteine]</td>
<td>$row[Nom]</td>
<td>$row[Description]</td>
<td>$row[Prix]</td>
<td><a href ='modifier.produit.html?id=$row[idproteine]'>Modifier</a></td>
<td><a href='recherche.produit.php?id=$row[idproteine]'>Recherche</a></td>
<td><a href='supprimer.produit_action.php?id=$row[idproteine]'>supprimer</a></td>

</tr>";
}}
echo "</table>";
?>
     
    
    </body>
    </html>
