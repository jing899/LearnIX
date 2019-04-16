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
	$page = 'Intermediate Important Programs Quiz';
	include $path.'assets/inc/header.php';
?>

<div class = "container">
	<form onsubmit = "return false;" name = "quiz" action="#" method = "get">

		<h1 class="qh1">Intermediate Important Programs Quiz</h1>
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
			<p class = "qP">What is the command that shows the commplete path of a file?</p>
			
			<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">path -full</label><br>
			<input type="radio" name ="question1" value = "q1a2" id="q1a3"/> <label for="q1a3">path -all</label><br>
			<input type="radio" name ="question1" value = "correct" id="q1a1"/> <label for="q1a1">which</label><br>
			<input type="radio" name ="question1" value = "q1a2" id="q1a4"/> <label for="q1a4">completePath -file</label><br>
			<p class="helpText">The which command shows the complete path of a file</p>			
		</div>

		<div id = "second">
			<h2 class="qh2" id="q2">Question 2</h2>
			<p class="qP">Which of the following is an archiving/de-archiving program?</p>
			
			<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">Tar</label><br>
			<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">Zar</label><br>
			<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">Zip</label><br>
			<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">Compress</label><br>
			<p class="helpText">Remember, Tar is an archiving/de-archiving program</p>
		</div>

		<div id = "third">
			<h2 class="qh2" id="q3">Question 3</h2>
			<p class="qP">What file compression program is used on windows operating systems as well?</p>
			
			<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">Tar</label><br>
			<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">Zar</label><br>
			<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">compress</label><br>
			<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">zip</label><br>
			<p class="helpText">Remmeber, Zip/unzip is a file compression program found on linux and windows</p>
		</div>

		<div id = "fourth">
			<h2 class="qh2" id="q4">Question 4</h2>
			<p class="qP">What is an example of a file transfer application</p>
			
			<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">putty</label><br>
			<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">filezilla</label><br>
			<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">ssa</label><br>
			<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">shaa</label><br>
			<p class="helpText">Filezilla is a program that uses the sftp protocol to transfer files</p>
		</div>

		<div id = "fifth">
			<h2 class="qh2" id="q5">Question 5</h2>
			<p class="qP">What is the protocol used to remotely log into a device?</p>
			
			<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">scp</label><br>
			<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">sftp</label><br>
			<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">ssh</label><br>
			<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">tcp/ip</label><br>
			<p class="helpText">The ssh protocol is used to remotely log in an access a machine or host</p>
		</div>
		
		<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
	</form>
</div>
	
<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>