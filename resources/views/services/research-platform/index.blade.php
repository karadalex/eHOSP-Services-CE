@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Research Platform</h1>
			<ul id="buttons">
				<?php include config('global.methods') . '/generators.php'; ?>
				{{ btn("services/research-platform/ml", "Machine Learning Lab") }}
				{{ btn("services/research-platform/med-software", "Medicine Software") }}
				{{ btn("services/research-platform/py-platform", "Scientific Python") }}
			</ul>
        </div>
    </div>
</div>
@endsection
