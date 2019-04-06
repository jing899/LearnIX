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
	$page = 'Novice Navigation Quiz';
	include $path.'assets/inc/header.php';
?>

<form name = "quiz" action="#" method = "get">

	<h1 class="qh1">Novice Navigation Quiz</h1>
	<!--
		The naming convention for quiz question id's is as follows: Question # Answer #
		For example Question 2 Answer 4's id would be: "q2a4"
		
		The logic behind this is that it matches the value so when java script is validating...
		it can determine which choices were choosen correctly and incorrectly and display this to the user.
		More can be seen on this in the validateQuiz function in the file assets/script/main.js
		
		The text boxes display a message to the user on what they got wrong and how they can lookup the correct answer
	-->	
	<h2 class="qh2" id="q1">Question 1</h2>
	<p class = "qP">What is the correct command syntax to navigate up one level?</p>
	
	<input type="radio" name ="question1" value = "q1a1" id="q1a1"/> <label for="q1a1">cd *</label><br>
	<p class="helpText">Please review the man pages for proper command syntax</p>
	<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">cd up</label><br>	
	<input type="radio" name ="question1" value = "correct" id="q1a3"/> <label for="q1a3">cd ..</label><br>
	<input type="radio" name ="question1" value = "q1a4" id="q1a4"/> <label for="q1a4">cd !</label><br>
	
	<h2 class="qh2" id="q2">Question 2</h2>
	<p class="qP">What is the correct command syntax to get the current working directory path?</p>
	
	<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">pwd</label><br>
	<p class="helpText">Please review the man pages for proper command syntax</p>
	<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">current -d</label><br>
	<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">list path</label><br>
	<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">current path</label><br>
	
	<h2 class="qh2" id="q3">Question 3</h2>
	<p class="qP">What is the correct command syntax to navigate to your home directory?</p>
	
	<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">cd home</label><br>
	<p class="helpText">Please review the man pages for proper command syntax</p>
	<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">cd toHome</label><br>
	<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">cd /</label><br>
	<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">cd ~</label><br>
	
	<h2 class="qh2" id="q4">Question 4</h2>
	<p class="qP">What is the command syntax to list all sub-directories in the current directory</p>
	
	<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">list dirs</label><br>
	<p class="helpText">Please review the man pages for proper command syntax</p>
	<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">list -d</label><br>
	<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">listall</label><br>
	<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">listall -d /.</label><br>
	
	<h2 class="qh2" id="q5">Question 5</h2>
	<p class="qP">What is the correct command syntax to navigate to the root directory</p>
	<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">cd root</label><br>
	
	<p class="helpText">Please review the man pages for proper command syntax</p>
	<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">cd *</label><br>
	<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">cd /</label><br>
	<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">cd ~</label><br>
	
	<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
</form>

<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>
