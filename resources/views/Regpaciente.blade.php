<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert clientes </title>
</head>
<body>
    <form action ="{{ route('paciente.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre"> 

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" id="apellido"> 

        <label for="correo">Correo</label>
        <input type="text" name="correo" id="correo">

        <label for="telefono">Telefono</label>
        <input type="number" name="telefono" id="telefono"> 

        <label for="ciudad">Ciudad</label>
        <input type="text" name="ciudad" id="ciudad"> 

        <label for="direccion">Direccion</label>
        <input type="adress" name="direccion" id="direccion"> 

        <label for="cedula">Cedula</label>
        <input type="number" name="documento" id="documento"> 

        <button type="submit">Guardar</button>
</form>
</body>
</html>