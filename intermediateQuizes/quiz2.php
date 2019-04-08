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
	$page = 'Intermediate Pip/Yum Quiz';
	include $path.'assets/inc/header.php';
?>

<form onsubmit = "return false;" name = "quiz" action="#" method = "get">

	<h1 class="qh1">Intermediate Pip and Yum Quiz</h1>
	<!--
		The naming convention for quiz question id's is as follows: Question # Answer #
		For example Question 2 Answer 4's id would be: "q2a4"
		
		The logic behind this is that it matches the value so when java script is validating...
		it can determine which choices were choosen correctly and incorrectly and display this to the user.
		More can be seen on this in the validateQuiz function in the file assets/script/main.js
		
		The text boxes display a message to the user on what they got wrong and how they can lookup the correct answer
	-->	
	<h2 class="qh2" id="q1">Question 1</h2>
	<p class = "qP">What are some things packages installed with pip be used for?</p>
	
	<input type="radio" name ="question1" value = "correct" id="q1a1"/> <label for="q1a1">bash and python script</label><br>
	<p class="helpText">Remmeber, packages installed with pip are commonly imported into bash and python scripts</p>
	<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">port scanning</label><br>
	<input type="radio" name ="question1" value = "q1a2" id="q1a3"/> <label for="q1a3">Creating firewall vulnerabilities</label><br>	
	<input type="radio" name ="question1" value = "q1a2" id="q1a4"/> <label for="q1a4">Creating symbolic links</label><br>		
	
	<h2 class="qh2" id="q2">Question 2</h2>
	<p class="qP">What type of software does Yum install on the host?</p>
	
	<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">applications</label><br>
	<p class="helpText">Remmeber, Yum installs Applications on the host, Yum installs applcations</p>
	<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">services</label><br>
	<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">viruses</label><br>
	<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">system security updates</label><br>
	
	<h2 class="qh2" id="q3">Question 3</h2>
	<p class="qP">What type of software does Pip install on the host?</p>
	
	<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">applications</label><br>
	<p class="helpText">Remmeber, Pip installs packages on the host, yum installs applcations</p>
	<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">viruses</label><br>
	<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">system security updates</label><br>
	<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">packages</label><br>
	
	<h2 class="qh2" id="q4">Question 4</h2>
	<p class="qP">What is the correct command syntax to update the "chrome" application using Yum?</p>
	
	<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">yum get chrome</label><br>
	<p class="helpText">True, pip and yum will install updates to existing software on the host</p>
	<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">yum update -y chrome</label><br>
	<input type="radio" name ="question4" value = "correct" id="q4a3"/> <label for="q4a3">yum grab chrome -update</label><br>
	<input type="radio" name ="question4" value = "correct" id="q4a4"/> <label for="q4a4">yum -getLatest chrome</label><br>
	
	<h2 class="qh2" id="q5">Question 5</h2>
	<p class="qP">What is the correct command syntax to install a package called "sshd" with pip?</p>
	
	<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">install sshd</label><br>
	<p class="helpText">Please review the "pip" man pages for proper command syntax</p>
	<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">download sshd</label><br>
	<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">pip install sshd</label><br>
	<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">pip grab sshd</label><br>
	
	<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
</form>

<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>