<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Olimpica</title>
</head>
<body>
    <div class="card" style="width: 20rem; margin: 20px auto; padding: 10px;">  
    <form action="consulta.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">User</label>
        <input pattern="[A-Za-z0-9]+" required type="text" name="user" class="form-control" id="exampleInputEmail1">
        <div id="emailHelp" class="form-text">Ingresar un Usuario ya existente.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input pattern="[A-Za-z0-9]+" required type="password" name="pass" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Guardar Contraseña</label>
    </div>
    <button style="margin: auto;" type="submit" class="btn btn-primary" name="btn">Enviar</button>
    </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>