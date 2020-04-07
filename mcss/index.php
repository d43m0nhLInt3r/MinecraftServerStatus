<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Website</title>
    <link href="../bootstrap.min.css" rel="stylesheet">
<script src="../bootstrap.min.js"></script>
<script src="../jquery-3.4.1.slim.min.js"></script>
<script>
function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    setInterval(function () {
        minutes = parseInt(timer / 60, 10)
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;

        if (--timer < 0) {
            timer = duration;
        }
    }, 1000);
}

window.onload = function () {
    var tm = 600,
        display = document.querySelector('#time');
    startTimer(tm, display);

};


</script>

</head>
<style>
h1{
    text-align: center;
    background-color: #17c643;
    margin: -8px -8px -8px -8px;
}
</style>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="../index.php">Website</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link active" href="#">Minecraft Server Status</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../Link1/index.html">Link 1</a>
    </li>
   <li class="nav-item">
      <a class="nav-link disabled" href="#">Link 2</a>
    </li>

  </ul>
</nav> 
<div style="background-color: gray;  width:50%; height:200px; float: left;">
<iframe frameborder="0" width="100%" height="100%"  src="MinecraftServerStatus.php"></iframe> 
</div>
<div style="background-color: #4d4c4c; width: 50%; height: 200px; float: right;">
<iframe frameborder="0" width="100%" height="100%" src="Usage.php"></iframe>
</div>
<div style="background-color: #c4c4c4;">
<?php include 'MinecraftLogs.php'?>
</div>
<div style="background-color: #dfdfdf; text-align: center;">
Refresh in <span id="time">10:00</span>
</div>
    </body>
    <?php
    header('Refresh: 600; url=index.php'); 
   ?>
</html>

