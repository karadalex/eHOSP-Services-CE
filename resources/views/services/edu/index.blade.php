@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<h1>Educational Platform</h1>
	        <br>

			<div class="expanded button-group">
                <?php include config('global.methods') . '/generators.php'; ?>
                {{ btn("services/edu/", "VR/AR Anatomy") }}
                {{ btn("services/edu/", "Anatomy Encyclopedia") }}
                {{ btn("services/edu/", "Diseases") }}
			</div>
        </div>
    </div>
</div>
@endsection
