@extends('layouts.app')

@section('headExtra')
<link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<h1>Video Communication</h1>
	        <br>

            <div class="dashboard-container">
                <div class="dashboard-header">
                    <span>Video Chat Dashboard</span>
                    <hr>
                </div>
                <div class="dashboard-sidebar">

                </div>
                <div class="dashboard-main">
                    <video class="my-video dashboard-video" controls autoplay>Test</video>
                </div>
                <i class="fa fa-arrows-alt fa-lg dashboard-fullscreen" aria-hidden="true"></i>
            </div>

            <div class="blank-space"></div>
        </div>
    </div>
</div>
@endsection

@section('extraScripts')
<script src="{{ asset('js/dashboard.js') }}"></script>
<script src="{{ asset('js/video-chat.js') }}"></script>
@endsection
