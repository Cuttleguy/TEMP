<?php
    require("config/db.php");
    require("header.php");
    $stmt=$pdo->prepare("SELECT * FROM users WHERE Id=?");
    $stmt->execute(["1"]);
    $user=$stmt->fetch();
    // echo($user->name);
    
?>
<p class="red">THIS TEXT IS RED</p>
<div class="container">
    <div class="card">
<div class="card-header">HEADER</div>
<div class="card-body">
    <form action="home.php" method="post">
        <div class="form-group">
            <label for="reqemail">Email</label>
            <input type="email" name="reqemail" id="" require class="form-control">
        </div>
    </form>
</div>
    </div>
</div>
<?php
    require("footer.php");
?>