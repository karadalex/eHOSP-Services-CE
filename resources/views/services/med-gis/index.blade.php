@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Medical Geographic Information System</h1>
	        <p>
				A Medical Geographic Information System or Medical GIS is a system
				designed to capture, store, manipulate, analyze, manage, and present all types of
				spatial or geographical data, which are related to Medicine or Healthcare Services.
			</p>

			<p>
				Click below to check the eHOSP Maps:
				<br>

				<style>
		            .no-menu:hover {
		                background: none;
		                box-shadow: none;
		            }
		        </style>

				<div class="expanded button-group">
					<a class="button" href="med-gis/maps">Maps</a>
				</div>

			</p>
        </div>
    </div>
</div>
@endsection
