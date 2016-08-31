@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1> @lang('nav.My Profile') </h1>
                </div>
                <div class="panel-body">
                    <h2>
                        @lang('nav.Profile Picture')
                        <a href="settings" class="pull-right"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                    </h2>
                    <hr>
                    <div class="row" style="margin-top:20px">
                        <div class="col-md-3 col-md-offset-1">
                            <img src="{{ Storage::url(Auth::user()->avatar) }}" alt="avatar" class="avatar-big" />
                        </div>
                    </div>

                    <h2>
                        @lang('nav.User Details')
                        <a href="settings" class="pull-right"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                    </h2>
                    <hr>
                    <div class="row" style="margin-top:20px">
                        <div class="col-md-3 col-md-offset-1">
                            <span class="emphasize"> @lang('nav.Username') </span>
                        </div>
                        <div class="col-md-4">
                            {{ Auth::user()->username }}
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px">
                        <div class="col-md-3 col-md-offset-1">
                            <span class="emphasize"> @lang('nav.Name') </span>
                        </div>
                        <div class="col-md-4">
                            {{ strtoupper(Auth::user()->first_name . " " . Auth::user()->last_name) }}
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px">
                        <div class="col-md-3 col-md-offset-1">
                            <span class="emphasize"> @lang('nav.User Type') </span>
                        </div>
                        <div class="col-md-4">
                            {{ Auth::user()->user_type }}
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px">
                        <div class="col-md-3 col-md-offset-1">
                            <span class="emphasize"> @lang('nav.Age') </span>
                        </div>
                        <div class="col-md-4">
                            {{ Auth::user()->age }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
