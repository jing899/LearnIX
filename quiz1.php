<!-- LEARNIX 
	
Filename:	quiz1.php
Authors: 	Rachael Bogdany
			Jon Healy
			Lowell Pence
			Shoujing Wu 
-->

<?php
	//include the header
	$path = './';
	$page = 'Quiz 1';
	include $path.'header.php';
?>

<form name = "quiz1" onsubmit="validateQuiz()" method = "get">
	<h1>Novice Quiz</h1>
	<p>Test your knowledge on unix navigation and files with the following questions</p>
	
	<h2>Question 1:</h2>
	<p>What is the correct command syntax to navigate up one level?</p>
	
	<input type="radio" name ="upOne" value = "wrong" id="cd*"/> <label for="cd*">cd *</label><br>
	<input type="radio" name ="upOne" value = "wrong" id="cdUp"/> <label for="cdUp">cd up</label><br>
	<input type="radio" name ="upOne" value = "correct" id="cd.."/> <label for="cd..">cd ..</label><br>
	<input type="radio" name ="upOne" value = "wrong" id="cd!"/> <label for="cd!">cd !</label><br>
	
	<h2>Question 2</h2>
	<p>What is the correct command syntax to get the current working directory path?</p>
	<input type="radio" name ="curPath" value = "correct" id="pwd"/> <label for="pwd">pwd</label><br>
	<input type="radio" name ="curPath" value = "wrong" id="current"/> <label for="current">current -d</label><br>
	<input type="radio" name ="curPath" value = "wrong" id="list*"/> <label for="list*">list path</label><br>
	<input type="radio" name ="curPath" value = "wrong" id="currentP"/> <label for="currentP">current path</label><br>
	
	<h2>Question 3</h2>
	<p>What is the correct command syntax to create a file named testing.txt?</p>
	<input type="radio" name ="create" value = "wrong" id="createT"/> <label for="createT">create testing.txt</label><br>
	<input type="radio" name ="create" value = "wrong" id="makeT"/> <label for="makeT">make testing.txt</label><br>
	<input type="radio" name ="create" value = "wrong" id="mkf"/> <label for="mkf">mkf testing.txt</label><br>
	<input type="radio" name ="create" value = "correct" id="touch"/> <label for="touch">touch testing.txt</label><br>
	
	<h2>Question 4</h2>
	<p>What is the command syntax to list all sub-directories in the current directory</p>
	<input type="radio" name ="list" value = "wrong" id="listDirs"/> <label for="listDirs">list dirs</label><br>
	<input type="radio" name ="list" value = "correct" id="listD"/> <label for="listD">list -d</label><br>
	<input type="radio" name ="list" value = "wrong" id="listAll"/> <label for="listAll">listall</label><br>
	<input type="radio" name ="list" value = "wrong" id="list"/> <label for="list">listall -d /.</label><br>
	
	<h2>Question 5</h2>
	<p>What is the correct command syntax to remove a directory called users?</p>
	<input type="radio" name ="remove" value = "wrong" id="rmd"/> <label for="rmd">remove dir users</label><br>
	<input type="radio" name ="remove" value = "wrong" id="rm"/> <label for="rm">rm -d users</label><br>
	<input type="radio" name ="remove" value = "correct" id="rmdir"/> <label for="rmdir">rmdir users</label><br>
	<input type="radio" name ="remove" value = "wrong" id="deldir"/> <label for="deldir">deldir users</label><br>
	
	<input type="submit"  name="Submit"  value="Send"  />

</form>

<?php
	//include the footer
	include $path.'footer.php';
?>

