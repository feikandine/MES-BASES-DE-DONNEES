<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php
        $user = "root";
        $pass = "";
        $id = $_GET["del-id"];

        try {
            $dbconnect = new PDO('mysql:host=localhost; dbname=msg_db', $user, $pass ,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
        } 
        catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        
        if(isset($_GET["id"]));
        {
            $req = $dbconnect -> prepare("DELETE * FROM msg_db WHERE del =?");
            $req ->execute([$id]);

            echo "Message Supprimé avec succès";
        }
        
    ?>




<button> <a href="index.html">Retour au formulaire</a></button>

</body>
</html>
