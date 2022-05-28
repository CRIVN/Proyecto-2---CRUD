    @extends('stocks.layout')

    @section('content')

        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Aplicación simple de gestión de existencias</h2>
            </div>
            <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
                <a class="btn btn-success " href="{{ route('stocks.create') }}"> Anadir existencias</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        @if(sizeof($stocks) > 0)
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nombre del producto</th>
                    <th>Descripcion del producto</th>
                    <th>Cantidad</th>
                    <th width="280px">Mas</th>
                </tr>
                @foreach ($stocks as $stock)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $stock->product_name }}</td>
                        <td>{{ $stock->product_desc }}</td>
                        <td>{{ $stock->product_qty }}</td>
                        <td>
                            <form action="{{ route('stocks.destroy',$stock->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('stocks.show',$stock->id) }}">Ver</a>
                                <a class="btn btn-primary" href="{{ route('stocks.edit',$stock->id) }}">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        @else
            <div class="alert alert-alert">Comience a agregar a la base de datos</div>
        @endif

        {!! $stocks->links() !!}

    @endsection