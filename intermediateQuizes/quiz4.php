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
	$page = 'Intermediate Root Commands Quiz';
	include $path.'assets/inc/header.php';
?>

<form onsubmit = "return false;" name = "quiz" action="#" method = "get">

	<h1 class="qh1">Intermediate Root Commands Quiz</h1>
	<!--
		The naming convention for quiz question id's is as follows: Question # Answer #
		For example Question 2 Answer 4's id would be: "q2a4"
		
		The logic behind this is that it matches the value so when java script is validating...
		it can determine which choices were choosen correctly and incorrectly and display this to the user.
		More can be seen on this in the validateQuiz function in the file assets/script/main.js
		
		The text boxes display a message to the user on what they got wrong and how they can lookup the correct answer
	-->	
	<h2 class="qh2" id="q1">Question 1</h2>
	<p class = "qP">What is the significance of having root level access?</p>
	
	<input type="radio" name ="question1" value = "correct" id="q1a1"/> <label for="q1a1">Changes made affect the whole system</label><br>
	<p class="helpText">Remember, changes made as the root user afftect the whole system</p>
	<input type="radio" name ="question1" value = "q1a2" id="q1a2"/> <label for="q1a2">The chnages can't be undone</label><br>
	<input type="radio" name ="question1" value = "q1a2" id="q1a3"/> <label for="q1a3">You can be locked out of the system forever</label><br>	
	<input type="radio" name ="question1" value = "q1a2" id="q1a4"/> <label for="q1a4">There is nothing significant about being root</label><br>		
	
	<h2 class="qh2" id="q2">Question 2</h2>
	<p class="qP">What is the syntax to execute command as a super user (root)?</p>
	
	<input type="radio" name ="question2" value = "correct" id="q2a1"/> <label for="q2a1">sudo "command"</label><br>
	<p class="helpText">Remmeber, the prefix "sudo" executes a command as the super user (root)</p>
	<input type="radio" name ="question2" value = "q2a2" id="q2a2"/> <label for="q2a2">root "command"</label><br>
	<input type="radio" name ="question2" value = "q2a3" id="q2a3"/> <label for="q2a3">super -command</label><br>
	<input type="radio" name ="question2" value = "q2a4" id="q2a4"/> <label for="q2a4">execute -superuser "command"</label><br>
	
	<h2 class="qh2" id="q3">Question 3</h2>
	<p class="qP">What group has super user (root) privilages?</p>
	
	<input type="radio" name ="question3" value = "q3a1" id="q3a1"/> <label for="q3a1">sudo</label><br>
	<p class="helpText">Remmeber, the wheel group has root privilages for users in that group</p>
	<input type="radio" name ="question3" value = "q3a2" id="q3a2"/> <label for="q3a2">supers</label><br>
	<input type="radio" name ="question3" value = "q3a3" id="q3a3"/> <label for="q3a3">roots</label><br>
	<input type="radio" name ="question3" value = "correct" id="q3a4"/> <label for="q3a4">wheel</label><br>
	
	<h2 class="qh2" id="q4">Question 4</h2>
	<p class="qP">What is the correct command syntax to change a users password?</p>
	
	<input type="radio" name ="question4" value = "q4a1" id="q4a1"/> <label for="q4a1">changepassword</label><br>
	<p class="helpText">The "chpasswd" command allows the user to change their password</p>
	<input type="radio" name ="question4" value = "correct" id="q4a2"/> <label for="q4a2">chpasswd</label><br>
	<input type="radio" name ="question4" value = "q4a3" id="q4a3"/> <label for="q4a3">passwd -change</label><br>
	<input type="radio" name ="question4" value = "q4a4" id="q4a4"/> <label for="q4a4">reset -password</label><br>
	
	<h2 class="qh2" id="q5">Question 5</h2>
	<p class="qP">What is the correct command syntax to stop a system service like "firewalld"?</p>
	
	<input type="radio" name ="question5" value = "q5a1" id="q5a1"/> <label for="q5a1">stop firewalld</label><br>
	<p class="helpText">Please review the "systemctl" man pages for proper command syntax</p>
	<input type="radio" name ="question5" value = "q5a2" id="q5a2"/> <label for="q5a2">stop --firewall</label><br>
	<input type="radio" name ="question5" value = "correct" id="q5a3"/> <label for="q5a3">systemctl stop firewalld</label><br>
	<input type="radio" name ="question5" value = "q5a4" id="q5a4"/> <label for="q5a4">systemblock firewalld</label><br>
	
	<input type="submit"  name="Submit" onclick="validateQuiz()"  value="Send"/>
</form>

<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>