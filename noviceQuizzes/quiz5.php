<!-- LEARNIX 
	
Filename:	quiz5.php
Authors: 	Rachael Bogdany
			Jon Healy
			Lowell Pence
			Shoujing Wu 
-->

<?php
	//include the header
	$path = '../';
	$page = 'Novice Command Line Commands Quiz';
	include $path.'assets/inc/header.php';
?>
<div class = "container">
	<form onsubmit="return false;" name="quiz" action="#" method="get">

		<h1 class="qh1">Novice Command Line Commands Quiz</h1>
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
		<p class = "qP">What is the correct command syntax to list files by file size?</p>
		
		<input type="radio" name ="question1" value = "q1a1" id="q1a1"/> <label for="q1a1">list -size</label><br>
		<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">listsize</label><br>	
		<input type="radio" name ="question1" value = "correct" id="q1a4"/> <label for="q1a4">ls -s</label><br>
		<input type="radio" name ="question1" value = "q1a3" id="q1a3"/> <label for="q1a3">listall -s</label><br>
		<p class="helpText">Please review the "ls" man page</p>
	</div>

	<div id = "second">	
		<h2 class="qh2" id="q2">Question 2</h2>
		<p class="qP">What is the command to get help with command syntax?</p>
		
		<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">man</label><br>
		<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">helpme</label><br>
		<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">gethelp</label><br>
		<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">command -help</label><br>
		<p class="helpText">Remember, the man command gives you syntax help and examples with shell commands</p>
	</div>

	<div id = "third">
		<h2 class="qh2" id="q3">Question 3</h2>
		<p class="qP">What is the command to clear the terminal?</p>
		
		<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">exit</label><br>
		<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">clearall</label><br>
		<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">newpage</label><br>
		<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">clear</label><br>
		<p class="helpText">Remember, the clear commandclears the terminal</p>
	</div>

	<div id = "fourth">
		<h2 class="qh2" id="q4">Question 4</h2>
		<p class="qP">What is the command syntax to list files in reverse order?</p>
		
		<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">list reverse</label><br>
		<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">ls -r</label><br>
		<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">reverse</label><br>
		<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">list -r</label><br>
		<p class="helpText">Please review the man page for the "ls" command</p>
	</div>

	<div id = "fifth">
		<h2 class="qh2" id="q5">Question 5</h2>
		<p class="qP">What is the command to sign a user out of a terminal program?</p>
		
		<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">exit</label><br>
		<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">leave</label><br>
		<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">logout</label><br>
		<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">signout</label><br>
		<p class="helpText">Remember, the logout command is used to sign the user out of terminal programs</p>
	</div>
		<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
	</form>
</div>

<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>
