
<!DOCTYPE html>
<html>

  <head>
	<title>Chat Test</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  	<meta name="description" content="Zeynep Cansu Baseren | Art by London based artist Zeynep Cansu Baseren | Digital art, urban art, programming, code, blog, female artist">
	<meta name="keywords" content="illustration, art, digital, visual poetry, london, turkish, poetry, female artist">
    <meta charset="UTF-8">
    <html lang="en-EN">
    <link rel="stylesheet" type="text/css" href="chat.css">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js">
	<script language="javascript" type="text/javascript" src="p5.min.js"></script>
	<script language="javascript" src="chat.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	
	
  </head>
  
  <body>


	<!-- $(document).ready(
            function() {
            	setInterval(function() {
            	$('#chat_log').load("/chatlog.php");
            	}, 1000);
            	}); */

	/* $(document).ready(function() {
	 		var frm = $('#form1');
    frm.submit(function (ev) {
    	// ev.preventDefault();
        $.ajax({
            type: frm.attr('method'),
            url: frm.attr('action'),
            data: frm.serialize(),
            success: function (data) {
                alert('ok');
            }
        });
        
    });
});

	/* function submitName() {
	var username = document.getElementById("username").value;
	    $.ajax({
            type : "POST",  //type of method
            url  : "/chatlog.php",  //your page
            data : { username: username }, // passing the values
            success : function(data){  
                       $('#chat_log').load("chatlog.php");
                       alert(username);
                    }
        });
	}

    function submitChatLine() {
 	var chat_line = $("#chatline").val();
	 $.ajax({
            type : "POST",  //type of method
            url  : "/chatlog.php",  //your page
            data : { chatline : chatline}, // passing the values
            success : function(data){  
                       $('#chat_log').load("chatlog.php");
                       alert(chatline);
                    }
        });
 } -->
	





<form id="form1"  method="post">
		  
         <input type = "text"
        		placeholder="Your name" 
                 id = "username"
                 name = "username"
                />
<input type="submit" id="startbutton" value="OK" />
</form>

<form id="form2" method="post">
      <fieldset id="formfields">
          <label id="user"></label>
          <input type = "text"
                 id = "chatline"
                 name = "chatline"
                />
       <input type="submit" id="submitbutton" value="Send" />
        </fieldset>
    </form>

<p>Array of posts:</p>

   <?php
  $username = $_POST['username'];
  $chatline = $_POST['chatline'];
  if(isset($_POST['chatline']) ) 
{ 
   echo "$username said $chatline";
}

?>

  </body>

  </html>



