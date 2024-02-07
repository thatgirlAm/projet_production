<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion - Smart Tech</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #eceff1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 2rem;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }

        .login-container img {
            max-width: 100%;
            margin-bottom: 1rem;
        }

        .login-container h2 {
            color: #555;
            margin-bottom: 2rem;
        }

        .login-container form {
            display: flex;
            flex-direction: column;
        }

        .login-container input {
            padding: 1rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .login-container button {
            padding: 1rem;
            border: none;
            border-radius: 4px;
            background-color: #5e35b1;
            color: white;
            cursor: pointer;
        }

        .login-container button:hover {
            background-color: #4527a0;
        }

        .forgot-password {
            color: #333;
            text-decoration: none;
            font-size: 0.9rem;
            display: block;
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <!-- Ajout du logo ici -->
        <img src="http://smarttech/projet/images/logo.jpeg" alt="Logo Smart Tech">
        
        <h2>Portail de connexion</h2>
        <form action="/login" method="post">
            <input type="text" name="username" placeholder="Identifiant opérateur" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
            <a href="#" class="forgot-password">Mot de passe oublié?</a>
        </form>
    </div>
</body>
</html>
