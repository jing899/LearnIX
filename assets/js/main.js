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
		document.getElementsByTagName("label")[3].style.backgroundColor = "#7cfc00";
		document.getElementById("q1").style.backgroundColor = "#CC0202"; 
		document.getElementsByClassName("helpText")[0].style.visibility = "visible";
	}
	
	
	if(q2 != "correct") {
		document.getElementsByTagName("label")[5].style.backgroundColor = "#7cfc00";
		document.getElementById("q2").style.backgroundColor = "#CC0202";
		document.getElementsByClassName("helpText")[1].style.visibility = "visible";
	}
	
	if(q3 != "correct") {
		document.getElementsByTagName("label")[12].style.backgroundColor = "#7cfc00";
		document.getElementById("q3").style.backgroundColor = "#CC0202";
		document.getElementsByClassName("helpText")[2].style.visibility = "visible";
	}
	
	if(q4 != "correct") {
		document.getElementsByTagName("label")[14].style.backgroundColor = "#7cfc00";
		document.getElementById("q4").style.backgroundColor = "#CC0202";
		document.getElementsByClassName("helpText")[3].style.visibility = "visible";
	}
	
	if(q5 != "correct") {
		document.getElementsByTagName("label")[19].style.backgroundColor = "#7cfc00";
		document.getElementById("q5").style.backgroundColor = "#CC0202";
		document.getElementsByClassName("helpText")[4].style.visibility = "visible";
	}
	
	return false;
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
        document.getElementById("header").style.height = "10vh";
        document.getElementById("button").innerHTML = "&#9776;";
        document.getElementById("button").className = "button-deactivate";
    }
    // open nav code:
    else {
        document.getElementById("header").style.height = "100vh";
        document.getElementById("button").innerHTML = "&#10005;";
        document.getElementById("button").className = "button-activate";
    }
}