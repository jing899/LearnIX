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
	
	//Test to see if question was skipped
	if(q1 == "") {
		alert("Question 1 cannot be blank!");
		return false;
	}else if(q2 == "") {
		alert("Question 2 cannot be blank!");
		return false;
	}else if(q3 == "") {
		alert("Question 3 cannot be blank!");
		return false;
	}else if(q4 == "") {
		alert("Question 4 cannot be blank!");
		return false;
	}else if(q5 == "") {
		alert("Question 5 cannot be blank!");
		return false;
	}
	
	//The folowing if statements check if the input is incorrect. If so, it highlights the correct choice on the doc
	if(q1 != "correct") {
		document.getElementsByTagName("label")[2].style.backgroundColor = " #7cfc00";
	}
	
	if(q2 != "correct") {
		document.getElementsByTagName("label")[4].style.backgroundColor = "#7cfc00";
	}
	
	if(q3 != "correct") {
		document.getElementsByTagName("label")[11].style.backgroundColor = "#7cfc00";
	}
	
	if(q4 != "correct") {
		document.getElementsByTagName("label")[13].style.backgroundColor = "#7cfc00";
	}
	
	if(q5 != "correct") {
		document.getElementsByTagName("label")[18].style.backgroundColor = "#7cfc00";
	}
	
	return false;
}