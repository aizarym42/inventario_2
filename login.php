<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href= "./style-login.scss">
</head>
<body>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="/css/master.css">
      </head>
      <body>
    
        <div class="login-box">
          <img src="lovo.jpg" class="avatar" alt="Avatar Image">
          <h1>Iniciar sesión</h1>
          <form action="validar-usuario.php" method="post">
            <label for="Email">Email</label>
            <input name="email-l" type="email" placeholder="Ejemplo@gmail.com">
            
            <label for="password">Password</label>
            <input name="clave-l" type="password" placeholder="Ingrese su contraseña">
            <input type="submit" value="Login">
          </form>
        </div>
      </body>
    </html>
    


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