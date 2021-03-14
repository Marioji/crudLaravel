<form action="{{url('/empleados/' . $alumno->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field() }}
    {{method_field('PATCH')}}

    <label for="nombre">{{'Nombre: '}}</label>
    <input type="text" name="nombre" id="nombre" value="{{$alumno->nombre}}"><br>

    <label for="dni">{{'DNI: '}}</label>
    <input type="text" name="dni" id="dni" value="{{$alumno->dni}}"><br>

    <label for="direccion">{{'Dirección: '}}</label>
    <input type="text" name="direccion" id="direccion" value="{{$alumno->direccion}}"><br>

    <label for="telefono">{{'Teléfono: '}}</label>
    <input type="text" name="telefono" id="telefono" value="{{$alumno->telefono}}"><br>

    <input type="submit" value="Guardar cambios">

</form>
