@extends('index')

@section('title','Register')

@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h2 class="text-center">Crear Cuenta</h2>
			<hr>
			<form action="{{ route('register') }}" method="POST">
				{{ csrf_field() }}

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

				<div class="form-group">
					<label for="name">Nombre:</label>
					<input type="name" name="name" id="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
				</div>

				<div class="form-group">
					<label for="email">Correo:</label>
					<input type="email" name="email" id="email" class="form-control" placeholder="Correo" value="{{ old('email') }}">
				</div>

				<div class="form-group">
					<label for="password">Contraseña:</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" value="{{ old('password') }}">
				</div>

				<div class="form-group">
					<label for="repeat">Repetir Contraseña:</label>
					<input type="password" name="password_confirmation" id="repeat" class="form-control" placeholder="Repetir Contraseña">
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-block btn-lg btn-success">Entrar</button>
				</div>
			</form>
		</div>
	</div>
</section>
@stop