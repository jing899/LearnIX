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
	$page = 'Quiz 1';
	include $path.'assets/inc/header.php';
?>

<form name = "quiz1" action="#" method = "get">
	<h1>Novice Quiz</h1>
	<p>Test your knowledge on unix navigation and files with the following questions</p>
	
	<!--
		The nameing convention for quiz question id's is as follows: Question # Answer #
		For example Question 2 Answer 4's id would be: "q2a4"
		
		The logic behind this is that it matches the value so when java script is validating...
		it can determine which choices were choosen correctly and incorrectly and display this to the user.
		More can be seen on this in the validateQuiz1 function in the file assets/script/main.js
	-->	
	<h2 id="q1">Question 1</h2>
	<p>What is the correct command syntax to navigate up one level?</p>
	<input type="radio" name ="upOne" value = "q1a1" id="q1a1"/> <label for="q1a1">cd *</label><br>
	<input type="radio" name ="upOne" value = "q1a2" id="q1a2"/> <label for="q1a2">cd up</label><br>
	<div class="textBox">
		<p>Please review the man pages for proper command syntax</p>
	</div>	
	<input type="radio" name ="upOne" value = "correct" id="q1a3"/> <label for="q1a3">cd ..</label><br>
	<input type="radio" name ="upOne" value = "q1a4" id="q1a4"/> <label for="q1a4">cd !</label><br>
	
	<h2 id="q2">Question 2</h2>
	<p>What is the correct command syntax to get the current working directory path?</p>
	<input type="radio" name ="curPath" value = "correct" id="q2a1"/> <label for="q2a1">pwd</label><br>
	<input type="radio" name ="curPath" value = "q2a2" id="q2a2"/> <label for="q2a2">current -d</label><br>
	<div class="textBox">
		<p>Please review the man pages for proper command syntax</p>
	</div>
	<input type="radio" name ="curPath" value = "q2a3" id="q2a3"/> <label for="q2a3">list path</label><br>
	<input type="radio" name ="curPath" value = "q2a4" id="q2a4"/> <label for="q2a4">current path</label><br>
	
	<h2 id="q3">Question 3</h2>
	<p>What is the correct command syntax to navigate to your home directory?</p>
	<input type="radio" name ="home" value = "q3a1" id="q3a1"/> <label for="q3a1">cd home</label><br>
	<input type="radio" name ="home" value = "q3a2" id="q3a2"/> <label for="q3a2">cd toHome</label><br>
	<div class="textBox">
		<p>Please review the man pages for proper command syntax</p>
	</div>
	<input type="radio" name ="home" value = "q3a3" id="q3a3"/> <label for="q3a3">cd /</label><br>
	<input type="radio" name ="home" value = "correct" id="q3a4"/> <label for="q3a4">cd ~</label><br>
	
	<h2 id="q4">Question 4</h2>
	<p>What is the command syntax to list all sub-directories in the current directory</p>
	<input type="radio" name ="list" value = "q4a1" id="q4a1"/> <label for="q4a1">list dirs</label><br>
	<input type="radio" name ="list" value = "correct" id="q4a2"/> <label for="q4a2">list -d</label><br>
	<div class="textBox">
		<p>Please review the man pages for proper command syntax</p>
	</div>
	<input type="radio" name ="list" value = "q4a3" id="q4a3"/> <label for="q4a3">listall</label><br>
	<input type="radio" name ="list" value = "q4a4" id="q4a4"/> <label for="q4a4">listall -d /.</label><br>
	
	<h2 id="q5">Question 5</h2>
	<p>What is the correct command syntax to navigate to the root directory</p>
	<input type="radio" name ="root" value = "q5a1" id="q5a1"/> <label for="q5a1">cd root</label><br>
	<input type="radio" name ="root" value = "q5a2" id="q5a2"/> <label for="q5a2">cd *</label><br>
	<div class="textBox">
		<p>Please review the man pages for proper command syntax</p>
	</div>
	<input type="radio" name ="root" value = "correct" id="q5a3"/> <label for="q5a3">cd /</label><br>
	<input type="radio" name ="root" value = "q5a4" id="q5a4"/> <label for="q5a4">cd ~</label><br>
	
	<input type="submit"  name="Submit" onclick="validateQuiz1()"  value="Send"  />

</form>

<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>

