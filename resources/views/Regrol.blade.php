<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permisos</title>
</head>
<body>
    <form action ="{{ route('roles.store') }}" method="POST">
        @csrf
        <label for="nombre">Rol</label>
        <input type="text" name="nombre_rol" id="nombre_rol"> 


        <button type="submit">Guardar</button>
</form>
</body>
</html>