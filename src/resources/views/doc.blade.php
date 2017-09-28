@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-md-10 col-md-offset-1">
            <h1> @lang('nav.Documentation') </h1>
            <p>
				Welcome to eHOSP, the hospital on the cloud,
				a platform for e-health and e-medicine!
			</p>
			<div class="expanded button-group">
                <div class="row" style="margin-top:50px">
                    <div class="col-xs-12 col-sm-5 col-sm-offset-1">
                        <a class="button full-width" href="#">For Users</a>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-sm-offset-1">
                        <a class="button full-width" href="https://karadalex.gitbooks.io/ehosp-documentation/content/">For Developers</a>
                    </div>
                </div>
			</div>
        </div>
    </div>
</div>
@endsection
