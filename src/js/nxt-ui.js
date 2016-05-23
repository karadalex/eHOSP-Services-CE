/*******************************************************************************
* Main Functions
*
*******************************************************************************/

var tasks_history = [];
var current_task = {};

function __modal__(header, htmlBody) {
    var html = `
        <div class="modal-content">
        <div class="modal-header">
            <span class="close">Χ</span>
            <h2>` + header + `</h2>
        </div>
        <div class="modal-body">
            ` + htmlBody + `
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
    var all_tasks = document.getElementById("tasks-list");
    all_tasks.innerHTML += "<li>test</li>";
    document.getElementById('taskModal').style.display = "none";
    tasks_history.push(current_task);
}




/*******************************************************************************
* Task Functions
*
*******************************************************************************/

function nxt_motor() {
    motorHTML = `
    <div class="parent clearfix">
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
                <input type="checkbox" name="power">Motor Power<br>
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
    </div>
    `;
    __modal__("Motor", motorHTML);
}

function nxt_sound() {

}

function nxt_display() {

}

function nxt_send_msg() {

}

function nxt_lamp() {

}

function nxt_touch() {

}

function nxt_sound_sensor() {

}

function nxt_light() {

}

function nxt_ultrasonic() {

}

function nxt_nxt_btns() {

}

function nxt_rotation() {

}

function nxt_timer() {

}

function nxt_receive_msg() {

}

function nxt_color() {

}

function nxt_wait() {

}

function nxt_loop() {

}

function nxt_switch() {

}

function nxt_stop() {

}

function nxt_logic() {

}

function nxt_math() {

}

function nxt_compare() {

}

function nxt_range() {

}

function nxt_random() {

}

function nxt_variable() {

}

function nxt_constant() {

}

function nxt_num_to_text() {

}

function nxt_text() {

}

function nxt_alive() {

}

function nxt_file() {

}

function nxt_calibrate() {

}

function nxt_reset_motor() {

}

function nxt_bluetooth() {

}
