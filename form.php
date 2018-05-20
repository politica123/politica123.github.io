<?php 
    $mysqli = new mysqli("localhost", "root", "root", "accounts");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    //two passwords are equal to each other
     if ($_POST['password'] == $_POST['confirmpassword']) {
         
         $username = $mysqli->real_escape_string($_POST['username']);
         $email = $mysqli->real_escape_string($_POST['email']);
         $password = md5($_POST['password']); //md5 hashed password
         
         $sql= "INSERT INTO users (username, email, password) "
             . "VALUES ('$username', '$email', '$password')";
         
         //if the query is successful, redirect to welcome.php page and done!
            if ($mysqli->query($sql) == true) {
                echo "Registration Successful, redirecting";
                header( "refresh:3 url=https://politica123.github.io/index.html" )
            }
            else {
                echo "User could not be added";
            }
         
     }
    else {
        echo "Both Passwords do not match";
    }
}

?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="form.php" method="POST" enctype="multipart/form-data" autocomplete="off">
    <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>