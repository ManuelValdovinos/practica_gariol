@extends('index')

@section('title','Contactos')

@section('content')
<section class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">Listado de Contactos</h2>
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th class="text-center">Nombre</th>
						<th class="text-center">Email</th>
						<th class="text-center">Mensaje</th>
						<th class="text-center">Fecha</th>
					</tr>
				</thead>
				<tbody>
					@foreach($contacts as $contact)
						<tr>
							<td class="text-center">{{ $contact->name }}</td>
							<td class="text-center">{{ $contact->email }}</td>
							<td class="text-center">{{ $contact->message }}</td>
							<td class="text-center">{{ $contact->created_at }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</section>
@stop