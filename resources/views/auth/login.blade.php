@extends('index')

@section('title','Login')

@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h2 class="text-center">Inicio de Sesión</h2>
			<hr>
			<form action="{{ route('login') }}" method="POST">
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

				@if(session()->has('loginFailed'))
					<div class="alert alert-danger">
						Usuario o Contraseña Invalidos
					</div>
				@endif

				<div class="form-group">
					<label for="email">Correo:</label>
					<input type="email" name="email" id="email" class="form-control" placeholder="Correo" value="{{ old('email') }}">
				</div>

				<div class="form-group">
					<label for="password">Contraseña:</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-block btn-lg btn-success">Entrar</button>
				</div>
			</form>
		</div>
	</div>
</section>
@stop