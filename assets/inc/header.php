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
                <!-- top level nav bar -->
                <ul>
                    <!-- top level nav item -->
                    <li><a href="<?php echo $path;?>index.php">HOME</a></li>

                    <!-- top level nav item -->
                    <li class="dropdown">
                        <a>ABOUT</a>
                        <ul>
							<li><a href="<?php echo $path;?>about/architecture.php">Unix Architecture</a></li>
                            <li><a href="<?php echo $path;?>about/kernelshell.php">Kernel v.s. Shell</a></li>
                            <li><a href="<?php echo $path;?>about/contentcitations.php">Content Citations</a></li>
                            <li><a href="<?php echo $path;?>about/analysiscitations.php">Analysis Citations</a></li>
                            <li><a href="<?php echo $path;?>about/aboutus.php">About Us</a></li>
                        </ul>
                    </li>

                    <!-- top level nav item -->
					<li class="dropdown">
                        <a>QUIZZES</a>
                        <ul>
                            <li>
                                <a>Novice</a>
                                <ul>
									<li><a href="<?php echo $path;?>noviceQuizzes/quiz6.php">SSH Quiz</a></li>
                                    <li><a href="<?php echo $path;?>noviceQuizzes/quiz1.php">Navigation Quiz</a></li>
                                    <li><a href="<?php echo $path;?>noviceQuizzes/quiz2.php">File Creation Quiz</a></li>
                                    <li><a href="<?php echo $path;?>noviceQuizzes/quiz3.php">Permissions Quiz</a></li>
                                    <li><a href="<?php echo $path;?>noviceQuizzes/quiz4.php">Command Line Programs Quiz</a></li>
                                    <li><a href="<?php echo $path;?>noviceQuizzes/quiz5.php">Basics Quiz</a></li>
                                </ul>
                            </li>

                            <li>
                                <a>Intermediate</a>
                                <ul>
                                    <li><a href="<?php echo $path;?>intermediateQuizzes/quiz1.php">System Information Quiz</a></li>
                                    <li><a href="<?php echo $path;?>intermediateQuizzes/quiz2.php">Pip/Yum Quiz</a></li>
                                    <li><a href="<?php echo $path;?>intermediateQuizzes/quiz3.php">Processes Quiz</a></li>
                                    <li><a href="<?php echo $path;?>intermediateQuizzes/quiz4.php">Root Level Quiz</a></li>
                                    <li><a href="<?php echo $path;?>intermediateQuizzes/quiz6.php">Commands Quiz</a></li>
                                </ul>
                            </li>

                            <li>
                                <a>Advanced</a>
                                <ul>
                                    <li><a href="<?php echo $path;?>advancedQuizzes/quiz1.php">Advanced Programs Quiz</a></li>
                                    <li><a href="<?php echo $path;?>advancedQuizzes/quiz2.php">Regular Expressions Quiz</a></li>
                                    <li><a href="<?php echo $path;?>advancedQuizzes/quiz3.php">Users Quiz</a></li>
                                    <li><a href="<?php echo $path;?>advancedQuizzes/quiz4.php">Advanced Commands Quiz</a></li>
                               </ul>
                            </li>
                        </ul>
                        <!--<input id="check02" type="checkbox" name="menu"/>
                        <label for="check02" class="dropbtn">QUIZZES</label>-->
                    </li>

                    <!-- top level nav item -->
                    <li class="dropdown">
                        <a>NOVICE</a>
                        <ul>
							<li><a href="<?php echo $path;?>novice/ssh.php">SSH</a></li>
                            <li><a href="<?php echo $path;?>novice/navigation.php">Navigation</a></li>
                            <li><a href="<?php echo $path;?>novice/filecreation.php">File Creation</a></li>
                            <li><a href="<?php echo $path;?>novice/permissions.php">Permissions</a></li>
                            <li><a href="<?php echo $path;?>novice/commandlineprograms.php">Command Line Programs</a></li>
                            <li><a href="<?php echo $path;?>novice/basics.php">Basics</a></li>
                        </ul>
                    </li>

                    <!-- top level nav item -->
                    <li class="dropdown">
                        <a>INTERMEDIATE</a>
                        <ul>
                            <li><a href="<?php echo $path;?>intermediate/systeminformation.php">System Information</a></li>
                            <li><a href="<?php echo $path;?>intermediate/pipyum.php">Pip/Yum</a></li>
                            <li><a href="<?php echo $path;?>intermediate/processes.php">Processes</a></li>
                            <li><a href="<?php echo $path;?>intermediate/rootlevel.php">Root Level</a></li>
                            <li><a href="<?php echo $path;?>intermediate/commands.php">Commands</a></li>
                        </ul>
                    </li>

                    <!-- top level nav item -->
                    <li class="dropdown">
                        <a>ADVANCED</a>
                        <ul>
                            <li><a href="<?php echo $path;?>advanced/advancedprograms.php">Advanced Programs</a></li>
                            <li><a href="<?php echo $path;?>advanced/regularexpressions.php">Regular Expressions</a></li>
                            <li><a href="<?php echo $path;?>advanced/users.php">Users</a></li>
                            <li><a href="<?php echo $path;?>advanced/advancedcommands.php">Advanced Commands</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
