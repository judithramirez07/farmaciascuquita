<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacias Cuquita</title>
</head>
<body>
<h1>Medicamento Agregado</h1>
<p>
    <a href="{{ route('producto.index') }}">Listado de Medicamentos</a> 
    </p>
    <table border = "1"> 
    <thead>
    <tr>
    <th>ID</th>
    <th>Titulo</th>
    <th>Descripción</th>
    <th>Precio Unitario</th>
    <th>Precio de Venta</th>
    <th>Cantidad de Producto</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $productos->id }}</td>
        <td>{{ $productos->titulo }}</td>
        <td>{{ $productos->descripcion }}</td>
        <td>{{ $productos->precioU }}</td>
        <td>{{ $productos->precioV }}</td>
        <td>{{ $productos->cantidadP }}</td>
    </tr>
    </tbody>
    </table>

    <form action="{{ route('producto.destroy', $productos) }}" method="POST">
    @csrf
    @method('DELETE')
    <br>
    <input type="submit" value="Eliminar Programa">
    </form>
</body>
</html>