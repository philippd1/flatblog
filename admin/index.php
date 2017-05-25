<?php
$dauer = 3000;
$exp_gmt = gmdate("D, d M Y H:i:s", time() + $dauer * 60) ." GMT";
$mod_gmt = gmdate("D, d M Y H:i:s", getlastmod()) ." GMT";
header("Expires: " . $exp_gmt);
header("Last-Modified: " . $mod_gmt);
header("Cache-Control: public, max-age=" . $dauer * 60);
header("Cache-Control: pre-check=" . $dauer * 60, FALSE);
session_start();
$userinfo = array("admin"=>"21232f297a57a5a743894a0e4a801fc3");
if (isset($_POST["username"]) && isset($_POST["passwort"]))
{
if ($userinfo[$_POST['username']] == md5($_POST['passwort']))
{
# Userdaten korrekt - User ist eingeloggt
# Login merken !
$_SESSION["login"] = 1;
}
}
if ($_SESSION["login"] != 1)
{
include("login.html");
exit;
}
# User ist eingeloggt

if (!isset($_POST['username'])) {
$user = $_COOKIE['u'];
}
if (isset($_POST['username'])) {
$user = $_POST['username'];
}





echo '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FlatBlog | Admin</title>
    <link href="../style.css" rel="stylesheet">
    <style>
        .flatblog-badge{
        float: right;
        }
        .flatblog-nav{
            font-size: 50%;
        }
        </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">FlatBlog <small class="flatblog-nav">by Philipp Dormann</small></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="../">Blog</a></li>
            <li class="active"><a>Admin</a></li>
            <li><a href="logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br>
    <div class="container">
      <br>
      <form action="post.php" method="get" role="form">
        <legend>New post</legend>
        <div class="form-group">
          <label for="Title">Title</label>
          <input name="Title" autofocus required type="text" class="form-control" id="Title" placeholder="Title">
          <label for="Short Description">Short Description</label>
          <input name="Description" required type="text" class="form-control" id="Short Description" placeholder="Short Description">
          <label for="Post Message">Post Message</label>
          <input name="Message" required type="text" class="form-control" id="Post Message" placeholder="Post Message">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>';




        ?>