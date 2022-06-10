
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <style>
        



        .btn{
        
            font-size :20px;
        }  
        .delete{
            color:red;
            font: size 20px;
        } 
        h1{
        border:3px solid white
        
            
        }
        body{
            background-color: skyblue 
        }
        

        
    </style>
    <body>
        <?php

                $user ="root";
                $pass = "";

                // connection à db
                try {
                    $dbconnect = new PDO('mysql:host=localhost;dbname=msg_db', $user, $pass);
                
                } catch (PDOException $e) {
                    print "Erreur !: " . $e->getMessage() . "<br/>";
                    die();
                }

                $req = $dbconnect ->query('SELECT * FROM message_post');  

            


   ?>

                <h1 class=ctc>Contact de Nos Clients</h1>
        <table border='1'>
              <tr>
                            
                                            <th>Ordre</th>
                            
                                            <th>Nom</th>
                            
                                            <th>Message</th>
                            
                                            <th>Priorité</th>
                            
                                            <th>Type</th>
                                            <th>Suprimer</th>
                                            <th>Modifier</th>
                            
                                            </tr>
                            <?php
                                            while($donnes = $req->fetch()) {
                    
                                               ?> <tr>
                                                    <td><?php echo $donnes["id"] ?></td>
                                                    <td><?php echo $donnes["name"] ?></td>
                                                    <td><?php echo $donnes["body"] ?></td>
                                                    <td><?php echo $donnes["priority"] ?></td>
                                                    <td><?php echo $donnes["type"] ?></td>
                                                    <td><a href="data-delete.php? del-id=<?php echo $donnes["id"]?>">Suprimer</a></td>
                                                    <td><a href="data-delete.php? id=<?php echo $donnes["id"]?>">Modifier</a></td>
                                                </tr>
                                            <?php
                                             }
                            ?>
                                          </table>


        <a class="btn" href="index.html">Retour aux formulaire</a> <br>
       
 </body>
</html>


