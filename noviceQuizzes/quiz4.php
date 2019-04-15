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
	$page = 'Novice Important Programs Quiz';
	include $path.'assets/inc/header.php';
?>

<div class = "container">
	<form onsubmit="return false;" name="quiz" action="#" method="get">

			<h1 class="qh1">Novice Important Programs Quiz</h1>
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
			<p class = "qP">Which of these programs are command line text editors?</p>
			
			<input type="radio" name ="question1" value = "q1a1" id="q1a1"/> <label for="q1a1">Just pico and emacs</label><br>
			<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">Just Vi and Vim </label><br>	
			<input type="radio" name ="question1" value = "q1a3" id="q1a3"/> <label for="q1a3">Just vim and nano</label><br>
			<input type="radio" name ="question1" value = "correct" id="q1a4"/> <label for="q1a4">All of the above</label><br>
			<p class="helpText">All of the above are comand line text editors</p>
		</div>
		
		<div id = "second">
			<h2 class="qh2" id="q2">Question 2</h2>
			<p class="qP">Which choice best defines Vim?</p>
			
			<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">VI improved, adds to bill Joy’s vi editor and can be used both in the command line and as a standalone application on a GUI</label><br>
			<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">The predacessor to Vi</label><br>
			<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">A non command line text editor</label><br>
			<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">A command line program to read binary files</label><br>
			<p class="helpText">Remember, Vim is VI improved and can be a standalone app as well as a GUI</p>
		</div>
		
		<div id = "third">
			<h2 class="qh2" id="q3">Question 3</h2>
			<p class="qP">Who created the Vi text editor?</p>
			
			<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">Billy Joel</label><br>
			<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">Bill Gates</label><br>
			<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">Elon Musk</label><br>
			<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">Bill Joy</label><br>
			<p class="helpText">Bill joy created Vi in 1976</p>
		</div>

		<div id = "fourth">
			<h2 class="qh2" id="q4">Question 4</h2>
			<p class="qP">What year was the text editor Vi released?</p>
			
			<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">1994</label><br>
			<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">1991</label><br>
			<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">1976</label><br>
			<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">1979</label><br>
			<p class="helpText">Remember, Vim was released in 1991 as a clone to Bill Joy's 1976 Vi text editor</p>
		</div>

		<div id ="fifth">
			<h2 class="qh2" id="q5">Question 5</h2>
			<p class="qP">Which command line text editor is the most widely used?</p>
			
			<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">Nano</label><br>
			<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">Pico</label><br>
			<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">Vim</label><br>
			<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">Gedit</label><br>
			<p class="helpText">Vim is the most commonly used command line text editor and is often called the "programmer's editor"</p>
		</div>
		
		<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
	</form>
</div>
<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>
