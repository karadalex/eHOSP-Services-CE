$(document).on('click', function() {
    $(document).ready(function() {
        $('#action').change(function() {
            // Grab the value selected
            selection = this.value;
            if (selection !== 'null') {
            	window[selection]();
            };
        });
    });
});

$(document).on('click', function() {
    $(document).ready(function() {
        $('#sensor').change(function() {
            // Grab the value selected
            selection = this.value;
            if (selection !== 'null') {
            	window[selection]();
            };
        });
    });
});

$(document).on('click', function() {
    $(document).ready(function() {
        $('#flow').change(function() {
            // Grab the value selected
            selection = this.value;
            if (selection !== 'null') {
            	window[selection]();
            };
        });
    });
});

$(document).on('click', function() {
    $(document).ready(function() {
        $('#data').change(function() {
            // Grab the value selected
            selection = this.value;
            if (selection !== 'null') {
            	window[selection]();
            };
        });
    });
});

$(document).on('click', function() {
    $(document).ready(function() {
        $('#advanced').change(function() {
            // Grab the value selected
            selection = this.value;
            if (selection !== 'null') {
            	window[selection]();
            };
        });
    });
});

$(document).on('click', function() {
    $(document).ready(function() {
        $('#ready-surgical-tasks').change(function() {
            // Grab the value selected
            selection = this.value;
            if (selection !== 'null') {
            	window[selection]();
            };
        });
    });
});