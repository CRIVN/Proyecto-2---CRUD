@extends('stocks.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Ver existencias</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-primary" href="{{ route('stocks.index') }}"> Atras</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre del producto: </strong>
                {{ $stock->product_name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Descripcion: </strong>
                {{ $stock->product_desc }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cantidad: </strong>
                {{ $stock->product_qty }}
            </div>
        </div>
    </div>
@endsection