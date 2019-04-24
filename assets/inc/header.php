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

    <body onresize="disableNav()">
        <header id="header">
            <div id="branding">
                <img id="logo" src="<?php echo $path;?>assets/img/logo.png" alt="Logo"/>
            </div>
            <label id="button" for="toggle">&#9776;</label>
            <input type="checkbox" id="toggle" onclick="expandHeader()"/>
		    <nav id="nav">
                <!-- top level nav bar -->
                <ul>
                    <!-- top level nav item -->
                    <li><a href="<?php echo $path;?>index.php">HOME</a></li>

                    <!-- top level nav item -->
                    <li class="dropdown">
                        <input id="about-btn" type="checkbox" name="menu"/>
                        <label for="about-btn">
                            <a <?php echo(($page == 'Unix Architecture' or $page == 'Kernel v.s. Shell' or $page == 'Content Citations' or $page == 'About Us') ?' class="top-level-active"':'');?>>
                                ABOUT
                            </a>
                        </label>
                        <ul>
							<li <?php echo(($page=='Unix Architecture') ?' class="active"':'');?>><a href="<?php echo $path;?>about/architecture.php">Unix Architecture</a></li>
                            <li <?php echo(($page=='Kernel v.s. Shell') ?' class="active"':'');?>><a href="<?php echo $path;?>about/kernelshell.php">Kernel v.s. Shell</a></li>
                            <li <?php echo(($page=='Content Citations') ?' class="active"':'');?>><a href="<?php echo $path;?>about/contentcitations.php">Content Citations</a></li>
                            <li <?php echo(($page=='About Us') ?' class="active"':'');?>><a href="<?php echo $path;?>about/aboutus.php">About Us</a></li>
                        </ul>
                    </li>

                    <!-- top level nav item -->
					<li class="dropdown">
                        <input id="quizzes-btn" type="checkbox" name="menu"/>
                        <label for="quizzes-btn">
                            <a <?php echo(isset($isQuiz) ?' class="top-level-active"':'');?>>
                                QUIZZES
                            </a>
                        </label>
                        <ul>
                            <li>
                                <input id="quizzes-novice-btn" type="checkbox" name="menu"/>
                                <label for="quizzes-novice-btn">
                                    <a <?php echo(($page[0]=='N' and isset($isQuiz)) ?' class="active"':'');?>>
                                        Novice &#9657;
                                    </a>
                                </label>
                                
                                <ul>
									<li <?php echo(($page=='Novice SSH Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>noviceQuizzes/quiz6.php">SSH Quiz</a>
                                    </li>
                                    <li <?php echo(($page=='Novice Navigation Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>noviceQuizzes/quiz1.php">Navigation Quiz</a>
                                    </li>
                                    <li <?php echo(($page=='Novice File Structure and Comands Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>noviceQuizzes/quiz2.php">File Creation Quiz</a>
                                    </li>
                                    <li <?php echo(($page=='Novice Permissions Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>noviceQuizzes/quiz3.php">Permissions Quiz</a>
                                    </li>
                                    <li <?php echo(($page=='Novice Command Line Programs Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>noviceQuizzes/quiz4.php">Command Line Programs Quiz</a>
                                    </li>
                                    <li <?php echo(($page=='Novice Basics Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>noviceQuizzes/quiz5.php">Basics Quiz</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <input id="quizzes-intermediate-btn" type="checkbox" name="menu"/>
                                <label for="quizzes-intermediate-btn">
                                    <a <?php echo(($page[0]=='I' and isset($isQuiz)) ?' class="active"':'');?>>
                                        Intermediate &#9657;
                                    </a>
                                </label>
                                <ul>
                                    <li <?php echo(($page=='Intermediate System Information Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>intermediateQuizzes/quiz1.php">System Information Quiz</a>
                                    </li>
                                    <li <?php echo(($page=='Intermediate Pip/Yum Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>intermediateQuizzes/quiz2.php">Pip/Yum Quiz</a>
                                    </li>
                                    <li <?php echo(($page=='Intermediate Processes Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>intermediateQuizzes/quiz3.php">Processes Quiz</a>
                                    </li>
                                    <li <?php echo(($page=='Intermediate Root Commands Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>intermediateQuizzes/quiz4.php">Root Level Quiz</a>
                                    </li>
                                    <li <?php echo(($page=='Intermediate Commands Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>intermediateQuizzes/quiz5.php">Commands Quiz</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <input id="quizzes-advanced-btn" type="checkbox" name="menu"/>
                                <label for="quizzes-advanced-btn">
                                    <a <?php echo(($page[0]=='A' and isset($isQuiz)) ?' class="active"':'');?>>
                                        Advanced &#9657;
                                    </a>
                                </label>
                                <ul>
                                    <li <?php echo(($page=='Advanced Programs Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>advancedQuizzes/quiz1.php">Advanced Programs Quiz</a>
                                    </li>
                                    <li <?php echo(($page=='Advanced RegEx Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>advancedQuizzes/quiz2.php">Regular Expressions Quiz</a>
                                    </li>
                                    <li <?php echo(($page=='Advanced Users Quiz') ?' class="active"':'');?>> 
                                        <a href="<?php echo $path;?>advancedQuizzes/quiz3.php">Users Quiz</a>
                                    </li>
                                    <li <?php echo(($page=='Advanced Commands Quiz') ?' class="active"':'');?>>
                                        <a href="<?php echo $path;?>advancedQuizzes/quiz4.php">Advanced Commands Quiz</a>
                                    </li>
                               </ul>
                            </li>
                        </ul>
                        
                        
                    </li>

                    <!-- top level nav item -->
                    <li class="dropdown">
                        <input id="novice-btn" type="checkbox" name="menu"/>
                        <label for="novice-btn">
                            <a <?php echo(($page == 'SSH' or $page == 'Navigation' or $page == 'File Creation' or $page == 'Permissions' or $page == 'Command Line Programs' or $page == 'Basics') ?' class="top-level-active"':'');?>>
                                NOVICE
                            </a>
                        </label>
                        <ul>
							<li <?php echo(($page=='SSH') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>novice/ssh.php">SSH</a>
                            </li>
                            <li <?php echo(($page=='Navigation') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>novice/navigation.php">Navigation</a>
                            </li>
                            <li <?php echo(($page=='File Creation') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>novice/filecreation.php">File Creation</a>
                            </li>
                            <li <?php echo(($page=='Permissions') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>novice/permissions.php">Permissions</a>
                            </li>
                            <li <?php echo(($page=='Command Line Programs') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>novice/commandlineprograms.php">Command Line Programs</a>
                            </li>
                            <li <?php echo(($page=='Basics') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>novice/basics.php">Basics</a>
                            </li>
                        </ul>
                    </li>

                    <!-- top level nav item -->
                    <li class="dropdown">
                        <input id="intermediate-btn" type="checkbox" name="menu"/>
                        <label for="intermediate-btn">
                            <a <?php echo(($page == 'System Information' or $page == 'Pip/Yum' or $page == 'Processes' or $page == 'Root Level' or $page == 'Commands') ?' class="top-level-active"':'');?>>
                                INTERMEDIATE
                            </a>
                        </label>
                        <ul>
                            <li <?php echo(($page=='System Information') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>intermediate/systeminformation.php">System Information</a>
                            </li>
                            <li <?php echo(($page=='Pip/Yum') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>intermediate/pipyum.php">Pip/Yum</a>
                            </li>
                            <li <?php echo(($page=='Processes') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>intermediate/processes.php">Processes</a>
                            </li>
                            <li <?php echo(($page=='Root Level') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>intermediate/rootlevel.php">Root Level</a>
                            </li>
                            <li <?php echo(($page=='Commands') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>intermediate/commands.php">Commands</a>
                            </li>
                        </ul>
                    </li>

                    <!-- top level nav item -->
                    <li class="dropdown">
                        <input id="advanced-btn" type="checkbox" name="menu"/>
                        <label for="advanced-btn">
                            <a <?php echo(($page == 'Advanced Programs' or $page == 'Regular Expressions' or $page == 'Users' or $page == 'Advanced Commands') ?' class="top-level-active"':'');?>>
                                ADVANCED
                            </a>
                        </label>
                        <ul>
                            <li <?php echo(($page=='Advanced Programs') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>advanced/advancedprograms.php">Advanced Programs</a>
                            </li>
                            <li <?php echo(($page=='Regular Expressions') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>advanced/regularexpressions.php">Regular Expressions</a>
                            </li>
                            <li <?php echo(($page=='Users') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>advanced/users.php">Users</a>
                            </li>
                            <li <?php echo(($page=='Advanced Commands') ?' class="active"':'');?>>
                                <a href="<?php echo $path;?>advanced/advancedcommands.php">Advanced Commands</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
