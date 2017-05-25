<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FlatBlog</title>
        <link href="style.css" rel="stylesheet">
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
                        <li><a href="index.php">Blog</a></li>
                        <li><a href="admin">Admin</a></li>
                        <li class="active"><a>Post</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br><br>
        <div class="container">
            <br>
            <?php
            $i = $_GET['ID'];
            $t = file_get_contents("admin/contents/$i/title.philippdormann");
            $d = file_get_contents("admin/contents/$i/description.philippdormann");
            $m = file_get_contents("admin/contents/$i/message.philippdormann");
            ?>
            <div class="jumbotron">
                <div class="container">
                    <h1 class="text-center"><?php
                    echo $t;
                    ?></h1><br><small><?php echo $d; ?></small>
                    <hr>
                    <p><?php  echo $m; ?></p>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>