@extends('index')

@section('title','Contacto')

@section('content')
<section class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center header-title">Contactanos</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<form action="{{ route('contact') }}" method="POST">
				{{csrf_field()}}
				<fieldset>
					<legend>Envianos tu comentario</legend>

					@if(count($errors) > 0)
						<div class="alert alert-danger">
							Se encontraron los siguientes errores
							<ul>
								@foreach($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					@if(session()->has('messageSent'))
						<div class="alert alert-success">
							Mensaje enviado correctamente
						</div>
					@endif

					<div class="form-group">
						<label for="name"><i class="glyphicon glyphicon-user"></i> Nombre</label>
						<input type="text" name="name" id="name" placeholder="Nombre" class="form-control" value="{{ old('name') }}">
					</div>
					<div class="form-group">
						<label for="email"><i class="glyphicon glyphicon-envelope"></i> Correo</label>
						<input type="email" name="email" id="email" placeholder="Correo" class="form-control" value="{{ old('email') }}">
					</div>
					<div class="form-group">
						<label for="message"><i class="glyphicon glyphicon-comment"></i> Mensaje (maximo: 300 caracteres)</label>
						<textarea name="message" id="message" class="form-control" placeholder="Ingresa tu mensaje">{{ old('message') }}</textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-lg">Enviar Mensaje</button>
					</div>
				</fieldset>
			</form>
		</div>

		<div class="col-md-6">
			<div class="social">
				<p><i class="glyphicon glyphicon-earphone"></i> Telefono: +52 322 888 74 65</p>
				<p><i class="glyphicon glyphicon-map-marker"></i> Dirección: Afrodita #94</p>
				<p><i class="glyphicon glyphicon-new-window"></i> Sitio Web: <a href="http://www.gariol.com/" target="_blank">Gariol Software</a></p>
			</div>

			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2219.0999490310833!2d-105.27021394228072!3d20.707528734765553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1464627502232" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>
@stop