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
	$page = 'Advanced Programs Quiz';
    $isQuiz = true;
	include $path.'assets/inc/header.php';
?>

<div class = "container">
	<form onsubmit = "return false;" name = "quiz" action="#" method = "get">

		<div><h2 id="scorebaord"></h2></div>
		<h1 class="qh1">Advanced Programs Quiz</h1>
        <h4 class="topic"><a class="prev_next" href="../advanced/advancedprograms.php"> &larr; Review </a> <a class="prev_next" href="../advanced/regularexpressions.php"> Next Tutorial &rarr; </a>
</h4>
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
			
			<input type="radio" name ="question1" value = "q1a1" id="q1a1"/> <label for="q1a1">Chrome</label><br>
			<div class="redX" id="x1"><img src="../assets/img/redX.png" alt="Red X"></div>
			<div class="checks" id="check1"><img src="../assets/img/check.png" alt="Check Mark"></div>
			<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">Filezilla</label><br>	
			<input type="radio" name ="question1" value = "correct" id="q1a4"/> <label for="q1a4">Git</label><br>
			<input type="radio" name ="question1" value = "q1a3" id="q1a3"/> <label for="q1a3">Ssh</label><br>
			<p class="helpText">Remember, Git is used for file version control</p>
		</div>

		<div id = "Second">
			<h2 class="qh2" id="q2">Question 2</h2>
			<p class="qP">What is the function of SCP?</p>
			
			<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">Securly copies files</label><br>
			<div class="redX" id="x2"><img src="../assets/img/redX.png" alt="Red X"></div>
			<div class="checks" id="check2"><img src="../assets/img/check.png" alt="Check Mark"></div>
			<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">SCP has no function</label><br>
			<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">Securly destorys files</label><br>
			<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">Video sharing program</label><br>
			<p class="helpText">Remember, scp is the protocol to securely send files</p>
		</div>

		<div id = "third">
			<h2 class="qh2" id="q3">Question 3</h2>
			<p class="qP">Which program utilizes ssh?</p>
			
			<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">Firefox</label><br>
			<div class="redX" id="x3"><img src="../assets/img/redX.png" alt="Red X"></div>
			<div class="checks" id="check3"><img src="../assets/img/check.png" alt="Check Mark"></div>
			<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">Vmware</label><br>
			<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">Powershell</label><br>
			<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">Putty</label><br>
			<p class="helpText">Remember, putty uses ssh and other tools to connect remotely to devices</p>
		</div>

		<div id = "fourth">
			<h2 class="qh2" id="q4">Question 4</h2>
			<p class="qP">What is the command to create a git repository?</p>
			
			<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">GitCreate -d</label><br>
			<div class="redX" id="x4"><img src="../assets/img/redX.png" alt="Red X"></div>
			<div class="checks" id="check4"><img src="../assets/img/check.png" alt="Check Mark"></div>
			<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">Git init</label><br>
			<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">CreateGit</label><br>
			<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">Create repository</label><br>
			<p class="helpText">Please review the git documentation!</p>
		</div>	
		
		<div id = "fifth">
			<h2 class="qh2" id="q5">Question 5</h2>
			<p class="qP">What is the command to commit a file to a git repository?</p>
			
			<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">Git push</label><br>
			<div class="redX" id="x5"><img src="../assets/img/redX.png" alt="Red X"></div>
			<div class="checks" id="check5"><img src="../assets/img/check.png" alt="Check Mark"></div>
			<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">Git send</label><br>
			<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">Git commit</label><br>
			<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">Sendall</label><br>
			<p class="helpText">Please review the git documentation!</p>
		</div>
		
		<div class="buttonDiv">
			<input class="start" type="submit" name="Submit" onclick="validateQuiz()"  value="Send"/>
			<input type="button" name="Reload" onclick="document.location.reload(true); window.scrollTo(0,0);" value="Retry Quiz"/>
		</div>
	</form>
</div>

<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>
