document.addEventListener("DOMContentLoaded", () => {
  const usuario = document.getElementById("usuario");
  const contrasenia = document.getElementById("contrasenia");
  const confirmar = document.getElementById("confirmar");
  const form = document.querySelector("form");

<<<<<<< HEAD
  const toggleBtn = document.getElementById("togglePass"); // agregado
  const icon = toggleBtn?.querySelector("i"); // agregado

=======
>>>>>>> 0740d72a282a08e6e4740a4cee0dce0fc682fe2f
  const forbiddenChars = /[*=']/;
  const forbiddenKeys = ["*", "=", "'"];
  const MIN_PASS = 8;

  function bloquearCaracteres(e) {
    if (forbiddenKeys.includes(e.key)) e.preventDefault();
  }

  [usuario, contrasenia, confirmar].forEach((campo) => {
    if (campo) campo.addEventListener("keydown", bloquearCaracteres);
  });

<<<<<<< HEAD
  // Mostrar / ocultar contraseña - nuevo código agregado
  if (toggleBtn && contrasenia) {
    toggleBtn.addEventListener("click", () => {
      const mostrar = contrasenia.type === "password";

      contrasenia.type = mostrar ? "text" : "password";
      icon.classList.toggle("fa-eye");
      icon.classList.toggle("fa-eye-slash");

      toggleBtn.setAttribute(
        "aria-label",
        mostrar ? "Ocultar contraseña" : "Mostrar contraseña"
      );
    });
  }

=======
>>>>>>> 0740d72a282a08e6e4740a4cee0dce0fc682fe2f
  if (form) {
    form.addEventListener("submit", (e) => {
      const campos = [usuario, contrasenia, confirmar];

      for (let campo of campos) {
        if (campo && forbiddenChars.test(campo.value)) {
          e.preventDefault();
          alert("No se permiten los caracteres *, = o ' por motivos de seguridad.");
          return;
        }
      }

      if (contrasenia && contrasenia.value.length < MIN_PASS) {
        e.preventDefault();
        alert(`La contraseña debe tener mínimo ${MIN_PASS} caracteres.`);
        return;
      }

      if (contrasenia && confirmar && contrasenia.value !== confirmar.value) {
        e.preventDefault();
        alert("Las contraseñas no coinciden.");
        return;
      }
    });
  }
});
