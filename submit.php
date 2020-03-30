<?php
if (!isset($_COOKIE['blinder'])) {
  header('Location: index.php');
  die();
}else {
  $user=$_COOKIE['blinder'];
}
if (isset($_GET['code'])) {
  $link = $_SERVER['REQUEST_URI'];
  $start=strpos($link,"code=");
  $len=strpos($link,"button");
  $code = substr($link,$start,$len-$start);




  $file = fopen($user."_blindCoder.txt", "w") or die("Unable to open file!");

fwrite($file, $code);
fclose($file);
$fileMoved = rename($user."_blindCoder.txt", "UPLOAD/".$user."_blindCoder.txt");

}else {
  die("Something went wrong. Please consult your invigilator.");
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    html {
background: black;
}
h1 {
position: fixed;
top:50%;
left:50%;
transform: translate(-50%, -50%);
width: 75vmin;
outline: 1px solid;
display: flex;
flex-wrap: wrap;
font-family: 'Quicksand', sans-serif;
}
span {
display: block;
flex: 1 0 25vmin;
text-align: center;
color: white;
font-size: 20vmin;
text-transform: uppercase;
height: 25vmin;
}
    </style>
  </head>
  <body>

    <h1>
<span>T</span>
<span>h</span>
<span>a</span>
<span>n</span>
<span>k</span>
<span>y</span>
<span>o</span>
<span>u</span>
<span>!</span>
</h1>


<script type="text/javascript">
var spans = document.querySelectorAll('span');
var spansShuffle = "THANKYOU!".split('');

function randomize() {
var j, x, i;
for (i = spansShuffle.length - 1; i > 0; i--) {
  j = Math.floor(Math.random() * (i + 1));
  x = spansShuffle[i];
  spansShuffle[i] = spansShuffle[j];
  spansShuffle[j] = x;
}
for (i = 0; i < spans.length; i++) {
  spans[i].innerHTML = spansShuffle[i];
}
}

window.setInterval(randomize, 1500);
</script>

  </body>
</html>
