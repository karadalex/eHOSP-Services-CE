@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1> My Profile </h1>
                </div>
                <div class="panel-body">
                    <h2>
                        User Details
                        <a href="settings" class="pull-right"><i class="fa fa-cogs" aria-hidden="true"></i></a>
                    </h2>
                    <hr>
                    <div class="row" style="margin-top:20px">
                        <div class="col-md-3 col-md-offset-1">
                            <span class="emphasize"> Username </span>
                        </div>
                        <div class="col-md-4">
                            {{ Auth::user()->username }}
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px">
                        <div class="col-md-3 col-md-offset-1">
                            <span class="emphasize"> Name </span>
                        </div>
                        <div class="col-md-4">
                            {{ strtoupper(Auth::user()->first_name . " " . Auth::user()->last_name) }}
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px">
                        <div class="col-md-3 col-md-offset-1">
                            <span class="emphasize"> User Type </span>
                        </div>
                        <div class="col-md-4">
                            {{ Auth::user()->user_type }}
                        </div>
                    </div>
                    <div class="row" style="margin-top:10px">
                        <div class="col-md-3 col-md-offset-1">
                            <span class="emphasize"> Age </span>
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
