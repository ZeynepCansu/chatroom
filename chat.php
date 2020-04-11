
<!DOCTYPE html>
<html>

  <head>
	<title>Chat Test</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  	<meta name="description" content="Zeynep Cansu Baseren | Art by London based artist Zeynep Cansu Baseren | Digital art, urban art, programming, code, blog, female artist">
	<meta name="keywords" content="illustration, art, digital, visual poetry, london, turkish, poetry, female artist">
    <meta charset="UTF-8">
    <html lang="en-EN">
	<script language="javascript" type="text/javascript" src="p5.min.js"></script>
	<script language="javascript" src="chat.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js">
	<script type="text/javascript"src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	 <link rel="stylesheet" type="text/css" href="chat.css">
	
  </head>
  
  <body>
<!-- <script>
    $(document).ready(
            function() {
                setInterval(function() {
                    $('#main').load('https://raw.githubusercontent.com/ZeynepCansu/chatroom/master/chatlog.php');
                                    }, 1000);
            });
</script> -->

<div id="main">
<button type="button" id="startbutton" onclick="getStarted()">Click to start</button>
</div>

<form id="form" action="chatlog.php" method="post">
      <fieldset id="formfields">
          <label id="user"></label>
          <input type = "text"
                 id = "myText"
                 name = "chat_line"
                >
       <input type="submit" id="submitbutton">Send</button>
        </fieldset>
    </form>
  </body>

  </html>


