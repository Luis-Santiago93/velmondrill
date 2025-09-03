
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - SACVEL</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/mover.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&display=swap">
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/enviroment.js"></script>
    <script src="js/clogin.js"></script>
    
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: 
                linear-gradient(rgba(128, 128, 128, 0.1), rgba(128, 128, 128, 0.1)),
                #ff6b6b; /* Rojo más suave */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: white; /* Cambiar el color de fondo del contenedor login-container a blanco */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 850px;
            display: flex;
            flex-direction: column;
        }
        .login-content {
            display: flex;
            flex: 1;
            flex-direction: column;
        }
        .logo-section {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .logo-section img {
            max-width: 100%;
            height: auto;
        }
        .form-section {
            padding: 20px;
            background-color: white;
            border-radius: 8px;
        }
        .form-section h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .form-section p {
            color: #5f6368;
            margin-bottom: 30px;
        }
        .form-section form {
            display: flex;
            flex-direction: column;
        }
        .form-section input[type="text"], .form-section input[type="password"] {
            font-size: 16px;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #dadce0;
            border-radius: 4px;
            outline: none;
            transition: border 0.3s;
        }
        .form-section input[type="text"]:focus, .form-section input[type="password"]:focus {
            border-color: #dd3333;
        }
        .form-section button {
            background-color: #dd3333;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .form-section button:disabled {
            background-color: #9aa0a6;
            cursor: not-allowed;
        }
        .form-section button .spinner {
            display: none;
            margin-left: 10px;
            border: 2px solid rgba(255, 255, 255, 0.6);
            border-top: 2px solid #fff;
            border-radius: 50%;
            width: 16px;
            height: 16px;
            animation: spin 0.6s linear infinite;
        }
        .footer-link {
            color: #dd3333;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .footer-link:hover {
            color: #bb1111;
            text-decoration: underline;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        .form-section button.loading .spinner {
            display: inline-block;
        }
        .form-section a {
            color: #1a73e8;
            text-decoration: none;
            font-size: 14px;
        }
        .form-section a:hover {
            text-decoration: underline;
        }
        .copyright {
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #5f6368;
        }
        @media (min-width: 600px) {
            .login-content {
                flex-direction: row;
            }
            .logo-section {
                flex: 1;
                border-right: 1px solid #dadce0;
                margin-bottom: 0;
            }
            .form-section {
                flex: 2;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-content">
            <div class="logo-section">
                <img src="http://www.velmondrill.com/images/logo.png" alt="Velmondrill">
            </div>
            <div class="form-section">
                <h1>Iniciar sesión</h1>
                <p>Usa tu cuenta</p>
                <form id="flogin" method="POST" onsubmit="return false;">
                    <input type="text" name="name" id="usuario" placeholder="Ingresa tu usuario" required>
                    <input type="password" name="password" id="password" placeholder="Contraseña" required>
                    <button type="submit" id="BtnAceptar">Siguiente <div class="spinner"></div></button>
                </form>
                <!-- <div style="margin-top: 20px;">
                    <a href="#">¿Olvidaste el correo?</a><br><br>
                    <a href="#">Crear cuenta</a>
                </div>-->
            </div>
        </div>
        <div class="copyright">
        <p>© 2025 <a href="http://www.velmondrill.com/" 
                target="_blank" 
                rel="noopener noreferrer" 
                class="footer-link">Velmondrill</a> Todos Los Derechos Reservados</p>
        </div>
    </div>
</body>
</html>
