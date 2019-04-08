<!-- LEARNIX 
	
Filename:	quiz1.php
Authors: 	Rachael Bogdany
			Jon Healy
			Lowell Pence
			Shoujing Wu 
-->

<?php
	//include the header
	$path = '../';
	$page = 'Intermediate System Info Quiz';
	include $path.'assets/inc/header.php';
?>

<form onsubmit = "return false;" name = "quiz" action="#" method = "get">

	<h1 class="qh1">Intermediate System Info Commands Quiz</h1>
	<!--
		The naming convention for quiz question id's is as follows: Question # Answer #
		For example Question 2 Answer 4's id would be: "q2a4"
		
		The logic behind this is that it matches the value so when java script is validating...
		it can determine which choices were choosen correctly and incorrectly and display this to the user.
		More can be seen on this in the validateQuiz function in the file assets/script/main.js
		
		The text boxes display a message to the user on what they got wrong and how they can lookup the correct answer
	-->	
	<h2 class="qh2" id="q1">Question 1</h2>
	<p class = "qP">What system command tells you the current date?</p>
	
	<input type="radio" name ="question1" value = "q1a1" id="q1a1"/> <label for="q1a1">currentDate</label><br>
	<p class="helpText">Remember, the system command "date" tells you the current date information</p>
	<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">date -current</label><br>	
	<input type="radio" name ="question1" value = "correct" id="q1a3"/> <label for="q1a3">date</label><br>
	<input type="radio" name ="question1" value = "q1a4" id="q1a4"/> <label for="q1a4">getDate</label><br>
	
	<h2 class="qh2" id="q2">Question 2</h2>
	<p class="qP">What is the system command to find out how long a program has been runing?</p>
	
	<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">time</label><br>
	<p class="helpText">Remmeber, the system command time says how long a program has been running</p>
	<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">getTime</label><br>
	<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">tellTime</label><br>
	<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">getTime -all</label><br>
	
	<h2 class="qh2" id="q3">Question 3</h2>
	<p class="qP">What is the system command that outputs an ASCII calendar?</p>
	
	<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">getCal</label><br>
	<p class="helpText">Please review the "cal" man pages for proper command syntax</p>
	<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">show -cal</label><br>
	<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">getCal -ASCII</label><br>
	<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">cal</label><br>
	
	<h2 class="qh2" id="q4">Question 4</h2>
	<p class="qP">What is the system command to get disk space?</p>
	
	<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">getDiskInfo</label><br>
	<p class="helpText">Please review the "df" man pages for proper command syntax</p>
	<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">df</label><br>
	<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">getSpace</label><br>
	<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">show -disk</label><br>
	
	<h2 class="qh2" id="q5">Question 5</h2>
	<p class="qP">What is the system command to tell how long the host has been up?</p>
	
	<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">life -host</label><br>
	<p class="helpText">Please review the "uptime" man pages for proper command syntax</p>
	<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">lifetime</label><br>
	<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">uptime</label><br>
	<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">list -uptime</label><br>
	
	<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
</form>

<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>