@extends('vr.template')

@section('content')
<a-scene>
    <a-collada-model src="{{config('app.cdn.eu')}}/downloads/ehosp-surgical-v3-0/dae" 
        scale=".001 .001 .001"
        position="-1.088 -1.198 -6.442">
    </a-collada-model>
    <a-plane position="0 0 -4" 
        rotation="-90 0 0" 
        width="4" 
        height="4" 
        color="#7BC8A4">
    </a-plane>
    <a-sky color="#ECECEC"></a-sky>
</a-scene>
@endsection