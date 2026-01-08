<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$mensajeOk = $_SESSION['ok_servidor'] ?? null;
$mensajeError = $_SESSION['error_servidor'] ?? null;
$tokenCreado = $_SESSION['token_servidor_creado'] ?? null;

unset($_SESSION['ok_servidor'], $_SESSION['error_servidor'], $_SESSION['token_servidor_creado']);
?>
<!doctype html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
    <title>Agregar servidor</title>
=======
    <title>Página Servidor</title>
>>>>>>> 0740d72a282a08e6e4740a4cee0dce0fc682fe2f
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark text-white d-flex flex-column" style="min-height: 100vh;">

    <header class="p-3 border-bottom border-secondary d-flex justify-content-between align-items-center">
        <p class="mb-0 text-white-50">Por favor llene los siguientes campos con la información del servidor</p>
<<<<<<< HEAD
        <a href="/public/dashboard" class="btn btn-outline-secondary" tabindex="0" aria-label="Volver a la página principal">Regresar</a>
=======
        <a href="/public/dashboard" class="btn btn-outline-secondary">Regresar</a>
>>>>>>> 0740d72a282a08e6e4740a4cee0dce0fc682fe2f
    </header>

    <main class="container py-5 flex-grow-1">

        <h1 class="mb-4 text-white">
            Nuevo servidor
        </h1>

        <?php if ($mensajeError): ?>
            <div class="alert alert-danger border border-danger-subtle" role="alert">
                <?= htmlspecialchars($mensajeError, ENT_QUOTES, 'UTF-8') ?>
            </div>
        <?php endif; ?>

        <?php if ($mensajeOk): ?>
            <div class="alert alert-success border border-success-subtle" role="alert">
                <?= htmlspecialchars($mensajeOk, ENT_QUOTES, 'UTF-8') ?>
            </div>
        <?php endif; ?>

        <?php if ($tokenCreado): ?>
            <div class="alert alert-warning border border-warning-subtle" role="alert">
                <div class="fw-bold mb-2">Token del servidor (cópialo y guárdalo, se mostrará solo una vez):</div>
                <div class="d-flex gap-2 flex-wrap align-items-center">
                    <code class="p-2 border border-secondary rounded text-bg-dark"><?= htmlspecialchars($tokenCreado, ENT_QUOTES, 'UTF-8') ?></code>
                </div>
            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-lg-6">

            <form action="/public/add_servidor" method="POST">
                <div class="mb-4">
                    <label for="alias" class="form-label">Alias</label>
                    <input type="text" id="alias" name="alias"
                        class="form-control form-control-lg text-bg-dark border-secondary"
<<<<<<< HEAD
                        maxlength="20" tabindex="1" required>
=======
                        maxlength="20" required>
>>>>>>> 0740d72a282a08e6e4740a4cee0dce0fc682fe2f
                </div>

                <div class="mb-4">
                    <label for="ip" class="form-label">Dirección IP</label>
                    <input type="text" id="ip" name="ip"
                        class="form-control form-control-lg text-bg-dark border-secondary"
<<<<<<< HEAD
                        maxlength="15" tabindex="2" required>
=======
                        maxlength="15" required>
>>>>>>> 0740d72a282a08e6e4740a4cee0dce0fc682fe2f
                </div>

                <div class="mb-5">
                    <label for="dominio" class="form-label">Dominio (opcional)</label>
                    <input type="text" id="dominio" name="dominio"
                        class="form-control form-control-lg text-bg-dark border-secondary"
<<<<<<< HEAD
                        maxlength="50" tabindex="3">
                </div>

                <button type="submit" class="btn btn-primary btn-lg w-100" tabindex="4" aria-label="Agregar nuevo servidor">Guardar</button>
=======
                        maxlength="50">
                </div>

                <button type="submit" class="btn btn-primary btn-lg w-100">Guardar</button>
>>>>>>> 0740d72a282a08e6e4740a4cee0dce0fc682fe2f
            </form>

            </div>
        </div>
    </main>

    <footer class="text-center py-3 border-top border-secondary">
        <p class="m-0 text-white-50">© 2025 - Información del servidor</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
