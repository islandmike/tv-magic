<?php
	require_once "include/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="assets/external/bootstrap/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/external/font-awesome/css/font-awesome.min.css"/>
	
	<link rel="stylesheet" href="assets/css/all.css"/>
	<link rel="stylesheet" href="assets/css/theme.css"/>
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
          <a class="navbar-brand" href="#">TV Magic</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">TV Library</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div class="container theme-showcase" role="main">
		<div class="page-header"><h1>TV Libraries <i id="add-library" class="fa fa-plus-square"></i></h1></div>
<?php
	include "include/dbconnect.php"
	
	$sqlquery="SELECT c00 FROM movie;";
	$result=mysqli_query($dbconn,$sqlquery);
	WHILE ($row=mysqli_fetch_assoc($result));
	
	$sqlquery="SELECT c00 FROM tvshow;";
?>
	</div>
	
</body>
</html>
