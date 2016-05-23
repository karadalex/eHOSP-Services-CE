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
            <button type="button" class="services" onclick="">
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

function nxt_motor() {
    motorHTML = `
    <p> Motor HTML </p>
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
