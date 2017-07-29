<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js" integrity="sha384-C/LoS0Y+QiLvc/pkrxB48hGurivhosqjvaTeRH7YLTf2a6Ecg7yMdQqTD3bdFmMO" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>

<script>
    if (navigator.serviceWorker) {
        navigator.serviceWorker.register('/sw.js')
            .then(function(reg) {
                console.log('Service Worker registered successfully!');
            }).catch(function(err) {
                console.log('Error?');
            });
    }
</script>

@yield('extraScripts')
