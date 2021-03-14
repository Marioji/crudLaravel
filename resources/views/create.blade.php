Crear nuevo alumno
<form action="{{url('/alumnos')}}" method="post">
    {{ csrf_field() }}
    <label for="nombre">{{'Nombre: '}}</label>
    <input type="text" name="nombre" id="nombre" value=""><br>

    <label for="dni">{{'DNI: '}}</label>
    <input type="text" name="dni" id="dni" value=""><br>

    <label for="direccion">{{'Dirección: '}}</label>
    <input type="text" name="direccion" id="direccion" value=""><br>

    <label for="telefono">{{'Teléfono: '}}</label>
    <input type="text" name="telefono" id="telefono" value=""><br>

    <input type="submit" value="Agregar">


</form>
