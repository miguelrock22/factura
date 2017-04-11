@extends('partials/master')
@section('content')
<div class="row">
		<div class="col s4">
		<div class="card hoverable small">
			<div class="card-image">
				{{ Html::image('img/tag.svg', '' ,array('width' => 150 , 'height' => 150)) }}
			</div>
			<div class="card-content">
				<span class="card-title">Productos</span>
			</div>
			<div class="card-action">
				<a href="/productos">Administrar</a>
			</div>
		</div>
		</div>
		<div class="col s4">
		<div class="card hoverable small">
			<div class="card-image">
					{{ Html::image('img/invoice.svg', '' ,array('width' => 150 , 'height' => 150)) }}
				</div>
				<div class="card-content">
					<span class="card-title">Facturas</span>
				</div>
				<div class="card-action">
					<a href="#">Administrar</a>
				</div>
			</div>
		</div>
		<div class="col s4">
		<div class="card hoverable small">
			<div class="card-image">
					{{ Html::image('img/coins.svg', '' ,array('width' => 150 , 'height' => 150)) }}
				</div>
				<div class="card-content">
					<span class="card-title">Ventas</span>
				</div>
				<div class="card-action">
					<a href="#">Administrar</a>
				</div>
			</div>
		</div>
</div>
@endsection
