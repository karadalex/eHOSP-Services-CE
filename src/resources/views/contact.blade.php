@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1> @lang('nav.Contact Us') </h1>

            <div class="qr-code pull-right" style="margin: 10px">
                <?php
                $png = QrCode::format('png')
                                ->size(256)
                                ->margin(0)
                                ->backgroundColor(235,235,235)
                                ->merge('/public/img/512x512.png')
                                ->generate(env('MAIL_FROM_ADDRESS'));
                $png = base64_encode($png);
                ?>
                <img class="small-qr" src="data:image/png;base64,{{ $png }}" alt="" data="Contact"/>
                <div class="big-qr" id="big-qrContact" style="display: none;">
                    <img src="data:image/png;base64,{{ $png }}" alt="" />
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="from">Email address</label>
                            <input type="email" class="form-control" name="from_address" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="message">Message Body</label>
                            <textarea class="form-control" name="message_body" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
