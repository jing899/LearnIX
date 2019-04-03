/*
Learnix
	
filename: main.js

Authors:	Rachael Bogdany
			Jon Healy
			Shoujing Wu
			Lowell Pence
	
*/

function validateQuiz1() {
	//Quiz questions 1-5
	q1 = document.forms["quiz1"]["upOne"].value;
	q2 = document.forms["quiz1"]["curPath"].value;
	q3 = document.forms["quiz1"]["home"].value;
	q4 = document.forms["quiz1"]["list"].value;
	q5 = document.forms["quiz1"]["root"].value;
	
	//The folowing if statements check if the input is incorrect. If so, it highlights the correct choice on the doc
	if(q1 != "correct") {
		document.getElementsByTagName("label")[2].style.backgroundColor = "#7cfc00";
		document.getElementById("q1").style.marginRight = "89%"; //Sets the margin of the question title 
		document.getElementById("q1").style.backgroundColor = "#CC0202"; //Set the question title to red if answer is incorrect
		document.getElementsByClassName("textBox")[0].style.float = "right"; //Floats the text box to the right
		document.getElementsByClassName("textBox")[0].style.paddingRight = "40%";
		document.getElementsByClassName("textBox")[0].children[0].style.visibility = "visible"; //Sets the text box visibie
	}
	
	if(q2 != "correct") {
		document.getElementsByTagName("label")[4].style.backgroundColor = "#7cfc00";
		document.getElementById("q2").style.marginRight = "89%";
		document.getElementById("q2").style.backgroundColor = "#CC0202";
		document.getElementsByClassName("textBox")[1].style.float = "right";
		document.getElementsByClassName("textBox")[1].style.paddingRight = "40%";
		document.getElementsByClassName("textBox")[1].children[0].style.visibility = "visible";
	}
	
	if(q3 != "correct") {
		document.getElementsByTagName("label")[11].style.backgroundColor = "#7cfc00";
		document.getElementById("q3").style.marginRight = "89%";
		document.getElementById("q3").style.backgroundColor = "#CC0202";
		document.getElementsByClassName("textBox")[2].style.float = "right";
		document.getElementsByClassName("textBox")[2].style.paddingRight = "40%";
		document.getElementsByClassName("textBox")[2].children[0].style.visibility = "visible";
	}
	
	if(q4 != "correct") {
		document.getElementsByTagName("label")[13].style.backgroundColor = "#7cfc00";
		document.getElementById("q4").style.marginRight = "89%";
		document.getElementById("q4").style.backgroundColor = "#CC0202";
		document.getElementsByClassName("textBox")[3].style.float = "right";
		document.getElementsByClassName("textBox")[3].style.paddingRight = "40%";
		document.getElementsByClassName("textBox")[3].children[0].style.visibility = "visible";
	}
	
	if(q5 != "correct") {
		document.getElementsByTagName("label")[18].style.backgroundColor = "#7cfc00";
		document.getElementById("q5").style.marginRight = "89%";
		document.getElementById("q5").style.backgroundColor = "#CC0202";
		document.getElementsByClassName("textBox")[4].style.float = "right";
		document.getElementsByClassName("textBox")[4].style.paddingRight = "40%";
		document.getElementsByClassName("textBox")[4].children[0].style.visibility = "visible";
	}
	
	return false;
}
