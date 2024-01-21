@extends("layout")
@section("content")
<div class="col-12">
    <h2>Detalle vino</h2>
    <div class="d-flex align-items-center gap-2">
        <a href="{{route("bodegas.show", $bodega)}}" class="btn btn-primary">Volver</a>
        <a href="{{route("vinos.edit", ["bodega" => $bodega, "vino" => $vino])}}" class="btn btn-warning">Editar</a>
    </div>
</div>
<div class="col-12">
    <hr>
</div>
<div class="col-12">
    <form action="{{route("vinos.update", ["bodega" => $bodega, "vino" => $vino])}}" method="post" class="row">
        @csrf
        @method("PUT")
        <div class="col-12">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{$vino->nombre}}" disabled >
        </div>
        <div class="col-12">
            <label for="descripcion" class="form-label">Descripcion</label>
            <textarea name="descripcion" id="descripcion" class="form-control" disabled>{{$vino->descripcion}}</textarea>
        </div>
        <div class="col-12">
            <label for="anio" class="form-label">Año</label>
            <input type="number" name="anio" id="anio" class="form-control" value="{{$vino->anio}}" disabled>
        </div>
        <div class="col-12">
            <label for="alcohol" class="form-label">Alcohol</label>
            <input type="number" name="alcohol" id="alcohol" class="form-control" value="{{$vino->alcohol}}" disabled>
        </div>
        <div class="col-12">
            <label for="tipo_vino" class="form-label">Tipo de vino</label>
            <select name="tipo_vino" id="tipo_vino" class="form-control" disabled>
                @if ($vino->tipo_vino=="tinto")
                <option value="tinto" selected>Tinto</option>
                <option value="blanco">Blanco</option>
                <option value="rosado">Rosado</option>
                

                @elseif ($vino->tipo_vino=="blanco")
                <option value="tinto">Tinto</option>
                <option value="blanco" selected>Blanco</option>
                <option value="rosado">Rosado</option>
                @else
                <option value="tinto">Tinto</option>
                <option value="blanco">Blanco</option>
                <option value="rosado" selected>Rosado</option>
                @endif
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary" disabled>Guardar</button>
        </div>
    </form>
</div>
@endsection