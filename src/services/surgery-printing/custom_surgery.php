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

<<<<<<< HEAD
		<script src="js/nxt/main.js"></script>
=======
		<script src="js/nxt-ui.js"></script>
>>>>>>> f8ce195e3bc63667b91aaf161e3cc8f62071cc85
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
<<<<<<< HEAD
									<option value="motor" onclick="loadScript('js/nxt/nxt_motor.js')">Motor</option>
									<option value="sound" onclick="loadScript('js/nxt/nxt_sound.js')">Sound</option>
									<option value="display" onclick="loadScript('js/nxt/nxt_display.js')">Display</option>
									<option value="send_msg" onclick="loadScript('js/nxt/nxt_send_msg.js')">Send Message</option>
									<option value="lamp" onclick="loadScript('js/nxt/nxt_lamp.js')">Color Lamp</option>
=======
									<option value="motor" onclick="nxt_motor();">Motor</option>
									<option value="sound" onclick="nxt_sound();">Sound</option>
									<option value="display" onclick="nxt_display()">Display</option>
									<option value="send_msg" onclick="nxt_send_msg()">Send Message</option>
									<option value="lamp" onclick="nxt_lamp()">Color Lamp</option>
>>>>>>> f8ce195e3bc63667b91aaf161e3cc8f62071cc85
								</select>
							</li>
							<li>
								Sensor
								<select name="sensor">
									<option value="null"> ... </option>
<<<<<<< HEAD
									<option value="touch" onclick="loadScript('js/nxt/nxt_touch.js')">Touch Sensor</option>
									<option value="sound" onclick="loadScript('js/nxt/nxt_sound_sensor.js')">Sound Sensor</option>
									<option value="light" onclick="loadScript('js/nxt/nxt_light.js')">Light Sensor</option>
									<option value="ultrasonic" onclick="loadScript('js/nxt/nxt_ultrasonic.js')">Ultrasonic Sensor</option>
									<option value="nxt_btns" onclick="loadScript('js/nxt/nxt_btns.js')">NXT Buttons</option>
									<option value="rotation" onclick="loadScript('js/nxt/nxt_rotation.js')">Rotation Sensor</option>
									<option value="timer" onclick="loadScript('js/nxt/nxt_timer.js')">Timer</option>
									<option value="receive_msg" onclick="loadScript('js/nxt/nxt_receive_msg.js')">Receive Message</option>
									<option value="color" onclick="loadScript('js/nxt/nxt_color.js')">Color Sensor</option>
=======
									<option value="touch" onclick="nxt_touch()">Touch Sensor</option>
									<option value="sound" onclick="nxt_sound_sensor()">Sound Sensor</option>
									<option value="light" onclick="nxt_light()">Light Sensor</option>
									<option value="ultrasonic" onclick="nxt_ultrasonic()">Ultrasonic Sensor</option>
									<option value="nxt_btns" onclick="nxt_btns()">NXT Buttons</option>
									<option value="rotation" onclick="nxt_rotation()">Rotation Sensor</option>
									<option value="timer" onclick="nxt_timer()">Timer</option>
									<option value="receive_msg" onclick="nxt_receive_msg()">Receive Message</option>
									<option value="color" onclick="nxt_color()">Color Sensor</option>
>>>>>>> f8ce195e3bc63667b91aaf161e3cc8f62071cc85
								</select>
							</li>
							<li>
								Flow
								<select name="flow">
									<option value="null"> ... </option>
<<<<<<< HEAD
									<option value="wait" onclick="loadScript('js/nxt/nxt_wait.js')">Wait</option>
									<option value="loop" onclick="loadScript('js/nxt/nxt_loop.js')">Loop</option>
									<option value="switch" onclick="loadScript('js/nxt/nxt_switch.js')">Switch</option>
									<option value="stop" onclick="loadScript('js/nxt/nxt_stop.js')">Stop</option>
=======
									<option value="wait" onclick="nxt_wait()">Wait</option>
									<option value="loop" onclick="nxt_loop()">Loop</option>
									<option value="switch" onclick="nxt_switch()">Switch</option>
									<option value="stop" onclick="nxt_stop()">Stop</option>
>>>>>>> f8ce195e3bc63667b91aaf161e3cc8f62071cc85
								</select>
							</li>
							<li>
								Data
								<select name="data">
									<option value="null"> ... </option>
<<<<<<< HEAD
									<option value="logic" onclick="loadScript('js/nxt/nxt_logic.js')">Logic</option>
									<option value="math" onclick="loadScript('js/nxt/nxt_math.js')">Math</option>
									<option value="compare" onclick="loadScript('js/nxt/nxt_compare.js')">Compare</option>
									<option value="range" onclick="loadScript('js/nxt/nxt_range.js')">Range</option>
									<option value="random" onclick="loadScript('js/nxt/nxt_random.js')">Random</option>
									<option value="variable" onclick="loadScript('js/nxt/nxt_variable.js')">Variable</option>
									<option value="constant" onclick="loadScript('js/nxt/nxt_constant.js')">Constant</option>
=======
									<option value="logic" onclick="nxt_logic()">Logic</option>
									<option value="math" onclick="nxt_math()">Math</option>
									<option value="compare" onclick="nxt_compare()">Compare</option>
									<option value="range" onclick="nxt_range()">Range</option>
									<option value="random" onclick="nxt_random()">Random</option>
									<option value="variable" onclick="nxt_variable()">Variable</option>
									<option value="constant" onclick="nxt_constant()">Constant</option>
>>>>>>> f8ce195e3bc63667b91aaf161e3cc8f62071cc85
								</select>
							</li>
							<li>
								Advanced
								<select name="advanced">
									<option value="null"> ... </option>
<<<<<<< HEAD
									<option value="num_to_text" onclick="loadScript('js/nxt/nxt_num_to_text.js')">Number to Text</option>
									<option value="text" onclick="loadScript('js/nxt/nxt_text.js')">Text</option>
									<option value="alive" onclick="loadScript('js/nxt/nxt_alive.js')">Keep Alive</option>
									<option value="file" onclick="loadScript('js/nxt/nxt_file.js')">File Access</option>
									<option value="calibrate" onclick="loadScript('js/nxt/nxt_calibrate.js')">Calibrate</option>
									<option value="reset_motor" onclick="loadScript('js/nxt/nxt_reset_motor.js')">Reset Motor</option>
									<option value="bluetooth" onclick="loadScript('js/nxt/nxt_bluetooth.js')">Bluetooth Connection</option>
=======
									<option value="num_to_text" onclick="nxt_num_to_text()">Number to Text</option>
									<option value="text" onclick="nxt_text()">Text</option>
									<option value="alive" onclick="nxt_alive()">Keep Alive</option>
									<option value="file" onclick="nxt_file()">File Access</option>
									<option value="calibrate" onclick="nxt_calibrate()">Calibrate</option>
									<option value="reset_motor" onclick="nxt_reset_motor()">Reset Motor</option>
									<option value="bluetooth" onclick="nxt_bluetooth()">Bluetooth Connection</option>
>>>>>>> f8ce195e3bc63667b91aaf161e3cc8f62071cc85
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
