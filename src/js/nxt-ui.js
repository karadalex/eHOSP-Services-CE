/*******************************************************************************
* Main Functions
*
*******************************************************************************/

var tasks_history = [];
var current_task = {};
var current_task_inputs = [];
var lists = document.getElementsByTagName('select');

function __modal__(header, htmlBody) {
    var html = `
        <div class="modal-content">
        <div class="modal-header">
            <span class="close">Χ</span>
            <h2>` + header + `</h2>
        </div>
        <div class="modal-body">
            <div class="parent clearfix">
                ` + htmlBody + `
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" onclick="add_task()" style="width:50%; margin-top:20px; margin-left: 25%;">
                Add Task
            </button>
        </div>
        </div>
    `;
    var modal = document.getElementById('taskModal');
    modal.innerHTML = html;
    modal.style.display = "block";

    var span = document.getElementsByClassName("close")[0];
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
}

function add_task() {
    for (var i = 0; i < current_task_inputs.length; i++) {
        console.log(current_task_inputs[i]);
    }

    var all_tasks = document.getElementById("tasks-list");
    all_tasks.innerHTML += "<li>test</li>";
    document.getElementById('taskModal').style.display = "none";
    tasks_history.push(current_task);

    for (var i = 0; i < lists.length; i++) {
        lists[i].value = "null";
    }
}

function fileUpload() {
    var x = document.getElementById("myFile");
    var txt = "";
    if ('files' in x) {
        if (x.files.length == 0) {
            txt = "Select one or more files.";
        } else {
            for (var i = 0; i < x.files.length; i++) {
                txt += "<br><strong>" + (i+1) + ". file</strong><br>";
                var file = x.files[i];
                if ('name' in file) {
                    txt += "name: " + file.name + "<br>";
                }
                if ('size' in file) {
                    txt += "size: " + file.size + " bytes <br>";
                }
            }
        }
    }
    document.getElementById ("demo").innerHTML = txt;
}




/*******************************************************************************
* Task Functions
*
*******************************************************************************/

function nxt_motor() {
    motorHTML = `
    <div id="left">
        <div id="port">
            <h3>Port</h3>
            <input type="radio" name="port" value="A"> A
            <input type="radio" name="port" value="B"> B
            <input type="radio" name="port" value="C"> C
        </div>
        <hr>
        <div id="direction">
            <h3>Direction</h3>
            <input type="radio" name="direction" value="forward">
            <i class="fa fa-arrow-up" aria-hidden="true"></i>
            <input type="radio" name="direction" value="backward">
            <i class="fa fa-arrow-down" aria-hidden="true"></i>
            <input type="radio" name="direction" value="stop">
            <i class="fa fa-hand-paper-o" aria-hidden="true"></i>
        </div>
        <hr>
        <div id="action">
            <h3>Action</h3>
            <select class="" name="action">
                <option value="null"> Select action ... </option>
                <option value="const"> Constant </option>
                <option value="rampup"> Ramp Up </option>
                <option value="rampdown"> Ramp Down </option>
            </select>
        </div>
        <hr>
        <div id="power">
            <h3>Power</h3>
            <input type="range" name="power" value="60">
        </div>
        <hr>
    </div>
    <div id="right">
        <div id="control">
            <h3>Control</h3>
            <input type="checkbox" name="ctrl_power">Motor Power<br>
        </div>
        <hr>
        <div id="duration">
            <h3>Duration</h3>
            <select class="" name="duration_type">
                <option value="null"> Select type ... </option>
                <option value="unlimited"> Unlimited </option>
                <option value="degrees"> Degrees </option>
                <option value="rotations"> Rotations </option>
                <option value="seconds"> Seconds </option>
            </select>
            <br>
            <input type="number" name="duration_value" value="">
        </div>
        <hr>
        <div id="wait">
            <h3>Wait</h3>
            <input type="checkbox" name="wait">Wait for Completion
            <i class="fa fa-flag-checkered" aria-hidden="true"></i>
        </div>
        <hr>
        <div id="next">
            <h3>Next Action</h3>
            <input type="radio" name="next" value="brake"> Brake
            <input type="radio" name="next" value="coast"> Coast
        </div>
    </div>
    `;
    __modal__("Motor", motorHTML);
    current_task_inputs = [["port", "radio"], ["direction", "radio"], ["action", "select"], ["power", "range"], ["ctrl_power", "checkbox"],
                           ["duration_type", "select"], ["duration_value", "number"], ["wait", "checkbox"], ["next", "radio"]];
}

function nxt_sound() {
    soundHTML = `
    <div id="left">
        <div id="action">
            <h3>Action</h3>
            <input type="radio" name="action" value="sound"> Sound File
            <input type="radio" name="action" value="tone"> Tone
        </div>
        <hr>
        <div id="control">
            <h3>Control</h3>
            <input type="radio" name="control" value="play">
            <i class="fa fa-play" aria-hidden="true"></i>
            <input type="radio" name="control" value="pause">
            <i class="fa fa-pause" aria-hidden="true"></i>
            <input type="radio" name="control" value="stop">
            <i class="fa fa-stop" aria-hidden="true"></i>
        </div>
        <hr>
        <div id="volume">
            <h3>Volume</h3>
            <i class="fa fa-volume-up" aria-hidden="true"></i>
            <input type="range" name="volume" value="60">
        </div>
        <hr>
    </div>
    <div id="right">
        <div id="function">
            <h3>Function</h3>
            <input type="checkbox" name="repeat">Repeat
            <i class="fa fa-repeat" aria-hidden="true"></i>
        </div>
        <hr>
        <div id="file">
            <h3>File</h3>
            <input type="file" id="fileUpload" multiple size="50" onchange="fileUpload()">
        </div>
        <hr>
        <div id="wait">
            <h3>Wait</h3>
            <input type="checkbox" name="wait">Wait for Completion
            <i class="fa fa-flag-checkered" aria-hidden="true"></i>
        </div>
    </div>
    `;
    __modal__("Sound", soundHTML);
}

function nxt_display() {
    displayHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Display", displayHTML);
}

function nxt_send_msg() {
    sendmsgHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Send Message", sendmsgHTML);
}

function nxt_lamp() {
    lampHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Color Lamp", lampHTML);
}

function nxt_touch() {
    touchHTML = `
    <div id="left">
        <div id="port">
            <h3>Port</h3>
            <input type="radio" name="port" value="1"> 1
            <input type="radio" name="port" value="2"> 2
            <input type="radio" name="port" value="3"> 3
            <input type="radio" name="port" value="4"> 4
        </div>
        <hr>
    </div>
    <div id="right">
        <div id="action">
            <h3>Action</h3>
            <input type="radio" name="port" value="pressed"> Pressed <br>
            <input type="radio" name="port" value="released"> Released <br>
            <input type="radio" name="port" value="bumped"> Bumped <br>
        </div>
    </div>
    `;
    __modal__("Touch Sensor", touchHTML);
}

function nxt_sound_sensor() {
    soundHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Sound Sensor", soundHTML);
}

function nxt_light() {
    lightHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Light Sensor", lightHTML);
}

function nxt_ultrasonic() {
    ultrasonicHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Ultrasonic Sensor", ultrasonicHTML);
}

function nxt_btns() {
    btnsHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("NXT Buttons", btnsHTML);
}

function nxt_rotation() {
    rotationHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Rotation Sensor", rotationHTML);
}

function nxt_timer() {
    timerHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Timer", timerHTML);
}

function nxt_receive_msg() {
    recmsgHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Receive Message", recmsgHTML);
}

function nxt_color() {
    colorHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Color Sensor", colorHTML);
}

function nxt_wait() {
    waitHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Wait", waitHTML);
}

function nxt_loop() {
    loopHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Loop", loopHTML);
}

function nxt_switch() {
    switchHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Switch", switchHTML);
}

function nxt_stop() {
    stopHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Stop", stopHTML);
}

function nxt_logic() {
    logicHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Logic", logicHTML);
}

function nxt_math() {
    mathHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Math", mathHTML);
}

function nxt_compare() {
    compareHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Compare", compareHTML);
}

function nxt_range() {
    rangeHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Range", rangeHTML);
}

function nxt_random() {
    randomHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Random", randomHTML);
}

function nxt_variable() {
    variableHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Variable", variableHTML);
}

function nxt_constant() {
    constantHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Constant", constantHTML);
}

function nxt_num_to_text() {
    numtotxtHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Number to Text", numtotxtHTML);
}

function nxt_text() {
    textHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Text", textHTML);
}

function nxt_alive() {
    aliveHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Keep Alive", aliveHTML);
}

function nxt_file() {
    fileHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("File Access", fileHTML);
}

function nxt_calibrate() {
    calibrHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Calibrate", calibrHTML);
}

function nxt_reset_motor() {
    resetHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Reset Motor", resetHTML);
}

function nxt_bluetooth() {
    bthHTML = `
    <div id="left">

    </div>
    <div id="right">

    </div>
    `;
    __modal__("Bluetooth Connection", bthHTML);
}
