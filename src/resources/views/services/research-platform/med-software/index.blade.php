@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Medicine Software</h1>
			<ul id="buttons">
				<?php include config('global.methods') . '/generators.php'; ?>
				{{ echo li(button("services/research-platform/med-software/neurodeb", "Neuro-Debian")) }}
			</ul>
        </div>
    </div>
</div>
@endsection
