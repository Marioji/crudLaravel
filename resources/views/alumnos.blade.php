<style>
    table, th, td {
        border: 1px solid black;
    }
</style>
<table class="table thead-light">
    <thead class="thead-light">
    <tr>
        <th>Nombre</th>
        <th>DNI</th>
        <th>Dirección</th>
        <th>Teléfono</th>
    </tr>
    </thead>
    <tbody>
    @foreach($alumnos as $alumno)
        <tr>

            <td>{{$alumno->nombre }}</td>
            <td>{{$alumno->dni}}</td>
            <td>{{$alumno->direccion}}</td>
            <td>{{$alumno->telefono}}</td>
            <td><a href="{{url('/alumnos/'.$alumno->id.'/edit')}}">
                    Editar
                </a>|
                <form action="{{url('/alumnos/'.$alumno->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>

                </form>
            </td>

        </tr>
    @endforeach
    </tbody>
</table>
