<?php 

try {
$dsn="mysql:host=localhost;dbname=login-project"
 
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
 
  
 
  
    

} catch (PDOException $ex) {
  echo $ex->getMessage();
}

?>
