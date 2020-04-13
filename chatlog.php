 <!DOCTYPE html>
<html>
 <head>
	<title>Chat Log</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  	<meta name="description" content="Zeynep Cansu Baseren | Art by London based artist Zeynep Cansu Baseren | Digital art, urban art, programming, code, blog, female artist">
	<meta name="keywords" content="illustration, art, digital, visual poetry, london, turkish, poetry, female artist">
    <meta charset="UTF-8">
    <html lang="en-EN">
   </head>
   <body>
 <?php
  
  $chatline = $_POST["chatline"];


echo "this is ".  $_POST["username"] ."a"; 
echo "<br>";
echo "You said $chatline";
echo "<br>";
echo "Here we are!"; 
echo print_r($_POST);
?>

</body>
</html>
