@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Remote Surgery</h1>
	        <p>
				Use this service to design surgery procedures which
				use robotic surgery and 3D bioprinting in parallel.
			</p>

			<style>
	            .no-menu:hover {
	                background: none;
	                box-shadow: none;
	            }
	        </style>

			<div id="buttons">
				<ul>
					<?php include config('global.methods') . '/generators.php'; ?>
					{{ btn("surgery/surgery-design", "Surgery Procedure Design") }}
					{{ btn("#", "Check Surgery Robot Status") }}
          			{{ btn("surgery/links", "Useful Links") }}
		        </ul>
			</div>
        </div>
    </div>
</div>
@endsection
