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
    <div class="empty"></div>
    <h1 id="main_title">Learn<br/>Unix with<br/>LearnIX<br/></h1>
    <p id="overview">LearnIX is a tutorial website that aims to teach users how to use Unix through quizzes, and interactive activities. LearnIX starts with very simple concepts, teaching users how to navigate the Unix command line and then moves into increasingly more complex ideas for advanced users. A smooth layout allows users to go through tutorials at their own pace and includes a reference page for users to be able to quickly find a command they might need. The site is aimed toward Unix with the purpose of Web Development, and is perfect for anyone from novice to advanced.</p>
    <div class="empty2"></div>
    <div class="buttons" id="button_nov">
        <a href="novice/ssh.php"><h2>Novice<br/>Tutorials</h2></a>
    </div>
    <div class="buttons" id="button_int">
        <a href="intermediate/systeminformation.php"><h2>Intermediate<br/>Tutorials</h2></a>
    </div>
    <div class="buttons" id="button_adv">
        <a href="advanced/advancedprograms.php"><h2>Advanced<br/>Tutorials</h2></a>
    </div>
    <div class="empty3"></div>

</div>
<?php
//include the footer
include $path.'assets/inc/footer.php';
?>