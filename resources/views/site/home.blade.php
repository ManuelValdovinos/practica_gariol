@extends('index')

{{-- Section Inline --}}
@section('title','Inicio')

{{-- Section Block --}}
@section('content')
<section class="container">
	<div class="row">
		<div class="col-md-12">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
					  <img src="{{asset('assets/img/laravel.jpg')}}" alt="Laravel" class="image">
					  <div class="carousel-caption">
					    Laravel 5.*
					  </div>
					</div>
					<div class="item">
					  <img src="{{asset('assets/img/angular.jpg')}}" alt="Angular + Laravel" class="image">
					  <div class="carousel-caption">
					    Laravel + Angular JS
					  </div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="col-md-12">
			<div class="text-center">
				<h2 class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Laborum alias, molestias odit ab nobis nihil cum.</h2>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<img src="{{asset('assets/img/pic1.png')}}" alt="" class="pics img-thumbnail">
			<p class="pics-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea voluptates explicabo minima, temporibus voluptatem veniam.</p>
		</div>
		<div class="col-md-4">
			<img src="{{asset('assets/img/pic2.jpg')}}" alt="" class="pics img-thumbnail">
			<p class="pics-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit officia, eligendi aliquid labore at facilis.</p>
		</div>
		<div class="col-md-4">
			<img src="{{asset('assets/img/pic3.png')}}" alt="" class="pics img-thumbnail">
			<p class="pics-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae tempora cumque non, molestiae possimus? Ea sint.</p>
		</div>	
	</div>

</section>
@stop

