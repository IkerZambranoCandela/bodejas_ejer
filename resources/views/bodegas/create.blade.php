@extends("layout")
@section("content")
<div class="col-12 d-flex justify-content-between align-items-center">
    <h2>Nueva bodega</h2>
    <a href="{{route("bodegas.index")}}" class=" btn btn-primary">Volver</a>
</div>
<form action="{{route("bodegas.store")}}" method="post" class="col">
    @csrf
    <div class="row">
        <div class="col-12">
            <label for="nombre" class=" form-label ">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="form-control">
        </div>
        <div class="col-12">
            <label for="direccion" class=" form-label ">Direccion</label>
            <input type="text" name="direccion" id="direccion" class="form-control">
        </div>
        <div class="col-12">
            <label for="email" class=" form-label ">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="col-12">
            <label for="telefono" class=" form-label ">Telefono</label>
            <input type="tel" name="telefono" id="telefono" class="form-control">
        </div>
        <div class="col-12">
            <label for="persona_contacto" class=" form-label ">Persona de contacto</label>
            <input type="text" name="persona_contacto" id="persona_contacto" class="form-control">
        </div>
        <div class="col-12">
            <label for="anio_fundacion" class=" form-label ">Año fundacion</label>
            <input type="number" name="anio_fundacion" id="anio_fundacion" class="form-control">
        </div>
        <div class="col-12">
            <label for="descripcion" class=" form-label ">Descripcion</label>
            <textarea type="text" name="descripcion" id="descripcion" class="form-control"></textarea>
        </div>
        <div class="col-12">
            <h3>Dispone de hotel?</h3>
            <div class="form-check">
                <input type="radio" name="hotel" id="si_hotel" class=" form-check-input" value="s">
                <label for="si_hotel" class="form-check-label">Si</label><br>
            </div>
            <div class="form-check">
                <input type="radio" name="hotel" id="no_hotel" class=" form-check-input" value="n">
                <label for="no_hotel" class="form-check-label">No</label><br>
            </div>
        </div>
        <div class="col-12">
            <h3>Dispone de restaurante?</h3>
            <div class="form-check">
                <input type="radio" name="restaurante" id="si_restaurante" class=" form-check-input" value="s">
                <label for="si_restaurante" class="form-check-label">Si</label><br>
            </div>
            <div class="form-check">
                <input type="radio" name="restaurante" id="no_restaurante" class=" form-check-input" value="n">
                <label for="no_restaurante" class="form-check-label">No</label><br>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Añadir</button>
        </div>
    </div>
</form>
@endsection