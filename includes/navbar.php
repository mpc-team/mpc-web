<nav role="navigation" class="navbar navbar-default navbar-inverse">

	<!-- Home Page and Navigation Toggle -->
	<div class="navbar-header">
		<button type="button" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle">
			<span class="sr-only">Toggle Navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	
		<ul class="nav navbar-nav">	
		<?php 
			$active = "class='active'";
			$unactive = "";
			
			$class = ($active_tab == "index") ? $active : $unactive;
			$navig = "<li {$class}> <a href='../index.php' class='navbar-brand'>MPC</a> </li>";
			echo $navig;
		  ?>
		 </ul>
				
	</div> 

	<!-- Navigation Links -->
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
		<?php 
			$class = ($active_tab == "contact") ? $active : $unactive;
			$navig = "<li {$class} > <a href='../contact/index.php'>Contact</a> </li>";
			echo $navig;
			
			$class = ($active_tab == "roster") ? $active : $unactive;
			$navig = "<li {$class} > <a href='../roster/index.php'>Clan Roster</a> </li>";
			echo $navig;
			
			$class = ($active_tab == "gaming") ? $active : $unactive;
			$navig = "<li {$class} > <a href='../gaming/index.php'>Gaming Room</a> </li>";
			echo $navig;
		 ?>
		</ul>
		  
		<ul class="nav navbar-nav navbar-right">
		<?php
			$class = ($active_tab == "login") ? $active : $unactive;
			$navig = "<li {$class}> <a class='logintext' href='../login/index.php'>Login</a> </li>";
			
			echo $navig;
		 ?>
		</ul>
	</div>
	
</nav>