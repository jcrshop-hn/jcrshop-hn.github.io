<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf.8">
        <title> form login | JR </title>
        <link rel="stylesheet" href="csslog.css">
    </head>
    <body>
        
        <div class="login-box">       
                <img src="descarga.png" alt="Logo de JR">   
                  <h1>Login Here</h1>

                   <form action="dblogin.php" method="post">
            
                         <!--USERNAME -->
                         <label for="username">Username</label>
                         <input type="text" name="usuario"  placeholder="Enter username">

                         <!--PASSWORD -->
                         <label for="password">Password</label>
                         <input type="Password" name="contraseña" placeholder="Enter password">

                         <input type="submit" name="login" value="Ingresar">
                        </form>
                      
        </div>

    </body>

</html>