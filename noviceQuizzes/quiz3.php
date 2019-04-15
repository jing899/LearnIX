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
	$page = 'Novice Permissions Quiz';
	include $path.'assets/inc/header.php';
?>

<div class = "container">
	<form onsubmit="return false;" name="quiz" action="#" method="get">

		<h1 class="qh1">Novice Permissions Quiz</h1>
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
			<p class = "qP">What is the correct command syntax to change a file called "imports" permissions to "rwx-rw-x"?</p>
			
			<input type="radio" name ="question1" value = "q1a1" id="q1a1"/> <label for="q1a1">chmod imports 551</label><br>
			<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">perm imports rwx-rw-x</label><br>	
			<input type="radio" name ="question1" value = "correct" id="q1a3"/> <label for="q1a3">chmod 761 imports</label><br>
			<input type="radio" name ="question1" value = "q1a4" id="q1a4"/> <label for="q1a4">perms -default imports</label><br>
			<p class="helpText">Please review the "chmod" man pages for proper command syntax </p>
		</div>
		
		<div id = "second">
			<h2 class="qh2" id="q2">Question 2</h2>
			<p class="qP">What is the correct numeric value for a group with write and execute permissions?</p>
			
			<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">3</label><br>
			<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">5</label><br>
			<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">1</label><br>
			<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">2</label><br>
			<p class="helpText">Remember, write permissions is 2 and execute is 1. Therefore write + execute = 3</p>
		</div>

		<div id = "third">
			<h2 class="qh2" id="q3">Question 3</h2>
			<p class="qP">What are the different groups when refering to file permissions?</p>
			
			<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">Owner, user, visitor</label><br>
			<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">root, user, other</label><br>
			<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">root, owner, user</label><br>
			<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">Owner, group, Other</label><br>
			<p class="helpText">Remember, file permissions are determined by the group you belong in. Either owner, group or other</p>
		</div>

		<div id = "fourth">
			<h2 class="qh2" id="q4">Question 4</h2>
			<p class="qP">What is the correct numeric value for a group with read and write permissions?</p>
			
			<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">5</label><br>
			<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">6</label><br>
			<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">3</label><br>
			<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">7</label><br>
			<p class="helpText">Remember, write permissions is 2 and execute is 4. Therefore read + write = 6</p>
		</div>

		<div id = "fifth">
			<h2 class="qh2" id="q5">Question 5</h2>
			<p class="qP">What is the correct numeric value for a group having no permissions on a file?</p>
			
			<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">1</label><br>
			<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">5</label><br>
			<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">0</label><br>
			<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">7</label><br>
			<p class="helpText">Remember, groups with no permissions for a file or folder have a numeric value of 0 or "-"</p>
		</div>
		
		<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
	</form>
</div>

<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>
