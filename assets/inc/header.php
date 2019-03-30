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
				<li><a href="">Home</a>
					<ul>
						<li><a>Unix Architecture</a></li>
						<li><a>Kernel v.s. Shell</a></li>
					</ul>
				</li>
				<li><a>Novice</a>
					<ul>
						<li><a>Navigation</a></li>
						<li><a>File Creation</a></li>
						<li><a>Permissions</a></li>
						<li><a>Command Line Programs</a></li>
						<li><a>Basics</a></li>
					</ul>
				</li>
				<li><a>Intermediate</a>
					<ul>
						<li><a>System Information</a></li>
						<li><a>Pip/Yum</a></li>
						<li><a>Processes</a></li>
						<li><a>Root Level</a></li>
						<li><a>SSH</a></li>
						<li><a>Commands</a></li>
					</ul>
				</li>
				<li><a>Advanced</a>
					<ul>
						<li><a>Advanced Programs</a></li>
						<li><a>Regular Expressions</a></li>
						<li><a>Users</a></li>
						<li><a>Advanced Commands</a></li>
						<li><a></a></li>
					</ul>
				</li>
				<li><a>About</a>
					<ul>
						<li><a>Content Citations</a></li>
						<li><a>Competitive Analysis Citations</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>