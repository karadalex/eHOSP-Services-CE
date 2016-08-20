@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Research Platform</h1>
			<ul id="buttons">
				<?php include config('global.methods') . '/generators.php'; ?>
				{{ echo li(button("services/research-platform/ml", "Machine Learning Lab")) }}
				{{ echo li(button("services/research-platform/med-software", "Medicine Software")) }}
				{{ echo li(button("services/research-platform/py-platform", "Scientific Python")) }}
			</ul>
        </div>
    </div>
</div>
@endsection
