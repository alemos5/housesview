@extends('admin.layout')

@section('content')
	@if (session('error'))
	    <div class="alert alert-danger alert-dismissible fade show" role="alert">
	        <strong>{{ session('error') }}</strong>
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            <span aria-hidden="true">&times;</span>
	        </button>
	    </div>
	@endif
	<div class="container confirm-page my-4 px-5">
		<div class="py-5 px-5 form-content">
			<div class="third-part row">
				<div class="col col-5 d-none d-sm-block img-section">
					<img class="w-75 mb-0 mt-5" src="{{ asset('/images/giftcard/banner.svg') }}">
				</div>
				<div class="col px-sm-5">
					<h3 class="text-center">Información de pago</h3>
					<div class="text-center">
						<p class="mt-5">Serás redirigido a PayPal para finalizar la compra</p>
						<form action="{{ route('giftcards.confirm-buy', ['id' => substr(URL::full(), strpos(URL::full(), '=') + 1)]) }}" method="post">
							{{ csrf_field() }}
							{{ method_field('PUT') }}
					 		{{-- <button type="submit" class="btn-login btn w-75 mt-5 py-2">Continuar</button> --}}
							<button type="submit" class="btn btn-paypal">
								<strong>Confirmar con </strong>
								<img src="{{ asset('/images/giftcard/PayPal.png') }}">
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection