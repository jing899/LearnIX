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
		<img src="<?php echo $path;?>assets/img/logo.jpg" alt="Logo"/>
		<nav id="nav">
			<ul>
				<li><a href="">HOME</a>
					<div class="dropdown-content">
						<a>Unix Architecture</a>
						<a>Kernel v.s. Shell</a>
					</div>
				</li>
				<li class="dropdown"><a class="dropbtn">NOVICE</a>
					<div class="dropdown-content">
						<a>Navigation</a>
						<a>File Creation</a>
						<a>Permissions</a>
						<a>Command Line Programs</a>
						<a>Basics</a>
                    </div>
				</li>
				<li class="dropdown"><a class="dropbtn">INTERMEDIATE</a>
					<div class="dropdown-content">
						<a>System Information</a>
						<a>Pip/Yum</a>
						<a>Processes</a>
						<a>Root Level</a>
						<a>SSH</a>
						<a>Commands</a>
					</div>
				</li>
				<li class="dropdown"><a class="dropbtn">ADVANCED</a>
					<div class="dropdown-content">
						<a>Advanced Programs</a>
						<a>Regular Expressions</a>
						<a>Users</a>
						<a>Advanced Commands</a>
					</div>
				</li>
				<li class="dropdown"><a class="dropbtn">ABOUT</a>
					<div class="dropdown-content">
						<a>Content Citations</a>
						<a>Competitive Analysis Citations</a>
					</div>
				</li>
			</ul>
		</nav>
	</header>
