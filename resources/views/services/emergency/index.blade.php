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
                        <?php
                        function qrphone($phoneNum) {
                            $png = QrCode::format('png')
                                            ->size(256)
                                            ->margin(0)
                                            ->backgroundColor(235,235,235)
                                            ->merge('/public/img/LOGO_big.png')
                                            ->phoneNumber($phoneNum);
                            $png = base64_encode($png);
                            return $png;
                        }
                        ?>
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
                                <td>
                                    <img class="small-qr" src="data:image/png;base64,{{ qrphone($contact->phone_numbers) }}" alt="" />
                                    <div class="big-qr" style="display: none;">
                                        <img src="data:image/png;base64,{{ qrphone($contact->phone_numbers) }}" alt="" />
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
