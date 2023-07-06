<?php 


$dsn="mysql:host=localhost;dbname=login-project";
 $username="root";
 $password="";
try {
    $pdo= new PDO($dsn,$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
    //throw $th;
}

  
 
  
 
  
    


?>
