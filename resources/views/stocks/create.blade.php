@extends('stocks.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Anadir existencias</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('stocks.index') }}"> Atras</a>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Ups!</strong> Hubo algunos problemas con su entrada.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('stocks.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre del producto:</strong>
                <input type="text" name="product_name" class="form-control" placeholder="Nombre del producto">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion del producto:</strong>
                <textarea class="form-control" style="height:150px" name="product_desc" placeholder="Descripcion del producto"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cantidad:</strong>
                <input type="number" class="form-control" name="product_qty" placeholder="Cantidad">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>

</form>
@endsection