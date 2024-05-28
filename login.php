<?php include 'login_query.php'?> 
 
 <!-- <div class="col-md-3">
    <div class="panel panel-success" id="panel-margin">
      <div class="panel-heading">
        <center><h1 class="panel-title">Login Estudiantes</h1></center>
      </div>
      <div class="panel-body">
        <form method="POST">
          <div class="form-group">
            <label for="username">Cuenta Estudiantil</label>
            <input class="form-control" name="cod_id" placeholder="No. Cuenta" type="number" required="required" >
          </div>
          <div class="form-group">
            <label for="password">Contraseña</label>
            <input class="form-control" name="password" placeholder="Contraseña" type="password" required="required" >
          </div>
          
          <div class="form-group">
            <button class="btn btn-block btn-primary"  name="login"><span class="glyphicon glyphicon-log-in"></span> Acceder</button>
          </div>
        </form>
      </div>
    </div>
  </div>  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hospital Regional de Cañete Rezola</title>
</head>
<body>
    <div class="mx-8 mt-4">
      <a href="index.php">← Regresar</a>
    </div>
    <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-lg">
          <h1 class="text-center text-2xl font-bold text-red-600 sm:text-3xl">¡ Bienvenido !</h1>
      
          <p class="mx-auto mt-4 max-w-md text-center text-gray-500">
            Ingrese con su cuenta oficial de la entidad del Hospital Regional de Cañete <a href="index.html"  class="text-red-700 ">Rezola</a>
          </p>
      
          <form method="POST" class="mb-0 mt-6 space-y-4 rounded-lg p-4 shadow-2xl sm:p-6 lg:p-8">
            <p class="text-center text-lg font-medium">Login</p>
      
            <div>
      
              <div class="relative">
              <label for="username" class="sr-only ">Email</label>
                <input
                  type="number"
				          name="cod_id"
                  class="form-control w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                  placeholder="Ingrese su correo electrónico"
				          required="required"
                />
      
                <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-4 text-gray-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                    />
                  </svg>
                </span>
              </div>
            </div>
      
            <div>
              <div class="relative">
                 <label for="password" class="sr-only">Password</label>
                <input
                  type="password"
				          name="password"Selecciona
                  class="form-control w-full rounded-lg border-gray-200 p-4 pe-12 text-sm shadow-sm"
                  placeholder="Ingrese su contraseña"
                  required="required"
                />
      
                <span class="absolute inset-y-0 end-0 grid place-content-center px-4">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-4 text-gray-400"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                    />
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                    />
                  </svg>
                </span>
              </div>
             
            </div>

            <button
              type="submit"
			        name="login"
              class="block w-full rounded-lg bg-red-700 px-5 py-3 text-sm font-medium text-white "
            >
              Ingresar
            </button>
      
            <p class="text-center text-sm text-gray-500">
              Olvidaste tu contraseña?
              <a class="underline" href="#">Contácte a Informática</a>
            </p>
          </form>

        </div>

        
      </div>

</body>



