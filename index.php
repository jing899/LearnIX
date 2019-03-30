<!-- LEARNIX 
	
Filename:	index.php
Authors: 	Rachael Bogdany
			Jon Healy
			Lowell Pence
			Shoujing Wu 
-->
<?php
	//include the header
	$path = './';
	$page = 'Homepage';
	include $path.'assets/inc/header.php';
?>
<div class="content">
	<h1>Learn with LearnIX</h1>
	<p></p>
	<div class="buttons">
		<h2>Novice</h2>
		<h5>Tutorials</h5>
	</div>
	<div class="buttons">
		<h2>Intermediate</h2>
		<h5>Tutorials</h5>
	</div>
	<div class="buttons">
		<h2>Advanced</h2>
		<h5>Tutorials</h5>
	</div>
</content>
<?php
	//include the footer
	include $path.'assets/inc/footer.php';
?>