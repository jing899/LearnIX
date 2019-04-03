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
	q3 = document.forms["quiz1"]["create"].value;
	q4 = document.forms["quiz1"]["list"].value;
	q5 = document.forms["quiz1"]["remove"].value;
	
	//The folowing if statements check if the input is incorrect. If so, it highlights the correct choice on the doc
	if(q1 != "correct") {
		document.getElementsByTagName("label")[2].style.backgroundColor = "#7cfc00";
		document.getElementById("q1").style.backgroundColor = "#CC0202";
	}
	
	if(q2 != "correct") {
		document.getElementsByTagName("label")[4].style.backgroundColor = "#7cfc00";
		document.getElementById("q2").style.backgroundColor = "#CC0202";
	}
	
	if(q3 != "correct") {
		document.getElementsByTagName("label")[11].style.backgroundColor = "#7cfc00";
		document.getElementById("q3").style.backgroundColor = "#CC0202";
	}
	
	if(q4 != "correct") {
		document.getElementsByTagName("label")[13].style.backgroundColor = "#7cfc00";
		document.getElementById("q4").style.backgroundColor = "#CC0202";
	}
	
	if(q5 != "correct") {
		document.getElementsByTagName("label")[18].style.backgroundColor = "#7cfc00";
		document.getElementById("q5").style.backgroundColor = "#CC0202";
	}
	
	return false;
}
