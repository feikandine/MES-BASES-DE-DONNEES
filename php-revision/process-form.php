<?php


$name = $_POST["name"];
$message = $_POST["message"];
$priority=filter_input(INPUT_POST,"priority",FILTER_VALIDATE_INT);
$type =filter_input(INPUT_POST,"type",FILTER_VALIDATE_INT);
$terms = filter_input(INPUT_POST,"terms",FILTER_VALIDATE_BOOL);

 if(!$name||!$message ||!$priority||!$type ){
 echo"veillez remplir touts les champs";
}else{


if ( ! $terms) {
    die("Terms must be accepted");

}


// Connectyion à la base de donnée
$host ="localhost";
$dbname = "msg_db";
$username ="root";
$password = "";

 $conn = mysqli_connect( hostname: $host,
                        username: $username,
                        password: $password,
                        database: $dbname);

            if (mysqli_connect_errno()){
                die("connection error:" .mysqli_connect_error());
            }

            // inserction des données
            $sql = "INSERT INTO message_post(name,body,priority,type)
            VALUES (?,?,?,?)";

      $stmt = mysqli_stmt_init($conn);

      if ( ! mysqli_stmt_prepare($stmt,$sql)){
          die (mysqli_error($conn));
      }
      mysqli_stmt_bind_param($stmt,"ssii",
                            $name,
                            $message,
                            $priority,
                             $type);

      mysqli_stmt_execute($stmt);    
      
      
      echo "Recors saved.";

      header('location:data-display.php');
    }


  
?>