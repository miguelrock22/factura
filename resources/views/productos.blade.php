@extends('partials/master')

@section('content')
<table class="table table-bordered" id="productos-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Code</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
</table>
<div class="fixed-action-btn">
    <a class="btn-floating btn-large red waves-effect waves-light btn" href="#modalProd">
        <i class="large material-icons">add</i>
    </a>
</div>
@include('partials/modal')
@endsection


@section('js')
{{ Html::script('js/productos.js') }}
@endsection