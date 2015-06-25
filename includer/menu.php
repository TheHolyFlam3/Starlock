<body>
	<a id="top"></a>
	<div class="menu-bg">
		<div class="menu">
			<ul>
				<li><a <?php if($curpage == 'index.php'){echo'class="active"';}?> href="index.php">Home</a></li>
				<li><a <?php if($curpage == 'download.php'){echo'class="active"';}?> href="download.php">Download</a></li>
				<li class="end"><a <?php if($curpage == 'forum.php'){echo'class="active"';} ?>href="forum.php">Forums</a><li>
				<li class="login"><a href="login.php">Log in</a></li>
				<li class="end"><a href="register.php">Register</a></li>
			</ul>
		</div>
	</div>
</body>