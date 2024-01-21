@extends("layout")
@section("content")
<div class="col-12">
    <h2>Nuevo vino</h2>
    <a href="{{route("bodegas.show", $bodega)}}" class="btn btn-primary">Volver</a>
</div>
<div class="col-12">
    <hr>
</div>
<div class="col-12">
    <form action="{{route("vinos.store", $bodega)}}" method="post" class="row">
        @csrf
        <div class="col-12">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="col-12">
            <label for="descripcion" class="form-label">Descripcion</label>
            <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
        </div>
        <div class="col-12">
            <label for="anio" class="form-label">Año</label>
            <input type="number" name="anio" id="anio" class="form-control">
        </div>
        <div class="col-12">
            <label for="alcohol" class="form-label">Alcohol</label>
            <input type="number" name="alcohol" id="alcohol" class="form-control">
        </div>
        <div class="col-12">
            <label for="tipo_vino" class="form-label">Tipo de vino</label>
            <select name="tipo_vino" id="tipo_vino" class="form-control">
                <option value="tinto">Tinto</option>
                <option value="blanco">Blanco</option>
                <option value="rosado">Rosado</option>
            </select>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>
@endsection