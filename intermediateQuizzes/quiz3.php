<!-- LEARNIX 
	
Filename:	quiz3.php
Authors: 	Rachael Bogdany
			Jon Healy
			Lowell Pence
			Shoujing Wu 
-->

<?php
	//include the header
	$path = '../';
	$page = 'Intermediate Processes Quiz';
	include $path.'assets/inc/header.php';
?>

<div class = "container">
	<form onsubmit = "return false;" name = "quiz" action="#" method = "get">

		<h1 class="qh1">Intermediate Processes Quiz</h1>
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
			<p class = "qP">What is the definition of a process?</p>
			
			<input type="radio" name ="question1" value = "q1a1" id="q1a1"/> <label for="q1a1">System Software</label><br>
			<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">Something running in the background</label><br>	
			<input type="radio" name ="question1" value = "correct" id="q1a3"/> <label for="q1a3">An executing program identified by a unique PID (process identifier)</label><br>
			<input type="radio" name ="question1" value = "q1a4" id="q1a4"/> <label for="q1a4">Any executable application</label><br>
			<p class="helpText">Please review the definition of a process</p>
		</div>

		<div id = "second">
			<h2 class="qh2" id="q2">Question 2</h2>
			<p class="qP">What is the correct command syntax to see every process running?</p>
			
			<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">ps -a</label><br>
			<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">getAll -processes</label><br>
			<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">showAll -processes</label><br>
			<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">processes -running</label><br>
			<p class="helpText">please review the "ps" man page for the correct command syntax</p>
		</div>

		<div id = "third">
			<h2 class="qh2" id="q3">Question 3</h2>
			<p class="qP">What is the correct command syntax to see information about every process running?</p>
			
			
			<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">ps -info</label><br>
			<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">getAll -pInfo</label><br>
			<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">showAll -processesInfo</label><br>
			<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">ps -ag</label><br>
			<p class="helpText">please review the "ps" man page for the correct command syntax</p>
		</div>

		<div id = "fourth">
			<h2 class="qh2" id="q4">Question 4</h2>
			<p class="qP">What is the command to see current processes and other system info running in real time?</p>
			
			<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">sysinfo</label><br>
			<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">top</label><br>
			<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">show -sysinfo</label><br>
			<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">Current -proccesses</label><br>
			<p class="helpText">The correct command is "Top"</p>
		</div>

		<div id = "fifth">
			<h2 class="qh2" id="q5">Question 5</h2>
			<p class="qP">What is the correct command to stop all processes except the terminal?</p>
			
			<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">kill -all</label><br>
			<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">stop -all</label><br>
			<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">kill 0</label><br>
			<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">kill -1</label><br>
			<p class="helpText">The correct command is "kill 0"</p>
		</div>
		
		<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
	</form>
</div>
<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>