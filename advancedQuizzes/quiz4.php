<!-- LEARNIX 
	
Filename:	quiz4.php
Authors: 	Rachael Bogdany
			Jon Healy
			Lowell Pence
			Shoujing Wu 
-->

<?php
	//include the header
	$path = '../';
	$page = 'Expert Commands Quiz';
	include $path.'assets/inc/header.php';
?>

<div class = "container">
	<form onsubmit = "return false;" name = "quiz" action="#" method = "get">

		<div><h2 id="scorebaord"></h2></div>
		<h1 class="qh1">Advanced Commands Quiz</h1>
		<!--
			The naming convention for quiz question id's is as follows: Question # Answer #
			For example Question 2 Answer 4's id would be: "q2a4"
			
			The logic behind this is that it matches the value so when java script is validating...
			it can determine which choices were choosen correctly and incorrectly and display this to the user.
			More can be seen on this in the validateQuiz function in the file assets/script/main.js
			
			The text boxes display a message to the user on what they got wrong and how they can lookup the correct answer
		-->	
		<div id = "first">
			<h2 class="qh2" id="q1">Question 1</h2>
			<p class = "qP">What is the curl tool used for?</p>
			
			<input type="radio" name ="question1" value = "q1a1" id="q1a1"/> <label for="q1a1">It's used in NAT translation</label><br>
			<div class="redX" id="x1"><img src="../assets/img/redX.png" alt="Red X"></div>
			<div class="checks" id="check1"><img src="../assets/img/check.png" alt="Check Mark"></div>
			<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">Encrypts data sent to tbe server</label><br>
			<input type="radio" name ="question1" value = "correct" id="q1a4"/> <label for="q1a4">CLI tool for making http requests</label><br>			
			<input type="radio" name ="question1" value = "q1a3" id="q1a3"/> <label for="q1a3">Concats file contents</label><br>
			<p class="helpText">Curl is a command line tool for making requests over HTTP(s)</p>
		</div>

		<div id = "second">
			<h2 class="qh2" id="q2">Question 2</h2>
			<p class="qP">Which is the command to terminate a proccess?</p>
			
			<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">Kill {proccess/pid}</label><br>
			<div class="redX" id="x2"><img src="../assets/img/redX.png" alt="Red X"></div>
			<div class="checks" id="check2"><img src="../assets/img/check.png" alt="Check Mark"></div>
			<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">Terminate {process/pid}</label><br>
			<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">Stop {process/pid}</label><br>
			<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">Terminate_process {process/pid}</label><br>
			<p class="helpText">Please visit the "kill" man page for more information and correct syntax</p>
		</div>

		<div id = "third">
			<h2 class="qh2" id="q3">Question 3</h2>
			<p class="qP">What is the function of the diff command?</p>
			
			<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">Shows permission differences</label><br>
			<div class="redX" id="x3"><img src="../assets/img/redX.png" alt="Red X"></div>
			<div class="checks" id="check3"><img src="../assets/img/check.png" alt="Check Mark"></div>
			<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">Shows the different users</label><br>
			<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">Shows differences in file sizes</label><br>
			<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">Gives line by line differences</label><br>
			<p class="helpText">Please visit the "diff" man page for more information and correct syntax</p>
		</div>

		<div id = "fourth">
			<h2 class="qh2" id="q4">Question 4</h2>
			<p class="qP">What is egrep?</p>
			
			<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">Updated version of grep</label><br>
			<div class="redX" id="x4"><img src="../assets/img/redX.png" alt="Red X"></div>
			<div class="checks" id="check4"><img src="../assets/img/check.png" alt="Check Mark"></div>
			<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">An extended version of Grep</label><br>
			<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">A depreicated version of grep</label><br>
			<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">A tool used in exponential functions</label><br>
			<p class="helpText">Egrep is an extended version of grep that matches regular expressions</p>
		</div>

		<div id = "fifth">
			<h2 class="qh2" id="q5">Question 5</h2>
			<p class="qP">Which are examples of wildcards?</p>
	
			<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">Var x, var y, var z</label><br>
			<div class="redX" id="x5"><img src="../assets/img/redX.png" alt="Red X"></div>
			<div class="checks" id="check5"><img src="../assets/img/check.png" alt="Check Mark"></div>
			<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">Function1(), function2(), function3()</label><br>
			<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">!, ^, %, $</label><br>
			<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">(1), (2), (3)</label><br>
			<p class="helpText">Examples of wildcards are !, ^, %, $. Look at the RegEx documentation for more information</p>
		</div>

		<div class="buttonDiv">
			<input type="submit" name="Submit" onclick="validateQuiz()"  value="Send"/>
			<input type="button" name="Reload" onclick="document.location.reload(true); window.scrollTo(0,0);" value="Retry Quiz"/>
		</div>
	</form>
</div>
<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>
