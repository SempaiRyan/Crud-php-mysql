<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>CRUD PHP Y MYSQL</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/142c0af1ff.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="text-center p-3">Hola CRUD PHP Y MYSQL</h1>
    <div class="container-fluid row">
        <form class="col-4 p-3">
            <h3 class="text-center text-secondary">Registro de Personas</h3>

            <div class="form-group">
                <label for="exampleInputEmail1">Nombre </label>
                <input type="text" class="form-control" name="nombre">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Apellido</label>
                <input type="text" class="form-control" name="apellido">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">DNI </label>
                <input type="text" class="form-control" name="dni">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Fecha Nacimiento </label>
                <input type="date" class="form-control" name="fecha">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input type="email" class="form-control" name="correo">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>


        <div class="col-8 p-4">

            <table class="table">
                <thead class="bg-info text-white">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRES</th>
                        <th scope="col">APELLIDOS</th>
                        <th scope="col">DNI</th>
                        <th scope="col">FECHA NAC</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">..</th>


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a href="" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href=""class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>

                        </td>
                    </tr>

                </tbody>
            </table>

        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>