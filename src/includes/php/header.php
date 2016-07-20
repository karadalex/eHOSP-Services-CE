<style>
.header-row {
  width: 100%;
}

.menu {
  display: block;
}

.mobile-only, #mobile {
  display: none;
}

ul#menu {
  margin-left: 0px;
}

.dropdown {
    position: relative;
    display: inline-block;
    margin-right: 10px;
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

.dropdown-mobile-content {
	display: none;
}

.search {
  display: inline-block;
  position: relative;
  top: 5px;
  left: 0px;
  margin: auto;
  width: 180;
}

.search input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('media/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

.search input[type=text]:focus {
  width: 180px;
}

@media only screen and (max-width: 64.063em) {
  .search {
    display: inline-block;
    position: relative;
    top: 0px;
    left: 0px;
    height: 90%;
  }
}

@media only screen and (max-width: 44.063em) {
  .menu {
    display: none;
  }

  .mobile-only {
    display: block;
  }

	.dropdown-mobile-content {
		display: block;
	}

	.dropdown {
		display: none;
	}

  .search input[type=text] {
    width: 80%;
    position: relative;
    top: 15px;
  }

  .search input[type=text]:focus {
    width: 100%;
  }

	@media only screen and (max-height: 360px) {
		hr.dropdown-mobile-content {
			display: none;
		}
	}
}
</style>


<header>
	<a id="toggleMenu"><img src="media/img/menu.png" /></a>

  <!-- Header for bigger devices -->
	<div class="row header-row">
		<ul>
			<li><img src="media/img/LOGO_big.png" /></li>
			<li>
				<ul id="menu" class="menu">
					<li><a class="menu" href="index.php">Home</a></li>
					<li><a class="menu" href="about.php">About</a></li>
					<li><a class="menu" href="doc.php">Doc</a></li>
					<li><a class="menu" href="contact.php">Contact</a></li>

					<?php
	        // if(Session::exists('home')) {
	        //     echo '<p>' . Session::flash('home'). '</p>';
	        // }
	        $user = new User(); //Current
	        if($user->isLoggedIn()) {
	        ?>

					<div class="dropdown">
						<a class="dropdown">Me</a>
						<div class="dropdown-content">
							<li class="me_menu"><a class="menu" href="profile.php">My Profile</a></li>
							<li class="me_menu"><a class="menu" href="user_settings.php">Settings</a></li>
							<li class="me_menu"><a class="menu" href="signout.php">Logout</a></li>
						</div>
					</div>
					<?php } ?>
          <div class="search">
            <form>
              <input type="text" name="search" placeholder="Search..">
            </form>
          </div>
				</ul>
			</li>
		</ul>
	</div>

  <!-- Header/Side Bar for small devices -->
  <div class="row header-row">
    <ul>
      <li>
        <ul id="mobile" class="mobile-only">
          <li id="menuOut"><img src="media/img/back.png" /></li>
          <li><a class="mobile-only" href="index.php">Home</a></li>
          <li><a class="mobile-only" href="about.php">About</a></li>
          <li><a class="mobile-only" href="doc.php">Doc</a></li>
          <li><a class="mobile-only" href="contact.php">Contact</a></li>


          <?php
          // if(Session::exists('home')) {
          //     echo '<p>' . Session::flash('home'). '</p>';
          // }
          $user = new User(); //Current
          if($user->isLoggedIn()) {
          ?>

          <hr class="dropdown-mobile-content">
          <li class="dropdown-mobile-content"><a class="mobile-only" href="profile.php">My Profile</a></li>
          <li class="dropdown-mobile-content"><a class="mobile-only" href="user_settings.php">Settings</a></li>
          <li class="dropdown-mobile-content"><a class="mobile-only" href="signout.php">Logout</a></li>

          <?php } ?>
          <div class="search center">
            <form>
              <input type="text" name="search" placeholder="Search..">
            </form>
          </div>
        </ul>
      </li>
    </ul>
  </div>
</header>
