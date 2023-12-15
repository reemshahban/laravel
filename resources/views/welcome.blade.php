<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to My Website</title>

    <style>
        /* Your existing styles remain here */

        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .auth-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            position: relative;
        }

        .welcome-message {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            margin-top: -300px; /* Adjusted margin */
        }

        .auth-buttons {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
            margin-bottom: -20px; /* Adjusted margin */
        }

        .auth-buttons a {
            margin: 0.5rem;
            padding: 1rem 2rem;
            font-weight: 600;
            text-decoration: none;
            color: #fff;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease;
        }

        .auth-buttons a.login-btn {
            background-color: #4CAF50; /* Green color for login button */
        }

        .auth-buttons a.register-btn {
            background-color: #2196F3; /* Blue color for register button */
        }

        .auth-buttons a:hover {
            opacity: 0.8;
        }

        .documentation {
            position: absolute;
            bottom: 10px;
            left: 10px;
            font-size: 1.5rem; /* Increased font size */
            color: #555;
            text-align: left; /* Adjusted text alignment to left */
            max-width: 250px;
            white-space: pre-line;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 0.5rem;
            background-color: #cecaca;
            box-shadow: 0px 0px 10px 0px #aaa;
        }

        .documentation b {
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="auth-container">
        <div class="welcome-message">Welcome!!</div>
        
        <div class="auth-buttons">
            <a href="{{ route('login') }}" class="login-btn">Log in</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="register-btn">Register</a>
            @endif
        </div>

        <div class="documentation">
            <b>Documentation:</b><br>This system allows adding, deleting, and modifying exams<br>so that they can be displayed to the user,<br>and the user can choose between them.
        </div>
    </div>

</body>
</html>
