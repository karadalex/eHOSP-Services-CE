@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<h1>Patient Health Profile</h1>
	        <p>
				Welcome to eHOSP, the hospital on the cloud,
				a platform for e-health and e-medicine!
			</p>

			<style>
	            .no-menu:hover {
	                background: none;
	                box-shadow: none;
	            }
	        </style>

			<ul id="buttons">
				<?php include config('global.methods') . '/generators.php'; ?>
				{{ btn("patient-med-profile/BodyMeasurements.php", "Body Measurements") }}
				{{ btn("patient-med-profile/Fitness.php", "Fitness") }}
				{{ btn("patient-med-profile/Me.php", "Me") }}
				{{ btn("patient-med-profile/Nutrition.php", "Nutrition") }}
				{{ btn("patient-med-profile/ReproductiveHealth.php", "Reproductive Health") }}
				{{ btn("patient-med-profile/Results.php", "Results") }}
				{{ btn("patient-med-profile/Sleep.php", "Sleep") }}
				{{ btn("patient-med-profile/Vitals.php", "Vitals") }}
			</ul>
      	</div>
        </div>
    </div>
</div>
@endsection
