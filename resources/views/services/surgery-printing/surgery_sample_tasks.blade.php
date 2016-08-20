@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<h1>Surgery Design - Sample Tasks</h1>
	        <p>
	        	Click on one of the following buttons to execute a standard predefined surgical
                task.
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
					{{ echo li(button("services/surgery-printing/surgery_sample_tasks/robotic_arm_test", "Robotic Arm Test")) }}
					{{ echo li(button("services/surgery-printing/surgery_sample_tasks/simple_incision_01", "Simple Incision 1")) }}
		        </ul>
			</div>
        </div>
    </div>
</div>
@endsection
