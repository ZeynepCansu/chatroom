let canvas, userName, chatLine, result;
let drawCanvas = false;

 function setup() {
 	frameRate(50);
 	rectMode(CORNER);
 	canvas = createCanvas(windowWidth, windowHeight-150);
 	

 }

function makeId(length) {
   var result           = '';
   var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
   var charactersLength = characters.length;
   for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
   }
   return result;
}


  makeId(5);

function getStarted() {
 userName = prompt("Please enter your name to start chatting");
 if (userName != null) {
 	document.getElementById("user").innerHTML = userName+":";
 	document.getElementById("startbutton").remove();
 	// drawCanvas = true;
 	let legend = document.createElement('legend');
 	document.getElementById("formfields").prepend(legend);
 	legend.setAttribute('id', makeId(5));
 	document.getElementById("formfields").firstChild.innerHTML = "Your Message";



 }
 }

 function draw() {
 	if (drawCanvas) {
 		background(200, 30, 40, 100);
 	}
 }

 /* function submitText() {
 	chatLine = document.getElementById("myText").value;
 	let chatLinesubmitted = createElement('p', userName + ": " + chatLine); 
 

 }

*/