<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Navbar</title>
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

    </style>
</head>
<body>
    
    
    <div id="topheader">
        
       
       <img src="http://localhost/projet/img/logo.png" width="290px">
    
    </div>
    

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

    </nav>
    <div class="button">
    <a href="ajout.produit.html"  class="btn btn-primary">Ajouter</a>
<a href="recherche.produit.html" class="btn btn-secondary" >Recherche</a>
<a href="modifier.produit.html" class="btn btn-success"   >Modifier</a>
<a href = "supprimer.php"  class="btn btn-danger" >Supprimer</a> 
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> 







<?php
require_once('proteineController.php');
$us=new proteineController();
$res=$us->liste();
    
        echo "<form action= 'supprimer.produit_action.php' method ='POST'><table border='1'>
                    <th></th>
                    <th>idproteine</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Action1</th>
                    <th>Action2</th>
                    <th>Action3</th>
                    
                </tr>";

                while ($row = $proteineList->fetch()) {
                    echo
                     "<tr>
                            <td><input type='radio' name='idproteine' value='".$row['idproteine']."'></td>
                            <td>" . $row['idproteine'] . "</td>
                            <td>" . $row['Nom'] . "</td>
                            <td>" . $row['Description'] . "</td>
                            <td>" . $row['Prix'] . "</td>
                            <td><a href='modifier.produit.html?id=".$row['idproteine']."'>Modifier</a></td>
                            <td><a href='recherche.produit.html?id=".$row['idproteine']."'>Recherche</a></td></tr>;
                            
                        </tr>";
                }
                
                
        
      

        echo "</table>    <input type ='submit' value ='supprimer'> </form>";
        
    ?>