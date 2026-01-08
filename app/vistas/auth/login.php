<?php $sid = session_id(); ?>
<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<<<<<<< HEAD
    <title>I</title>
=======
    <title>Pantalla de Inicio de Sesión</title>
>>>>>>> 0740d72a282a08e6e4740a4cee0dce0fc682fe2f
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
<<<<<<< HEAD
    <!-- CDN de FontAwesome para los iconos -->
    <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
=======
>>>>>>> 0740d72a282a08e6e4740a4cee0dce0fc682fe2f
  </head>

  <body class="bg-dark text-white d-flex flex-column" style="min-height: 100vh">
    <header class="p-3"></header>

    <main class="d-flex align-items-center justify-content-center flex-grow-1">
      <div class="card bg-secondary p-4 shadow-lg" style="width: 350px">
        <div class="card-body text-center">

<<<<<<< HEAD
          <figure>
            <img
              src="/public/img/logo.png"
              alt="logo de EuroTech"
              width="64"
              height="64"
              class="mb-3"
            />
            <figcaption>
              Logotipo oficial de la empresa EuroTech
            </figcaption>
          </figure>
=======
          <img
            src="/public/img/logo.png"
            alt="logo"
            width="64"
            height="64"
            class="mb-3"
          />
>>>>>>> 0740d72a282a08e6e4740a4cee0dce0fc682fe2f

          <?php if (!empty($error)): ?>
            <div class="alert alert-danger py-2">
              <?= htmlspecialchars($error) ?>
            </div>
          <?php endif; ?>

          <form method="POST" action="/public/login">
            <div class="mb-3">
              <label for="usuario" class="form-label d-block text-start">Usuario</label>
              <input
                type="text"
                id="usuario"
                name="usuario"
<<<<<<< HEAD
                placeholder="Nombre de usuario"
                class="form-control text-bg-dark border-secondary"
                tabindex="0"
=======
                placeholder="Ej: Mauricio65"
                class="form-control text-bg-dark border-secondary"
>>>>>>> 0740d72a282a08e6e4740a4cee0dce0fc682fe2f
                required
              />
            </div>

            <div class="mb-4">
              <label for="contrasena" class="form-label d-block text-start">Contraseña</label>
              <div class="input-group">
                <input
                  type="password"
                  id="contrasena"
                  name="contrasena"
                  class="form-control text-bg-dark border-secondary"
<<<<<<< HEAD
                  tabindex="1"
                  required
                />

                <button class="btn btn-outline-light" type="button" id="togglePass" tabindex="2" aria-label="Mostrar contraseña">
                  <i class="fa-regular fa-eye"></i>
                </button>
              </div>
            </div>
            <button type="submit" class="btn btn-primary w-100" tabindex="3" aria-label="Ingresar al dashboard">Entrar</button>
=======
                  required
                />
                <button class="btn btn-outline-light" type="button" id="togglePass">
                  OJO
                </button>
              </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Entrar</button>
>>>>>>> 0740d72a282a08e6e4740a4cee0dce0fc682fe2f
          </form>
        </div>
      </div>
    </main>

    <footer class="text-center py-3 border-top border-secondary mt-auto">
      <p class="m-0 text-white-50">© 2025 - Información del servidor</p>
    </footer>
    <script src="/public/JS/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  </body>
</html>
