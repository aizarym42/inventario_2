<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrate</title>
    <link rel="stylesheet" href= "./style.scss">
    
</head>
<body>
<div class="registrate-box">
        <form action="procesar-registro.php" method="POST">
            <h1>Regístrate</h1>
            <div class="content">
                <input class="file" name="logo" type="file">
                <label for="nombre de la empresa">Nombre de la empresa</label>
                <input id="nombre" name="nombre" type="text" placeholder="Escribe el nombre de la empresa">
                <label for="nit">NIT</label>
                <input id="nit" name="nit" type="number" style="text-decoration: none;" placeholder="Escribe el NIT de la empresa">
                <label for="email">E-mail</label>
                <input id="email" name="email" type="email" placeholder="ejemplo_empresa24@Gmail.com">
                <label for="clave">password</label>
                <input id="clave" name="clave" type="password" placeholder="Contreseña">
                
            </div>
           
            <label id="activar" class="terminos" for="terminos">Acepto términos y condiciones</label>
            <input class="check" id="activar"  type="checkbox">
            <input type="submit" value="registrar">
            </form>

    </div>
   




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
</html>