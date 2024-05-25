<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6e8efb, #a767e3);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-weight: bold;
            color: #4a4a73;
        }
        .btn-primary {
            background-color: #6e8efb;
            border-color: #6262628e46;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #593259;
            border-color: #5a7bdb;
        }
        .form-control {
            border-radius: 10px;
        }
        .form-group label {
            color: #393243;
        }
        #error-message {
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="card-title text-center">Iniciar Sesión</h3>
                        <form id="loginForm">
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                        </form>
                        <div id="error-message" class="text-danger mt-3" style="display: none;">Correo electrónico o contraseña incorrectos.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevenir el envío del formulario

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            // Credenciales predefinidas para la demostración
            const validEmail = "manuel.escobar23@gmail.com";
            const validPassword = "12345";

            if (email === validEmail && password === validPassword) {
                // Redirigir a la página de la barra de navegación
                window.location.href = 'menunavegacion.php';
            } else {
                // Mostrar mensaje de error
                document.getElementById('error-message').style.display = 'block';
            }
        });
    </script>
</body>
</html>
