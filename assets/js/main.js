/*
Learnix
	
filename: main.js
Authors:	Rachael Bogdany
			Jon Healy
			Shoujing Wu
			Lowell Pence
	
*/

/*
	This function is meant to run autonomously, each quiz will be validated by this code
*/

function validateQuiz() {
	//Quiz questions 1-5
	q1 = document.forms["quiz"]["question1"].value;
	q2 = document.forms["quiz"]["question2"].value;
	q3 = document.forms["quiz"]["question3"].value;
	q4 = document.forms["quiz"]["question4"].value;
	q5 = document.forms["quiz"]["question5"].value;
	
	//The folowing if statements check if the input is incorrect. If so, it highlights the correct choice on the doc
	if(q1 != "correct") {
		document.getElementsByTagName("label")[2].style.backgroundColor = "#7cfc00";
		document.getElementById("q1").style.marginRight = "81%"; 
		document.getElementById("q1").style.backgroundColor = "#CC0202"; 
		document.getElementsByClassName("helpText")[0].style.visibility = "visible";
	}
	
	
	if(q2 != "correct") {
		document.getElementsByTagName("label")[4].style.backgroundColor = "#7cfc00";
		document.getElementById("q2").style.marginRight = "81%";
		document.getElementById("q2").style.backgroundColor = "#CC0202";
		document.getElementsByClassName("helpText")[1].style.visibility = "visible";
	}
	
	if(q3 != "correct") {
		document.getElementsByTagName("label")[11].style.backgroundColor = "#7cfc00";
		document.getElementById("q3").style.marginRight = "81%";
		document.getElementById("q3").style.backgroundColor = "#CC0202";
		document.getElementsByClassName("helpText")[2].style.visibility = "visible";
	}
	
	if(q4 != "correct") {
		document.getElementsByTagName("label")[13].style.backgroundColor = "#7cfc00";
		document.getElementById("q4").style.marginRight = "81%";
		document.getElementById("q4").style.backgroundColor = "#CC0202";
		document.getElementsByClassName("helpText")[3].style.visibility = "visible";
	}
	
	if(q5 != "correct") {
		document.getElementsByTagName("label")[18].style.backgroundColor = "#7cfc00";
		document.getElementById("q5").style.marginRight = "81%";
		document.getElementById("q5").style.backgroundColor = "#CC0202";
		document.getElementsByClassName("helpText")[4].style.visibility = "visible";
	}
	
	return false;
}