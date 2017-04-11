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
    <a class="btn-floating btn-large red">
        <i class="large material-icons">add</i>
    </a>
</div>
@endsection

@section('js')
{{ Html::script('js/productos.js') }}
@endsection