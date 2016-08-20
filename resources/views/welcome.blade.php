@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="main">
    	        <h1 style="margin-bottom: 70px"> Welcome to eHOSP</h1>
    	        <p>
    				Welcome to eHOSP, the hospital on the cloud,
    				a platform for e-health and e-medicine!
    			</p>
    			<p>
    				Click below to get started
    			</p>
    			<p>
                    <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <a class="services" style="height:70px" href="{{ url('/home') }}">Get Started</a>
                    </div>
    			</p>
        	</div>
        </div>
    </div>
</div>
@endsection
