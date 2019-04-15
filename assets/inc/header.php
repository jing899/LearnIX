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
        <meta charset="utf-8">
        <title><?php echo $page;?></title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $path;?>assets/img/logo_small.ico"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/styles.css"/>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <script type="text/javascript" src="<?php echo $path;?>assets/js/main.js"></script>
    </head>
    <body>
        <header id="header">

            <div id="branding">
                <img id="logo" src="<?php echo $path;?>assets/img/logo.png" alt="Logo"/>
            </div>

            <label id="button" for="toggle">&#9776;</label>

            <input type="checkbox" id="toggle" onclick="expandHeader()" autocomplete="off"/>

		    <nav id="nav" class="menu">

                <ul>
                    <li><a href="<?php echo $path;?>index.php">HOME</a>
                        <div class="dropdown-content">
                        </div>
                    </li>

                    <li class="dropdown"><a>ABOUT</a>
                        <div class="dropdown-content">
							<a href="<?php echo $path;?>about/architecture.php">Unix Architecture</a>
                            <a href="<?php echo $path;?>about/kernelshell.php">Kernel v.s. Shell</a>
                            <a href="<?php echo $path;?>about/contentcitations.php">Content Citations</a>
                            <a href="<?php echo $path;?>about/analysiscitations.php">Analysis Citations</a>
                        </div>
                    </li>

					<li class="dropdown">
                        <input id="check02" type="checkbox" name="menu"/>
                        <label for="check02" class="dropbtn">QUIZZES</label>
                        
                        <ul class="dropdown-content">
							<li><a>Novice</a></li>
							<li><a>Intermediate</a></li>
							<li><a>Advanced</a></li>
						</ul>
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

                </ul>
            </nav>
        </header>
