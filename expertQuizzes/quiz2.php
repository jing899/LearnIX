<!-- LEARNIX 
	
Filename:	quiz2.php
Authors: 	Rachael Bogdany
			Jon Healy
			Lowell Pence
			Shoujing Wu 
-->

<?php
	//include the header
	$path = '../';
	$page = 'Expert RegEx Quiz';
	include $path.'assets/inc/header.php';
?>

<div class = "container">
	<form onsubmit = "return false;" name = "quiz" action="#" method = "get">

		<h1 class="qh1">Expert RegEx Quiz</h1>
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
			<p class = "qP">What is the purpose of RegEx?</p>
			
			<input type="radio" name ="question1" value = "q1a1" id="q1a1"/> <label for="q1a1">to clear web browsing history</label><br>
			<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">to format data into a csv file</label><br>	
			<input type="radio" name ="question1" value = "q1a3" id="q1a3"/> <label for="q1a3">to remove lines in a file</label><br>
			<input type="radio" name ="question1" value = "correct" id="q1a4"/> <label for="q1a4">strings at specific points to find specific characters in the string</label><br>
			<p class="helpText">Remember, RegEx is used to search and iterate through strings</p>
		</div>

		<div id = "second">
			<h2 class="qh2" id="q2">Question 2</h2>
			<p class="qP">Which is the proper end line character?</p>
			
			<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">/n</label><br>
			<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">clear</label><br>
			<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">newLine()</label><br>
			<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">/endline</label><br>
			<p class="helpText">Please review RegEx documentation</p>
		</div>

		<div id = "third">
			<h2 class="qh2" id="q3">Question 3</h2>
			<p class="qP">Which character starts the search at the begining of the string?</p>
			
			<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">!</label><br>
			<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">_start_</label><br>
			<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">%</label><br>
			<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">^</label><br>
			<p class="helpText">Please review the RegEx documentation</p>
		</div>
		
		<div id = "fourth">
			<h2 class="qh2" id="q4">Question 4</h2>
			<p class="qP">What is the proper tab character</p>
			
			<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">-tab</label><br>
			<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">/t</label><br>
			<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">/%</label><br>
			<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">/n</label><br>
			<p class="helpText">Please review the RegEx documentation</p>
		</div>

		<div id = "fifth">
			<h2 class="qh2" id="q5">Question 5</h2>
			<p class="qP">Which checks if a character is a letter from A-Z?</p>
			
			<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">A-Z^</label><br>
			<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">A -> Z</label><br>
			<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">[A-Z]</label><br>
			<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">Search -A_Z</label><br>
			<p class="helpText">Please review the RegEx documentation</p>
		</div>
		
		<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
	</form>
</div>

<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>
