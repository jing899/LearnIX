<!-- LEARNIX

Filename:	header.php
Authors: 	Rachael Bogdany
Jon Healy
Lowell Pence
Shoujing Wu
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $page;?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/styles.css"/>
        <script type="text/javascript" src="<?php echo $path;?>assets/script/main.js"></script>
    </head>
    <body>
        <header>
            <nav id="nav">
                <ul>
                    <li class="dropdown"><a class="dropbtn">ABOUT</a>
                        <div class="dropdown-content">
							<a href="<?php echo $path;?>about/architecture.php">Unix Architecture</a>
                            <a href="<?php echo $path;?>about/kernelshell.php">Kernel v.s. Shell</a>
                            <a href="<?php echo $path;?>about/contentcitations.php">Content Citations</a>
                            <a href="<?php echo $path;?>about/analysiscitations.php">Analysis Citations</a>
                        </div>
                    </li>
					<li class="dropdown"><a class="dropbtn">QUIZZES</a>
                        <div class="dropdown-content">
							<a>Novice</a>
							<a>Intermediate</a>
							<a>Advanced</a>
						</div>
                    </li>
                    <li class="dropdown"><a class="dropbtn">ADVANCED</a>
                        <div class="dropdown-content">
                            <a href="<?php echo $path;?>advanced/advancedprograms.php">Advanced Programs</a>
							<a>Advanced Programs Quiz</a>
                            <a href="<?php echo $path;?>advanced/regularexpressions.php">Regular Expressions</a>
							<a>Regular Expressions Quiz</a>
                            <a href="<?php echo $path;?>advanced/users.php">Users</a>
							<a>Users Quiz</a>
                            <a href="<?php echo $path;?>advanced/advancedcommands.php">Advanced Commands</a>
							<a>Advanced Commands Quiz</a>
                        </div>
                    </li>
                    <li class="dropdown"><a class="dropbtn">INTERMEDIATE</a>
                        <div class="dropdown-content">
                            <a href="<?php echo $path;?>intermediate/systeminformation.php">System Information</a>
							<a>System Information Quiz</a>
                            <a href="<?php echo $path;?>intermediate/pipyum.php">Pip/Yum</a>
							<a>Pip/Yum Quiz</a>
                            <a href="<?php echo $path;?>intermediate/processes.php">Processes</a>
							<a>Processes Quiz</a>
                            <a href="<?php echo $path;?>intermediate/rootlevel.php">Root Level</a>
							<a>Root Level Quiz</a>
                            <a href="<?php echo $path;?>intermediate/ssh.php">SSH</a>
							<a>SSH Quiz</a>
                            <a href="<?php echo $path;?>intermediate/commands.php">Commands</a>
							<a>Commands Quiz</a>
                        </div>
                    </li>
                    <li class="dropdown"><a class="dropbtn">NOVICE</a>
                        <div class="dropdown-content">
                            <a href="<?php echo $path;?>novice/navigation.php">Navigation</a>
							<a>Navigation Quiz</a>
                            <a href="<?php echo $path;?>novice/filecreation.php">File Creation</a>
							<a>File Creation Quiz</a>
                            <a href="<?php echo $path;?>novice/permissions.php">Permissions</a>
							<a>Permissions Quiz</a>
                            <a href="<?php echo $path;?>novice/commandlineprograms.php">Command Line Programs</a>
							<a>Command Line Programs Quiz</a>
                            <a href="<?php echo $path;?>novice/basics.php">Basics</a>
							<a>Basics Quiz</a>
                        </div>
                    </li>
                    <li><a href="<?php echo $path;?>index.php">HOME</a>
                        <div class="dropdown-content">
                        </div>
                    </li>
                    <li id="logo">
                        <a href="">
                            <img id="logosize" src="<?php echo $path;?>assets/img/logo.jpg" alt="Logo"/>
                        </a></li>
                </ul>
            </nav>
        </header>