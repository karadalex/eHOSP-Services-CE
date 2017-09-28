@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1> @lang('titles.Medical Geographic Information System') </h1>
	        <p>
                @lang('text/services/med-gis/index.p1')
			</p>

			<p>
				@lang('text/services/med-gis/index.p2')
				<br>

				<div class="col-xs-10 col-xs-offset-1 col-sm-5 col-sm-offset-4" style="margin-top:20px">
					<a class="button full-width" href="med-gis/maps"> @lang('nav.Maps') </a>
				</div>

			</p>
        </div>
    </div>
</div>
@endsection
