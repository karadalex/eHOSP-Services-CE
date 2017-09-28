@extends('layouts.app')

@section('headExtra')
<link rel="stylesheet" href="{{ asset('css/tables.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1 style="color: #ec5840"> @lang('services.Emergency') </h1>
			<div class="table">
				<table>
					<thead>
	                    <tr>
	                        <th>Services</th>
	                        <th>Phone Numbers</th>
                            <th>QR</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach ($emergency_contacts as $contact)
							<tr>
								<td>
									{{ $contact["contact_name"] }}
								</td>
								<td>
									<a href="tel:{{ $contact["phone_numbers"] }}">
										{{ $contact["phone_numbers"] }}
									</a>
								</td>
                                <td>
                                    <img class="small-qr" src="data:image/png;base64,{{ $contact["qr"] }}" alt="QR" data="{{$contact["phone_numbers"]}}"/>
                                    <div class="big-qr" id="big-qr{{$contact["phone_numbers"]}}" style="display: none; z-index:1000">
                                        <img src="data:image/png;base64,{{ $contact["qr"] }}" alt="QR" />
                                    </div>
                                </td>
							</tr>
						@endforeach
	                </tbody>
	            </table>
			</div>
        </div>
    </div>
</div>
@endsection
