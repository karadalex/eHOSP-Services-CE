@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1> @lang('services.Communication') </h1>
			<p>
				Click below to choose how you want to communicate:
				<br>
		        <div class="expanded button-group">
                    <div class="col-xs-12 col-sm-4 col-xs-offset-0 col-sm-offset-1">
                        <a class="button full-width" href="communication/messages">Messages</a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-xs-offset-0 col-sm-offset-1">
                        <a class="button full-width" href="communication/video-chat">Video Chat</a>
                    </div>
				</div>
			</p>
        </div>
    </div>
</div>
@endsection
