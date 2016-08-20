@extends('layouts.app')

@section('headExtra')
<link rel="stylesheet" href="{{ asset('css/tables.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1 style="color: #ec5840">Emergency</h1>
			<div class="table">
				<table>
					<thead>
	                    <tr>
	                        <th>Services</th>
	                        <th>Phone Numbers</th>
	                    </tr>
	                </thead>
	                <tbody>
	                    @foreach ($emergency_contacts as $contact)
							<tr>
								<td>
									{{ $contact->contact_name }}
								</td>
								<td>
									<a href="tel:{{ $contact->phone_numbers }}">
										{{ $contact->phone_numbers }}
									</a>
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
