@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="main">
				@if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
				@endif
    	        <h1 style="margin-bottom: 70px"> @lang('titles.Welcome to eHOSP') </h1>
    	        <p>
    				Welcome to eHOSP, the hospital on the cloud,
    				a platform for e-health and e-medicine!
    			</p>
				<p>
					eHOSP is a hospital that runs in the Cloud and executes 
					physical tasks with Robotics. It aims to be a complete smart platform 
					to improve healthcare and well-being with new technologies such as 
					wearables, IoT, drones, Artificial Intelligence and of course Robotics
				</p>
				<br>
    			<p>
    				Click below to get started or <a href="/about">learn more</a>
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
