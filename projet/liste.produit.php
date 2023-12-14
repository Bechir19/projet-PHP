<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Liste des client</title>
</head>
<body>

    <?php
    include_once('menu.php');
    


    $proteine = new proteine();

   
    $proteineList = $proteine->liste();
   
        echo "<form  method ='POST'><table border='1'>
                    <th></th>
                    <th>idproteine</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                
                </tr>";

        while ($row = $proteineList->fetch()) {
            echo "<tr>
                    <td></td>
                    <td>" . $row['idproteine'] . "</td>
                    <td>" . $row['Nom'] . "</td>
                    <td>" . $row['Description'] . "</td>
                    <td>" . $row['Prix'] . "</td>
               

                </tr>";
                
        }
      

       
        
    ?>
 

</body>
</html>