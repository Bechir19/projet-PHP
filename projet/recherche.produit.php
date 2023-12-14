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
    <body>
      <?php 
      require_once('proteineController.php');
      require_once('proteine.php') ;
      $proteineCtr=new proteineController();
      $res=$proteineCtr->getproteine($_GET['idproteine']);
      ?>
      <legend ><H1>Recherche votre produit </H1>  </legend>
      <label>veuillez selectionner  un critere de recherche </label> 
    <form action ="recherhce.produit_action.php"  method ="POST" ></br> 
      <label name="critere"> critere : </label>
      <select name="critere" >
      <option value="idproteine" name="idproteine"    value = "<?php echo $res['idproteine'] ?>">idproteine</option> 
        <option value="Nom" name="Nom"     value = "<?php echo $res['Nom'] ?>">Nom</option> 
        <option value="Description" name="Description"   value = "<?php echo $res['Description'] ?>" >Description</option> 
        <option value="Prix" name="Prix"    value = "<?php echo $res['Prix'] ?>">Prix</option> 
    </select></br>
    valuer : <input type="text" value="" name="valeur"></br></br>
    <button type="submit" class="btn btn-Info" >Rechercher</button>
    <button type="reset" class="btn btn-danger" href="menu1.php">Anuuler</button>
    
    </form>
    
     
    
    </body>
    </html>