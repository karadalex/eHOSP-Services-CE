@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1> @lang('nav.Settings') </h1>
                </div>
                <div class="panel-body">
                    <form class="" action="" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row" style="margin-top:20px">
                            <div class="col-md-3 col-md-offset-1">
                                <span class="emphasize"> Profile Picture </span>
                            </div>
                            <div class="col-md-4">
                                <input type="file" name="avatar" value="">
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col-md-3 col-md-offset-1">
                                <span class="emphasize"> Username </span>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="username" placeholder="{{ Auth::user()->username }}">
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col-md-3 col-md-offset-1">
                                <span class="emphasize"> User Type </span>
                            </div>
                            <div class="col-md-4">
                                <select class="full-width" name="user_type">
                                    @foreach (include config('global.data').'/userTypes.php' as $userType)
                                        <option value="{{ $userType }}" {{ Auth::user()->user_type == $userType ? "selected" : "" }}> {{ $userType }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px">
                            <div class="col-md-3 col-md-offset-1">
                                <span class="emphasize"> Language </span>
                            </div>
                            <div class="col-md-4">
                                <select class="full-width" name="language">
                                    @foreach (include config('global.data').'/LangToLangCode.php' as $langName => $langCode)
                                        <option value="{{ $langCode }}" {{ Auth::user()->language == $langCode ? "selected" : "" }}> {{ $langName }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="width:60%;margin-top:50px;">
                                    Save Changes
                                </button>
                            </div>
                        </div>
                    </form>

                    @if (isset($message))
                    <div class="row" style="margin-top:20px">
                        <div class="col-sm-10 col-sm-offset-1">
                            <p style="text-align:center;color:#2bb673;margin-top:20px"> {{ $message }} </p>
                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
