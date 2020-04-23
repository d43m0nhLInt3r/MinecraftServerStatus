<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Website</title>
  <link href="bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap.min.js"></script>
  <script src="jquery-3.4.1.slim.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Website</a>

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="mcss/index.php">Minecraft Server Status</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="openLGSDownloadPage/index.html">Link 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Link 2</a>
      </li>

    </ul>
  </nav>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1>Website</h1>
      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr...</p>
    </div>
  </div>
  <div id="container" style="margin-right: 5%; margin-left: 5%;">

    <div class="card">
      <div class="card-header">Minecraft Server Status</div>
      <div class="card-body">A Page where you can check server specific information<a class="btn btn-large btn-info" style="float: right;" href="mcss/index.php">visit</a></div>
    </div>
    <div class="card" style="margin-top: 30px;">
      <div class="card-header">Link 1</div>
      <div class="card-body">Lorem ipsum dolor sit amet, consetetur sadipscing elitr...<a class="btn btn-large btn-info" style="float: right;" href="openLGSDownloadPage/index.html">visit</a></div>
    </div>

    <div class="card" style="margin-top: 30px;">
      <div class="card-header">Link 2</div>
      <div class="card-body">Lorem ipsum dolor sit amet, consetetur sadipscing elitr...<a class="btn btn-large btn-info disabled" style="float: right;" href="#">visit</a></div>
    </div>

    <div class="card" style="margin-top: 30px;">
      <div class="card-header">Website</div>
      <div class="card-body">Lorem ipsum dolor sit amet, consetetur sadipscing elitr...<a class="btn btn-large btn-info" style="float: right;" href="path/to/file">Download</a></div>
    </div>


  </div>


</body>

</html>