<?php

session_start();

if (!isset($_SESSION["userid"]) || $_SESSION["userid"] !==true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="icon" href="../assets/icon.gif">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>悲</title>
</head>
<body>
    <div id="audio-player-container">
    <audio id="player" src="../assets/sinners_lullaby.m4a" autoplay loop></audio>
</div>
<div id="sadtext">WELCOME <?php echo $_SESSION["name"]; ?></div>
<div id="display">
    <div><p id="audiomenutext">Audio Menu</p></div>
<div id="buttons">
    <li><button class="buttons" onclick="document.getElementById('player').play()">Play</button></li>
    <li><button class="buttons" onclick="document.getElementById('player').pause()">Pause</button></li>
    <li><button class="buttons" onclick="document.getElementById('player').muted=!document.getElementById('player').muted">Mute/ Unmute</button></li>
</div>
</div>
<!-- <button id="login" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

<!-- <div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="../assets/onepunchman copy.gif" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input id="input" type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input id="input" type="password" placeholder="Enter Password" name="psw" required>
        
      <button id="logininmodal" type="submit">Login</button>
      <label>
        <input id="input" type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button id="cancel" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div> -->
<a href="logout.php" class="buttons" aria-pressed="true">Logout</a>
</body>
<script type="text/javascript" src="../js/home.js"></script>
</html>