@extends('layouts.app')

@section('headExtra')
<link rel="stylesheet" href="https://npmcdn.com/leaflet@0.7.7/dist/leaflet.css" />
<script src="https://npmcdn.com/leaflet@0.7.7/dist/leaflet.js" integrity="sha384-Lh7SNUss9JoImCvc96eCUnLX3HvY4kb0UZCWZbYWvceJ+o5CJeOJqqNoheaGkNHT" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Medical GIS Maps</h1>
			<div id="map" style="width: 90%; height: 500px; margin-left:5%; margin-bottom: 30px"></div>
			<script src="{{ asset('js/maps.js') }}"></script>

			<div id="edit_map">
                <div class="row row-eq-height">
                    <div class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                        <button class="full-width" onclick="gis_remote_nodes();">
                            Candidate remote places
                        </button>
                    </div>
                    <div class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                        <button class="full-width">
                            Working surgery robots
                        </button>
                    </div>
                    <div class="col-sm-4 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                        <button class="full-width">
                            Hospitals/Doctors in charge
                        </button>
                    </div>
                </div>
			</div>
        </div>
    </div>
</div>
@endsection
