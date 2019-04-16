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
	$page = 'Expert Users Quiz';
	include $path.'assets/inc/header.php';
?>
<div class = "container">
	<form onsubmit = "return false;" name = "quiz" action="#" method = "get">

		<h1 class="qh1">Expert Users Quiz</h1>
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
			<p class = "qP">What is the command to show who is currently logged in?</p>
			
			<input type="radio" name ="question1" value = "q1a1" id="q1a1"/> <label for="q1a1">logon</label><br>
			<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">log</label><br>
			<input type="radio" name ="question1" value = "correct" id="q1a4"/> <label for="q1a4">who</label><br>			
			<input type="radio" name ="question1" value = "q1a3" id="q1a3"/> <label for="q1a3">currentUsers</label><br>
			<p class="helpText">Remember, the command "who" tells you who is currently logged onto the machine</p>
		</div>

		<div id = "second">
			<h2 class="qh2" id="q2">Question 2</h2>
			<p class="qP">Which is the command to list the grouos the user belongs to?</p>
			
			<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">groups</label><br>
			<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">list -groups</label><br>
			<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">listGroups()</label><br>
			<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">showGroups</label><br>
			<p class="helpText">The command groups lists the groups the user belongs to</p>
		</div>

		<div id = "third">
			<h2 class="qh2" id="q3">Question 3</h2>
			<p class="qP">What is the command to execute a command as root?</p>
			
			<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">su root</label><br>
			<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">useRoot</label><br>
			<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">super</label><br>
			<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">sudo</label><br>
			<p class="helpText">The command sudo is used to execute a command as root</p>
		</div>

		<div id = "fourth">
			<h2 class="qh2" id="q4">Question 4</h2>
			<p class="qP">What is the command to log into the shell as root</p>
			
			<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">useRoot</label><br>
			<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">su root</label><br>
			<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">sudo</label><br>
			<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">switch -root</label><br>
			<p class="helpText">The command su root is used to log into the shell as root</p>
		</div>

		<div id = "fifth">
			<h2 class="qh2" id="q5">Question 5</h2>
			<p class="qP">Which command changes your password?</p>
			
			<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">change -password</label><br>
			<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">password</label><br>
			<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">passwd</label><br>
			<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">reset passwd</label><br>
			<p class="helpText">The command passwd is used to reset the users password</p>
		</div>
		
		<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
	</form>
</div>

<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>
