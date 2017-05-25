<?php
echo $Title = $_GET['Title'];
echo $Description = $_GET['Description'];
echo $Message = $_GET['Message'];
function makeDir($path)
{
	return is_dir($path) || mkdir($path);
}
$c = file_get_contents('dats/posts.philippdormann')+1;
makeDir("contents/$c");
$myfile = fopen('dats/posts.philippdormann', "w") or die("Unable to open file!");
fwrite($myfile, $c);
fclose($myfile);
$myfile = fopen("contents/$c/title.philippdormann", "w") or die("Unable to open file!");
fwrite($myfile, $Title);
fclose($myfile);
$myfile = fopen("contents/$c/description.philippdormann", "w") or die("Unable to open file!");
fwrite($myfile, $Description);
fclose($myfile);
$myfile = fopen("contents/$c/message.philippdormann", "w") or die("Unable to open file!");
fwrite($myfile, $Message);
fclose($myfile);
echo '<meta http-equiv="refresh" content="0; URL=index.php">';
?>