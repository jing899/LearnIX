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
	$page = 'Expert Programs Quiz';
	include $path.'assets/inc/header.php';
?>

<div class = "container">
	<form onsubmit = "return false;" name = "quiz" action="#" method = "get">

		<h1 class="qh1">Expert Programs Quiz</h1>
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
			<p class = "qP">Which program is used for version control?</p>
			
			<input type="radio" name ="question1" value = "q1a1" id="q1a1"/> <label for="q1a1">chrome</label><br>
			<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">filezilla</label><br>	
			<input type="radio" name ="question1" value = "correct" id="q1a4"/> <label for="q1a4">Git</label><br>
			<input type="radio" name ="question1" value = "q1a3" id="q1a3"/> <label for="q1a3">ssh</label><br>
			<p class="helpText">Remember, Git is used for file version control</p>
		</div>

		<div id = "Second">
			<h2 class="qh2" id="q2">Question 2</h2>
			<p class="qP">What is the function of SCP?</p>
			
			<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">it securly copies files to a remote device</label><br>
			<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">it has no important function</label><br>
			<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">it securly destorys files</label><br>
			<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">it is a video sharing program</label><br>
			<p class="helpText">Remember, scp is the protocol to securely send files</p>
		</div>

		<div id = "third">
			<h2 class="qh2" id="q3">Question 3</h2>
			<p class="qP">Which program utilizes ssh?</p>
			
			<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">firefox</label><br>
			<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">vmware</label><br>
			<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">powershell</label><br>
			<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">putty</label><br>
			<p class="helpText">Remember, putty uses ssh and other tools to connect remotely to devices</p>
		</div>

		<div id = "fourth">
			<h2 class="qh2" id="q4">Question 4</h2>
			<p class="qP">What is the command to create a git repository?</p>
			
			<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">gitCreate -d</label><br>
			<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">git init</label><br>
			<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">createGit</label><br>
			<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">create repository</label><br>
			<p class="helpText">Please review the git documentation!</p>
		</div>	
		
		<div id = "fifth">
			<h2 class="qh2" id="q5">Question 5</h2>
			<p class="qP">What is the command to commit a file to a git repository?</p>
			
			<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">git push</label><br>
			<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">git send</label><br>
			<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">git commit</label><br>
			<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">sendall</label><br>
			<p class="helpText">Please review the git documentation!</p>
		</div>
		
		<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
	</form>
</div>

<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>
