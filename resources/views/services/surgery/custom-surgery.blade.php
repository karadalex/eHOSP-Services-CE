@extends('layouts.app')

@section('headExtra')
<link rel="stylesheet" href="{{ asset('css/surgDesign-interface.css') }}">
<link rel="stylesheet" href="{{ asset('css/modal.css') }}">
<link rel="stylesheet" href="{{ asset('css/forms.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
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
								<select id="action">
									<option value="null"> ... </option>
									<option value="nxt_motor">Motor</option>
									<option value="nxt_sound">Sound</option>
									<option value="nxt_display">Display</option>
									<option value="nxt_send_msg">Send Message</option>
									<option value="nxt_lamp">Color Lamp</option>
								</select>
							</li>
							<li>
								Sensor
								<select id="sensor">
									<option value="null"> ... </option>
									<option value="nxt_touch">Touch Sensor</option>
									<option value="nxt_sound_sensor">Sound Sensor</option>
									<option value="nxt_light">Light Sensor</option>
									<option value="nxt_ultrasonic">Ultrasonic Sensor</option>
									<option value="nxt_btns">NXT Buttons</option>
									<option value="nxt_rotation">Rotation Sensor</option>
									<option value="nxt_timer">Timer</option>
									<option value="nxt_receive_msg">Receive Message</option>
									<option value="nxt_color">Color Sensor</option>
								</select>
							</li>
							<li>
								Flow
								<select id="flow">
									<option value="null"> ... </option>
									<option value="nxt_wait">Wait</option>
									<option value="nxt_loop">Loop</option>
									<option value="nxt_switch">Switch</option>
									<option value="nxt_stop">Stop</option>
								</select>
							</li>
							<li>
								Data
								<select id="data">
									<option value="null"> ... </option>
									<option value="nxt_logic">Logic</option>
									<option value="nxt_math">Math</option>
									<option value="nxt_compare">Compare</option>
									<option value="nxt_range">Range</option>
									<option value="nxt_random">Random</option>
									<option value="nxt_variable">Variable</option>
									<option value="nxt_constant">Constant</option>
								</select>
							</li>
							<li>
								Advanced
								<select id="advanced">
									<option value="null"> ... </option>
									<option value="nxt_num_to_text">Number to Text</option>
									<option value="nxt_text">Text</option>
									<option value="nxt_alive">Keep Alive</option>
									<option value="nxt_file">File Access</option>
									<option value="nxt_calibrate">Calibrate</option>
									<option value="nxt_reset_motor">Reset Motor</option>
									<option value="nxt_bluetooth">Bluetooth Connection</option>
								</select>
							</li>
							<li>
								Ready Surgical Tasks
								<select id="ready-surgical-tasks">
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
    </div>
</div>
@endsection

@section('extraScripts')
<script src="{{ asset('js/nxt-ui.js') }}"></script>
<script src="{{ asset('js/nxt-events.js') }}"></script>
@endsection
