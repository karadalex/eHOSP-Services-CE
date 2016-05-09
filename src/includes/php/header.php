<?php
chdir(dirname(__FILE__));
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>


<style>
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200px;
    box-shadow: 0px 32px 32px 0px rgba(0,0,0,0.2);
    padding: 0 0;
    z-index: 9;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.me_menu {
	width: 100%;
}
</style>


<header>
	<a id="toggleMenu"><img src="media/img/menu.png" /></a>
	<div class="row">
		<ul>
			<li><img src="media/img/LOGO_big.png" /></li>
			<li>
				<ul id="menu">
					<li id="menuOut"><img src="media/img/back.png" /></li>
					<li><a class="menu" href="index.php">Home</a></li>
					<li><a class="menu" href="about.php">About</a></li>
					<li><a class="menu" href="#">Doc</a></li>
					<li><a class="menu" href="contact.php">Contact</a></li>

					<?php
			        if(Session::exists('home')) {
			            echo '<p>' . Session::flash('home'). '</p>';
			        }
			        $user = new User(); //Current
			        if($user->isLoggedIn()) {
			        ?>
					<li></li>
					<div class="dropdown">
						<a class="dropdown">Me</a>
						<div class="dropdown-content">
							<li class="me_menu"><a class="menu" href="">My Profile</a></li>
							<li class="me_menu"><a class="menu" href="">Settings</a></li>
							<li class="me_menu"><a class="menu" href="">Logout</a></li>
						</div>
					</div>
					<?php } ?>
				</ul>
			</li>
		</ul>
	</div>
</header>