@extends("layout")
@section("content")
<div class="col col-md-6">
    <div class="row">
        <div class="col">
            <h2>Datos Bodega</h2>
        </div>
        <div class="col d-flex align-items-center gap-2">
            <a href="{{route("bodegas.edit", $bodega)}}" class="btn btn-warning">Editar</a>
            <a href="{{route("bodegas.index")}}" class="btn btn-primary">Volver</a>
            <form action="{{route("bodegas.destroy", $bodega)}}" method="post">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </div>
    </div>
    <div class="row">
        <form action="{{route("bodegas.update", $bodega)}}" method="post" class="col-12">
            @csrf
            @method("PUT")
            <div class="row">
                <div class="col-12">
                    <label for="nombre" class=" form-label ">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" disabled value="{{$bodega->nombre}}">
                </div>
                <div class="col-12">
                    <label for="direccion" class=" form-label ">Direccion</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" disabled value="{{$bodega->direccion}}">
                </div>
                <div class="col-12">
                    <label for="email" class=" form-label ">Email</label>
                    <input type="email" name="email" id="email" class="form-control" disabled value="{{$bodega->email}}">
                </div>
                <div class="col-12">
                    <label for="telefono" class=" form-label ">Telefono</label>
                    <input type="tel" name="telefono" id="telefono" class="form-control" disabled value="{{$bodega->telefono}}">
                </div>
                <div class="col-12">
                    <label for="persona_contacto" class=" form-label ">Persona de contacto</label>
                    <input type="text" name="persona_contacto" id="persona_contacto" class="form-control" disabled value="{{$bodega->persona_contacto}}">
                </div>
                <div class="col-12">
                    <label for="anio_fundacion" class=" form-label ">Año fundacion</label>
                    <input type="number" name="anio_fundacion" id="anio_fundacion" class="form-control" disabled value="{{$bodega->anio_fundacion}}">
                </div>
                <div class="col-12">
                    <label for="descripcion" class=" form-label ">Descripcion</label>
                    <textarea type="text" name="descripcion" id="descripcion" class="form-control" disabled>{{$bodega->descripcion}}</textarea>
                </div>
                <div class="col-12">
                    <h3>Dispone de hotel?</h3>
                    @if ($bodega->hotel == "s")
                        <div class="form-check">
                            <input type="radio" name="hotel" id="si_hotel" class=" form-check-input" value="s" checked disabled>
                            <label for="si_hotel" class="form-check-label">Si</label><br>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="hotel" id="no_hotel" class=" form-check-input" value="n" disabled>
                            <label for="no_hotel" class="form-check-label">No</label><br>
                        </div>
                    @else
                        <div class="form-check">
                            <input type="radio" name="hotel" id="si_hotel" class=" form-check-input" value="s" disabled>
                            <label for="si_hotel" class="form-check-label">Si</label><br>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="hotel" id="no_hotel" class=" form-check-input" value="n" checked disabled>
                            <label for="no_hotel" class="form-check-label">No</label><br>
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <h3>Dispone de restaurante?</h3>
                    @if ($bodega->restaurante == "s")
                        <div class="form-check">
                            <input type="radio" name="restaurante" id="si_restaurante" class=" form-check-input" value="s" checked disabled>
                            <label for="si_restaurante" class="form-check-label">Si</label><br>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="restaurante" id="no_restaurante" class=" form-check-input" value="n" disabled>
                            <label for="no_restaurante" class="form-check-label">No</label><br>
                        </div>
                    @else
                        <div class="form-check">
                            <input type="radio" name="restaurante" id="si_restaurante" class=" form-check-input" value="s" disabled>
                            <label for="si_restaurante" class="form-check-label">Si</label><br>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="restaurante" id="no_restaurante" class=" form-check-input" value="n" checked disabled>
                            <label for="no_restaurante" class="form-check-label">No</label><br>
                        </div>
                    @endif
                    
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary" disabled>Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="col col-md-6">
    <div class="row">
        <div class="col-12">
            <h2>Vinos disponibles</h2>
            <a href="{{route("vinos.create", $bodega)}}" class="btn btn-primary">+ Añadir vino</a>
        </div>
        <div class="col-12">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vinos as $vino)
                    <tr>
                        <td>{{$vino->nombre}}</td>
                        <td>{{$vino->tipo_vino}}</td>
                        <td class="d-flex align-items-center gap-2">
                            <a href="{{ route("vinos.show", ['bodega' => $bodega, 'vino' => $vino->id]) }}" class="btn btn-primary">Ver</a>
                            <form action="{{ route("vinos.show", ['bodega' => $bodega, 'vino' => $vino]) }}" method="post">
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
    </div>
</div>
@endsection