@extends('layouts.app')

@section('headExtra')
<style type="text/css">
	#SubmitDiagnosis {
		margin-top: 50px;
		width: 40%;
		margin-left: 30%;
		text-align: center;
	}

	@media only screen and (max-width: 40.063em) {
		#SubmitDiagnosis {
			width: 80%;
			margin-left: 10%;
		}
	}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Medical Diagnosis</h1>

			<form action="" method="post" id="form">
				<div class="row">
			        <h1>Medical Diagnosis</h1>

			        <h5>Please select a category below:</h5><br>
			        <div id="category" class="input-list style-1 clearfix"></div>
					<div id="subcategory" class="input-list style-1 clearfix"></div>
					<div id="diagnosis" class="input-list style-1 clearfix"></div>

		            <script type="text/javascript" src="js/diagnosis-form.js"></script>
		    	</div>

		    	<input type="hidden" name="token" value="<?php echo Token::generate();?>">
		    	<div id="submit_form"></div>
		    </form>
        </div>
    </div>
</div>
@endsection
