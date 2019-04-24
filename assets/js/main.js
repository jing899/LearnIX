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
	var q1 = document.forms["quiz"]["question1"].value;
	var q2 = document.forms["quiz"]["question2"].value;
	var q3 = document.forms["quiz"]["question3"].value;
	var q4 = document.forms["quiz"]["question4"].value;
	var q5 = document.forms["quiz"]["question5"].value;
	var correct = 0; //The number of questions the user got correct
	
	//The following if statements check if the input is incorrect
	if(q1 != "correct") {
		document.forms["quiz"].getElementsByTagName("label")[2].style.backgroundColor = "#7cfc00"; //Highlight correct option
		document.getElementsByClassName("helpText")[0].style.visibility = "visible"; //Set help text visible
		document.getElementById("x1").style.visibility = "visible"; //Set red x visible
		document.getElementsByClassName("helpText")[0].style.backgroundColor = "#7cfc00"; //Highlight help text background
	}else{ //Question was right, show check mark and add 1 to count
		document.getElementById("check1").style.visibility = "visible"; //Set check mark visible
		correct++; //Adds 1 correct to score count
	}
	
	
	if(q2 != "correct") {
		document.forms["quiz"].getElementsByTagName("label")[4].style.backgroundColor = "#7cfc00";
		document.getElementsByClassName("helpText")[1].style.visibility = "visible";
		document.getElementById("x2").style.visibility = "visible";
		document.getElementsByClassName("helpText")[1].style.backgroundColor = "#7cfc00";
	}else{
		document.getElementById("check2").style.visibility = "visible";
		correct++;
	}
	
	if(q3 != "correct") {
		document.forms["quiz"].getElementsByTagName("label")[11].style.backgroundColor = "#7cfc00"; 
		document.getElementsByClassName("helpText")[2].style.visibility = "visible";
		document.getElementById("x3").style.visibility = "visible";
		document.getElementsByClassName("helpText")[2].style.backgroundColor = "#7cfc00";
	}else{
		document.getElementById("check3").style.visibility = "visible";
		correct++;
	}
	
	if(q4 != "correct") {
		document.forms["quiz"].getElementsByTagName("label")[13].style.backgroundColor = "#7cfc00";
		document.getElementsByClassName("helpText")[3].style.visibility = "visible";
		document.getElementById("x4").style.visibility = "visible";
		document.getElementsByClassName("helpText")[3].style.backgroundColor = "#7cfc00";
	}else{
		document.getElementById("check4").style.visibility = "visible";
		correct++;
	}
	
	if(q5 != "correct") {
		document.forms["quiz"].getElementsByTagName("label")[18].style.backgroundColor = "#7cfc00"; 
		document.getElementsByClassName("helpText")[4].style.visibility = "visible";
		document.getElementById("x5").style.visibility = "visible";
		document.getElementsByClassName("helpText")[4].style.backgroundColor = "#7cfc00";
	}else{
		document.getElementById("check5").style.visibility = "visible";
		correct++;
	}
	
	var score = "Your score is " + correct + "/5"; //A variable describing the users score
	document.getElementById("scorebaord").innerHTML = score; //Tell the user their score in the scoreboard
	window.scrollTo(0,0); //Snap the window to top of page
	
	return false; //Prevent page reloading/submission
}

/*
	This function validates the permissions the user inputs on the permissions tutorial
*/
function validatePermissions(){
	var items = ['---','--x','-w-','-wx','r--','r-x','rw-','rwx'];
	var descriptions = ['no permission', 'execute permission', 'write permission', 'execute and write permissions', 'read permission', 'read and execute permissions', 'read and write permissions', 'read, write, and execute permission'];
	var str = document.getElementById('perm').value;
	if(str != ''){
		if(str.match("^[0-9]*$")){
			var num = parseInt(str);
			document.getElementById('error').style.display = 'none';
			if(num < 777){
				for(i = 0; i < str.length; i++){
					if(str[i] < 0 || str[i] > 7){
						document.getElementById('error').innerHTML = 'Can only enter numbers between 0 and 7';
						document.getElementById('error').style.display = 'block';
						return;
					}
				}
				var output = '';
				for(i = 0; i < str.length; i++){
					output += items[str[i]];
				}
				document.getElementById('output').innerHTML = output + '<br>' + 'You gave the Owner ' + descriptions[str[0]] + ', the Group ' + descriptions[str[1]] + ', and Others ' + descriptions[str[2]] + '.';
			}
			else{
				document.getElementById('error').innerHTML = 'Can only enter number less than 777';
				document.getElementById('error').style.display = 'block';
				return;
			}
		}
		else{
			document.getElementById('error').innerHTML = 'Can only enter numbers.';
			document.getElementById('error').style.display = 'block';
		}
	}
}


/*
    JS for opening and closing mobile nav
*/       
function expandHeader() {
	var isChecked = document.getElementById("toggle").checked;
	
    // close nav code:
    if (!isChecked) {
        document.getElementById("header").style.position = "static";
        document.getElementById("header").style.height = "100px";
        // change icon
        document.getElementById("button").innerHTML = "&#9776;";
        // animate button sliding
        document.getElementById("button").className = "button-deactivate";
    }
    
    // open nav code:
    else {
        // 
        document.getElementById("header").style.position = "absolute";
        document.getElementById("header").style.height = "100%";
        // change icon
        document.getElementById("button").innerHTML = "&#10005;";
        // animate button sliding
        document.getElementById("button").className = "button-activate";
    }
}

/*
	JS for validating tutorial sidebar questions
*/
function validate_tuto(){
    var ans = document.forms["in_quiz"]["qt1"].value;

    if(ans){
        document.getElementById('result').innerHTML = 'The answer is ' + ans;
    }else{
        document.getElementById('result').innerHTML = 'Please select one';
    }
}

function validate_tuto2(){
    var ans2 = document.forms["in_quiz2"]["qt2"].value;

    if(ans2){
        document.getElementById('result2').innerHTML = 'The answer is ' + ans2;
    }else{
        document.getElementById('result2').innerHTML = 'Please select one';
    }
}

function validate_tuto3(){
    var ans3 = document.forms["in_quiz3"]["qt3"].value;

    if(ans3){
        document.getElementById('result3').innerHTML = 'The answer is ' + ans3;
    }else{
        document.getElementById('result3').innerHTML = 'Please select one';
    }
}

function validate_tuto4(){
    var ans4 = document.forms["in_quiz4"]["qt4"].value;

    if(ans4){
        document.getElementById('result4').innerHTML = 'The answer is ' + ans3;
    }else{
        document.getElementById('result4').innerHTML = 'Please select one';
    }
}
