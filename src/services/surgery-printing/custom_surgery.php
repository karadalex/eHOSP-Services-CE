<?php
require_once '../../core/init.php';
chdir(dirname(__FILE__));
?>



<!DOCTYPE html>
<html class="no-js'" lang="en">
<head>
	<title>Custom Surgery Design</title>
	<?php
		include '../../includes/php/head.php';
	?>
	<link rel="stylesheet" type="text/css" href="css/forms.css">
	<link rel="stylesheet" type="text/css" href="css/surgDesign-interface.css">
</head>
<body>
	<div id="container">
		<?php
			include '../../includes/php/header.php';
		?>


		<?php
        if(Session::exists('home')) {
            echo '<p>' . Session::flash('home'). '</p>';
        }
        $user = new User(); //Current
        if($user->isLoggedIn()) {
        ?>

		<script src="js/nxt/main.js"></script>
		<link rel="stylesheet" href="css/modal.css" media="screen" title="no title" charset="utf-8">

		<div class="row">
	        <h1>Custom Surgery Design</h1>
	        <p>
	        	Design your own surgical task or procedure
			</p>

			<form method="post">
				<div id="interface">
					<div id="left-panel" class="input-list style-1 clearfix">
						<ul id="tasks">
							<li>
								<h2>Add Task</h2>
							</li>
							<li>
								Action
								<select name="action">
									<option value="null"> ... </option>
									<option value="motor" onclick="loadScript('js/nxt/nxt_motor.js')">Motor</option>
									<option value="sound" onclick="loadScript('js/nxt/nxt_sound.js')">Sound</option>
									<option value="display" onclick="loadScript('js/nxt/nxt_display.js')">Display</option>
									<option value="send_msg" onclick="loadScript('js/nxt/nxt_send_msg.js')">Send Message</option>
									<option value="lamp" onclick="loadScript('js/nxt/nxt_lamp.js')">Color Lamp</option>
								</select>
							</li>
							<li>
								Sensor
								<select name="sensor">
									<option value="null"> ... </option>
									<option value="touch" onclick="loadScript('js/nxt/nxt_touch.js')">Touch Sensor</option>
									<option value="sound" onclick="loadScript('js/nxt/nxt_sound_sensor.js')">Sound Sensor</option>
									<option value="light" onclick="loadScript('js/nxt/nxt_light.js')">Light Sensor</option>
									<option value="ultrasonic" onclick="loadScript('js/nxt/nxt_ultrasonic.js')">Ultrasonic Sensor</option>
									<option value="nxt_btns" onclick="loadScript('js/nxt/nxt_btns.js')">NXT Buttons</option>
									<option value="rotation" onclick="loadScript('js/nxt/nxt_rotation.js')">Rotation Sensor</option>
									<option value="timer" onclick="loadScript('js/nxt/nxt_timer.js')">Timer</option>
									<option value="receive_msg" onclick="loadScript('js/nxt/nxt_receive_msg.js')">Receive Message</option>
									<option value="color" onclick="loadScript('js/nxt/nxt_color.js')">Color Sensor</option>
								</select>
							</li>
							<li>
								Flow
								<select name="flow">
									<option value="null"> ... </option>
									<option value="wait" onclick="loadScript('js/nxt/nxt_wait.js')">Wait</option>
									<option value="loop" onclick="loadScript('js/nxt/nxt_loop.js')">Loop</option>
									<option value="switch" onclick="loadScript('js/nxt/nxt_switch.js')">Switch</option>
									<option value="stop" onclick="loadScript('js/nxt/nxt_stop.js')">Stop</option>
								</select>
							</li>
							<li>
								Data
								<select name="data">
									<option value="null"> ... </option>
									<option value="logic" onclick="loadScript('js/nxt/nxt_logic.js')">Logic</option>
									<option value="math" onclick="loadScript('js/nxt/nxt_math.js')">Math</option>
									<option value="compare" onclick="loadScript('js/nxt/nxt_compare.js')">Compare</option>
									<option value="range" onclick="loadScript('js/nxt/nxt_range.js')">Range</option>
									<option value="random" onclick="loadScript('js/nxt/nxt_random.js')">Random</option>
									<option value="variable" onclick="loadScript('js/nxt/nxt_variable.js')">Variable</option>
									<option value="constant" onclick="loadScript('js/nxt/nxt_constant.js')">Constant</option>
								</select>
							</li>
							<li>
								Advanced
								<select name="advanced">
									<option value="null"> ... </option>
									<option value="num_to_text" onclick="loadScript('js/nxt/nxt_num_to_text.js')">Number to Text</option>
									<option value="text" onclick="loadScript('js/nxt/nxt_text.js')">Text</option>
									<option value="alive" onclick="loadScript('js/nxt/nxt_alive.js')">Keep Alive</option>
									<option value="file" onclick="loadScript('js/nxt/nxt_file.js')">File Access</option>
									<option value="calibrate" onclick="loadScript('js/nxt/nxt_calibrate.js')">Calibrate</option>
									<option value="reset_motor" onclick="loadScript('js/nxt/nxt_reset_motor.js')">Reset Motor</option>
									<option value="bluetooth" onclick="loadScript('js/nxt/nxt_bluetooth.js')">Bluetooth Connection</option>
								</select>
							</li>
							<li>
								Ready Surgical Tasks
								<select name="advanced">
									<option value="null"> ... </option>

								</select>
							</li>
						</ul>
					</div>

					<div id="right-panel">
						<div id="tasks-contents">
							<ol id="tasks-list"></ol>
						</div>
					</div>
				</div>

				<div id="taskModal" class="modal input-list style-1 clearfix"></div>

				<input type="submit" value="Submit Surgery Procedure">
			</form>
      	</div>


      	<?php
        } else {
        ?>
        <div class="row">
        	<h1>
	        	Error
	        </h1>
        	<p>
        		You are currently not Signed In!<br>
        		Please <a href='sign.php'>Sign In</a> or <a href='register.php'>Register</a>
        	</p>
        </div>
        <?php
        }
        ?>

	</div>

	<?php include '../../includes/php/footer.php'; ?>

	<script src="js/foundation.min.js"></script>
    <script>
    	$(document).foundation();
    </script>
</body>
</html>
