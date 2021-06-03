<!DOCTYPE html>
<html lang="esp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacias Cuquita</title>
</head>
<body>
<h1>Listado de Medicamentos</h1>
    <p>
    <a href="{{ route('producto.create') }}">Agregar Medicamento</a>
    </p>
    <table border = "1">
    <thead>
    <tr>
    <th>Id</th>
    <th>Titulo</th>
    <th>Descripción</th>
    <th>Precio Unitario</th>
    <th>Precio de Venta</th>
    <th>Cantidad de Producto</th>
    <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>
                    <a href="{{ route('producto.show', $producto) }}">
                    {{ $producto->titulo }}
                    </a>
                    </td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precioU }}</td>
                    <td>{{ $producto->precioV }}</td>
                    <td>{{ $producto->cantidadP }}</td>
                    <td>
                    <a href="{{ route('producto.edit', $producto->id) }}">Editar </a> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>