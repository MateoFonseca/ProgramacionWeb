<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Fomulario</title>
</head>

<body>
    <div class="container">
        <div class="container">
            <h1 class="text-center">Formulario</h1>
        </div>

        <form action="" method="POST">

            <div class="row justify-content-center">
                <div class="col-ms-10">

                    <div class="form-row">
                        <div class="col">
                            <label for="Nombre">Nombre</label>
                            <input class="form-control" type="text" name="Nombre" id="Nombre" require>
                        </div>

                        <div class="col">
                            <label for="Apellido">Apellido</label>
                            <input class="form-control" type="text" name="Apellido" id="Apellido" require>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="Correo">Correo</label>
                            <input class="form-control" type="Email" name="Correo" id="Correo" require>
                        </div>

                        <div class="col">
                            <label for="Usuario">Usuario</label>
                            <input class="form-control" type="text" name="Usuario" id="Usuario" require>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="Contraseña">Contraseña</label>
                            <input class="form-control" type="Password" name="Contraseña" id="Contraseña" require>
                        </div>

                        <div class="col">
                            <label for="Rcontraseña">Repetir Contraseña</label>
                            <input class="form-control" type="Password" name="Rcontraseña" id="Rcontraseña" require>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <button type="submit" class="btn btn-dark" style="margin:2%">enviar</button>
                        </div>
                    </div>
                </div>
            </div>


        </form>


    </div>

</body>

</html>