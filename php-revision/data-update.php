<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php
    //  créer la connection avec la base de donnée
$user = "root";
$password = "";

try{
    $dbconnect = new PDO('mysql:host=localhost;dbname=msg_db', $user,$password);
}
catch(PDOException $e){
    print "Erreur !:" .$e->getMessage() . "<br/>";
    die();
}
?>





</body>
</html>