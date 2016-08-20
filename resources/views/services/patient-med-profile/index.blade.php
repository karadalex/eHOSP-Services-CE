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
				{{ echo li(button("services/patient-med-profile/BodyMeasurements.php", "Body Measurements")) }}
				{{ echo li(button("services/patient-med-profile/Fitness.php", "Fitness")) }}
				{{ echo li(button("services/patient-med-profile/Me.php", "Me")) }}
				{{ echo li(button("services/patient-med-profile/Nutrition.php", "Nutrition")) }}
				{{ echo li(button("services/patient-med-profile/ReproductiveHealth.php", "Reproductive Health")) }}
				{{ echo li(button("services/patient-med-profile/Results.php", "Results")) }}
				{{ echo li(button("services/patient-med-profile/Sleep.php", "Sleep")) }}
				{{ echo li(button("services/patient-med-profile/Vitals.php", "Vitals")) }}
			</ul>
      	</div>
        </div>
    </div>
</div>
@endsection
