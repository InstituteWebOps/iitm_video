<!DOCTYPE html>
<html>
<head>
<title>IITM | Video Conf</title>
<link rel="stylesheet" href="http://bootswatch.com/paper/bootstrap.min.css">
<link rel="stylesheet" href="/iitm_video/public/css/app.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">IITM Video</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li><a href="/iitm_video">Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?= $_SESSION['user']['username']?> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="signout">Signout</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>
