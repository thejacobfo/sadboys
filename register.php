<?php

require_once "config.php";
require_once "session.php";

if(isset($_POST['submit'])){
  if((!empty($_POST["username"])) && (!empty($_POST["password"]))){        $sql = "INSERT INTO public.users (username, password) VALUES ('".$_POST['username']."','".md5($_POST['password'])."')";
    $ret = pg_query($dbconn, $sql);
    if($ret){
        
            echo "Data saved Successfully";
    } else {
        
            echo "Something Went Wrong";
    }
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
    <div id="audio-player-container">
    <audio id="player" src="../assets/sinners_lullaby.m4a" autoplay loop></audio>
</div>
<div id="sadtext">SAD SAD SAD SAD SAD SAD SAD</div>
<div id="display">
    <div><p id="audiomenutext">Audio Menu</p></div>
<div id="buttons">
    <li><button class="buttons" onclick="document.getElementById('player').play()">Play</button></li>
    <li><button class="buttons" onclick="document.getElementById('player').pause()">Pause</button></li>
    <li><button class="buttons" onclick="document.getElementById('player').muted=!document.getElementById('player').muted">Mute/ Unmute</button></li>
</div>
</div>
<button id="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Register</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../assets/onepunchman copy.gif" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="username"><b>Username</b></label>
      <input id="input" type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input id="input" type="password" placeholder="Enter Password" name="password" required>
        
      <button id="logininmodal" name="submit" type="submit">Register</button>
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
</body>
<script type="text/javascript" src="../js/home.js"></script>
</html>