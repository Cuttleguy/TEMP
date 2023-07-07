<?php
    require("config/db.php");
    require("header.php");
    $stmt=$pdo->prepare("SELECT * FROM users WHERE Id=?");
    $stmt->execute(["1"]);
    $user=$stmt->fetch();
    echo($user->email);
    
?>
<p class="red">THIS TEXT IS RED</p>
<?php
    require("footer.php");
?>