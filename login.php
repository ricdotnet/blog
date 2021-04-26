<?php

require('header3.php');

if(isset($_POST['login'])) {

    if(empty($_POST['email']) || empty($_POST['password'])) {
        echo 'Please enter an email and a password.';
    } else {

        $query = $dbh->prepare('select * from users where email = ? and password = ?');
        $query->bindParam(1, $_POST['email']);
        $query->bindParam(2, $_POST['password']);
        $query->execute();

        if($query->rowCount() === 1) {

            $_SESSION['id'] = $query->fetchColumn(0);
            header("location: " . $url);

        } else {
            echo 'invalid details';
        }

    }

}
    
?>

<div class="w-25 mx-auto">

    <form method="post" name="login">
        <div class="form-group">
            <label for="email">Email address</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" name="password" type="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>

</div>

<?php
    
    include('footer.php');

?>