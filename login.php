<?php

require_once "config.php";
require_once "session.php";

if(isset($_POST['submit'])){
    $username = trim($_POST["username"]); 
    $hashpassword = md5($_POST['password']);
    $sql = "SELECT * FROM public.users WHERE username = '".($_POST['username'])."' and password ='".$hashpassword."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
    if($login_check > 0){ 
        session_start();
      $_SESSION["loggedin"] = true;
      $_SESSION["id"] = $id;
      $_SESSION["username"] = $username; 
      header("location: welcome.php");
    }else{
        
        echo "Invalid Details";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="icon" href="../assets/icon.gif">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>悲</title>
</head>
<body>
</div>
<div id="sadtext">SAD SAD SAD SAD SAD SAD SAD</div>
<button id="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../assets/onepunchman copy.gif" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="username"><b>Username</b></label>
      <input id="input" type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input id="input" type="password" placeholder="Enter Password" name="password" required>
        
      <button id="logininmodal" name="submit" type="submit">Login</button>
      <label>
        <input id="input" type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button id="cancel" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
<a href="register.php" id="register" name="register" type="button">Register</a>

</body>
<script type="text/javascript">
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}</script>
</html>