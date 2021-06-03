<!DOCTYPE html>
<html lang="esp">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatble" content="IE-edge">
	<meta name="viewport" content="width=dvice-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt;>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="Farmacia.png">
    <title>Formulario</title>
</head>
<body>
@if(isset($producto))
<form action="{{ route('producto.update', $producto) }}" method='POST'>
@method('PATCH')
@else
<form action="{{ route('producto.store') }}" method='POST'>
@endif

@csrf
<h1> Agregar nuevo medicamento </h1>
<p>
    <a href="{{ route('producto.index') }}">Listado de Medicamentos</a> 
    </p>
<br>
<label for ="titulo">Nombre del medicamento: </label>
<input type="text" name="titulo" value="{{ $producto->titulo ?? '' }}">
<br>
<br>
<label for ="descripcion">Descripcion: </label>
<input type="text" name="descripcion" id="descripcion" value="{{ $producto->descripcion ?? '' }}">
<br>
<br>
<label for ="precioU">Precio Unitario: </label>
<input type="text" name="precioU" value="{{ $producto->precioU ?? '' }}">
<br>
<br>
<label for ="precioV">Precio de Venta: </label>
<input type="text" name="precioV" value="{{ $producto->precioV ?? '' }}">
<br>
<br>
<label for="cantidadP">Cantidad de Producto:</label>
<input type="text" name="cantidadP" value="{{ $producto->cantidadP ?? '' }}">
<br>
<br>
<input type="submit" value"Guardar">

</body>
</html>