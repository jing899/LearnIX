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

		<h1 class="qh1">Expert Commands Quiz</h1>
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
			
			<input type="radio" name ="question1" value = "q1a1" id="q1a1"/> <label for="q1a1">it's used in NAT translation</label><br>
			<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">encrypts data being sent to a file sharing server</label><br>
			<input type="radio" name ="question1" value = "correct" id="q1a4"/> <label for="q1a4">a command line tool for making requests over HTTP(s)</label><br>			
			<input type="radio" name ="question1" value = "q1a3" id="q1a3"/> <label for="q1a3">concats file contents into one file</label><br>
			<p class="helpText">Curl is a command line tool for making requests over HTTP(s)</p>
		</div>

		<div id = "second">
			<h2 class="qh2" id="q2">Question 2</h2>
			<p class="qP">Which is the command to terminate a proccess?</p>
			
			<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">kill {proccess/pid}</label><br>
			<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">terminate {process/pid}</label><br>
			<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">stop {process/pid}</label><br>
			<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">terminate_process {process/pid}</label><br>
			<p class="helpText">Please visit the "kill" man page for more information and correct syntax</p>
		</div>

		<div id = "third">
			<h2 class="qh2" id="q3">Question 3</h2>
			<p class="qP">What is the function of the diff command?</p>
			
			<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">gives the permission differences between users</label><br>
			<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">gives the permission differences between groups</label><br>
			<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">gives the differences in file sizes in a directory</label><br>
			<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">gives line by line differences</label><br>
			<p class="helpText">Please visit the "diff" man page for more information and correct syntax</p>
		</div>

		<div id = "fourth">
			<h2 class="qh2" id="q4">Question 4</h2>
			<p class="qP">What is egrep?</p>
			
			<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">an updated version of grep</label><br>
			<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">an extended version of grep that matches regular expressions</label><br>
			<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">a depreicated version of grep</label><br>
			<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">a tool used in exponential functions</label><br>
			<p class="helpText">Egrep is an extended version of grep that matches regular expressions</p>
		</div>

		<div id = "fifth">
			<h2 class="qh2" id="q5">Question 5</h2>
			<p class="qP">Which are examples of wildcards?</p>
	
			<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">var x, var y, var z</label><br>
			<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">function1(), function2(), function3()</label><br>
			<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">!, ^, %, $</label><br>
			<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">(1), (2), (3)</label><br>
			<p class="helpText">Examples of wildcards are !, ^, %, $. Look at the RegEx documentation for more information</p>
		</div>

		<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
	</form>
</div>
<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>
