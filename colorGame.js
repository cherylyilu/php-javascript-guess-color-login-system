
var numSquares = 9;
	var colors = [];
	var pickedColor;
	var squares = document.getElementsByClassName("square");
	var colorDisplay = document.getElementById("colorDisplay");
	var messageDisplay = document.getElementById("message");
	var h1 = document.getElementsByTagName("h1");	
	var homeButton = document.getElementById("home");
	var resetButton = document.getElementById("reset");
	var modeButtons = document.getElementsByClassName("mode");
	var pageColor=document.getElementById("pageColor");


init();
function init(){
	reset();
}

window.onload=function(){
	

	for(var i = 0; i < modeButtons.length; i++){
			modeButtons[i].onclick=function_mode;
		
}
	
	for(var i = 0; i < squares.length; i++){
	
		squares[i].onclick=function_click;	
}

resetButton.onclick=reset;
homeButton.onclick=myfun;

}


function function_mode(){

			if (this.textContent === "Easy"){
				numSquares = 3;
				
			} else if(this.textContent==="Medium"){
				numSquares=6;
				
			} else numSquares = 9;
			reset();
		}	
	

function function_click(){
	
			var clickedColor = this.style.background;
             
			if(clickedColor === pickedColor){
				messageDisplay.textContent = "Correct!";

				
				window.open("resultpage.php?color="+pickedColor);
			} else {
				this.style.background ="transparent";
				messageDisplay.textContent = "Try Again";
			}
		}
	

function reset(){
	colors = generateRandomColors(numSquares);
	pickedColor = pickColor();
	messageDisplay.textContent = "";
	colorDisplay.textContent = pickedColor;

	for(var i = 0; i < squares.length; i++){
		if(colors[i]){
			squares[i].style.display = "block"
			squares[i].style.background = colors[i];
		} else {
			squares[i].style.display = "none";
		}
	}

}



function pickColor(){
	var random = Math.floor(Math.random() * colors.length);
	return colors[random];
}

function generateRandomColors(num){
	
	var arr = []
	
	for(var i = 0; i < num; i++){
		
		arr.push(randomColor())
	}
	
	return arr;
}

function randomColor(){
	
	var r = Math.floor(Math.random() * 256);
	
	var g = Math.floor(Math.random() * 256);
	
	var b = Math.floor(Math.random() * 256);
	return "rgb(" + r + ", " + g + ", " + b + ")";
}

function myfun(){
location.replace("index.php")
}
