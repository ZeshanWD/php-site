<?php

	$currentPage = $_SERVER['REQUEST_URI'];

?>
<div class="container">
	<ul class="nav nav-pills">
	  <li class="nav-item">
	    <a class="nav-link <?= ($currentPage == "/index.php" || $currentPage == '/') ? 'active' : '' ?>" href="index.php">Home</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?= $currentPage == "/about.php" ? 'active' : '' ?>" href="about.php">About Us</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link <?= $currentPage == "/contact.php" ? 'active' : '' ?>" href="contact.php">Contact</a>
	  </li>
	</ul>
</div>