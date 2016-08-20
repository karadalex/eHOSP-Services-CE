@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<h1>Surgery Design</h1>
	        <p>
	        	Design a surgical procedure to be executed remotely with a surgical robotical
	        	mechanism
			</p>
			<ul id="buttons">
				<?php include config('global.methods') . '/generators.php'; ?>
				{{ echo li(button("services/surgery-printing/surgery-sample-tasks", "Sample Tasks")) }}
				{{ echo li(button("services/surgery-printing/custom-surgery", "Design your own Task")) }}
			</ul>
        </div>
    </div>
</div>
@endsection
