@extends("layout")
@section("content")
<div class="col-12">
    <a href="{{route("bodegas.create")}}" class="btn btn-primary">+ Añadir Bodega</a>
</div>
<div class="col-12">
    <table class=" table table-responsive">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>Acciones</th>
        </thead>
        <tbody>
            @foreach($bodegas as $bodega)
            <tr>
                <td>{{$bodega->nombre}}</td>
                <td>{{$bodega->direccion}}</td>
                <td>{{$bodega->telefono}}</td>
                <td>{{$bodega->email}}</td>
                <td class="d-flex align-items-center gap-2">
                    <a href="{{route("bodegas.show", $bodega)}}" class="btn btn-primary">Entrar</a>
                    <form action="{{route("bodegas.destroy", $bodega)}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        <tbody>
    </table>
</div>
@endsection