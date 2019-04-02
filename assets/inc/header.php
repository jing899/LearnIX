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
                            <a>Content Citations</a>
                            <a>Competitive Analysis Citations</a>
                        </div>
                    </li>
                    <li class="dropdown"><a class="dropbtn">ADVANCED</a>
                        <div class="dropdown-content">
                            <a>Advanced Programs</a>
							<a>Advanced Programs Quiz</a>
                            <a>Regular Expressions</a>
							<a>Regular Expressions Quiz</a>
                            <a>Users</a>
							<a>Users Quiz</a>
                            <a>Advanced Commands</a>
							<a>Advanced Commands Quiz</a>
                        </div>
                    </li>
                    <li class="dropdown"><a class="dropbtn">INTERMEDIATE</a>
                        <div class="dropdown-content">
                            <a>System Information</a>
							<a>System Information Quiz</a>
                            <a>Pip/Yum</a>
							<a>Pip/Yum Quiz</a>
                            <a>Processes</a>
							<a>Processes Quiz</a>
                            <a>Root Level</a>
							<a>Root Level Quiz</a>
                            <a>SSH</a>
							<a>SSH Quiz</a>
                            <a>Commands</a>
							<a>Commands Quiz</a>
                        </div>
                    </li>
                    <li class="dropdown"><a class="dropbtn">NOVICE</a>
                        <div class="dropdown-content">
                            <a>Navigation</a>
							<a>Navigation Quiz</a>
                            <a>File Creation</a>
							<a>File Creation Quiz</a>
                            <a>Permissions</a>
							<a>Permissions Quiz</a>
                            <a>Command Line Programs</a>
							<a>Command Line Programs Quiz</a>
                            <a>Basics</a>
							<a>Basics Quiz</a>
                        </div>
                    </li>
                    <li><a href="">HOME</a>
                        <div class="dropdown-content">
                            <a>Unix Architecture</a>
                            <a>Kernel v.s. Shell</a>
                        </div>
                    </li>
                    <li id="logo">
                        <a href="">
                            <img id="logosize" src="<?php echo $path;?>assets/img/logo.jpg" alt="Logo"/>
                        </a></li>
                </ul>
            </nav>
        </header>