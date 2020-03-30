<?php
  if (!isset($_COOKIE['blinder'])) {
    header('Location: index.php');
    die();
  }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blind Coder</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Vamsi Krishna Kodimela">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <style media="screen">
*{
	color:black;
}
    #count{
      color: red;
      margin: auto;
    }
    textarea::selection{
      color: black;
      background-color: black;
    }
  </style>

</head>
<body bgcolor='black'>

	<div style="width:80%; margin:70px auto; padding:30px; border-radius:10px; background-color:white; text-align:center; box-shadow:0px 0px 10px yellow;">

    <form method='get' action="submit.php" style="text-align:center;">
      <textarea name="code" id='blind' onchange="changer();" style="width:100%; height:500px; resize:none; background-color: black;"></textarea>
      <button type="submit" name="button" style="color:white; background:green; padding:10px 20px; margin:10px auto; border:0px; border-radius:20px;">Submit</button>
    </form>
	</div>





  <script language="JavaScript">



    window.onload = function() {
      document.addEventListener("contextmenu", function(e){
        e.preventDefault();
      }, false);
      document.addEventListener("keydown", function(e) {
      //document.onkeydown = function(e) {
        // "I" key
        if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
          disabledEvent(e);
        }
        // "J" key
        if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
          disabledEvent(e);
        }
        // "S" key + macOS
        if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
          disabledEvent(e);
        }
        // "U" key
        if (e.ctrlKey && e.keyCode == 85) {
          disabledEvent(e);
        }
        //"A" Key
        if (e.ctrlKey && e.keyCode == 65) {
          disabledEvent(e);
        }
        //"V" key
        if (e.ctrlKey && e.keyCode == 86) {
          disabledEvent(e);
        }
        //"C" Key
        if (e.keyCode == 67) {
          disabledEvent(e);
        }
        //"menu" key
        if (e.keyCode == 93) {
          disabledEvent(e);
        }

        // "F12" key
        if (event.keyCode == 123) {
          disabledEvent(e);
        }
      }, false);
      function disabledEvent(e){
        if (e.stopPropagation){
          e.stopPropagation();
        } else if (window.event){
          window.event.cancelBubble = true;
        }
        e.preventDefault();
        return false;
      }
    };
  </script>



<script>

var textareas = document.getElementsByTagName('textarea');
var count = textareas.length;
for(var i=0;i<count;i++){
textareas[i].onkeydown = function(e){
if(e.keyCode==9 || e.which==9){
e.preventDefault();
var s = this.selectionStart;
this.value = this.value.substring(0,this.selectionStart) + "\t" + this.value.substring(this.selectionEnd);
this.selectionEnd = s+1;
}
}
}

                </script>

</body>
</html>
