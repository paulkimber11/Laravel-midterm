<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styles */
        body {
            background-image: url('https://images.unsplash.com/photo-1631631480669-535cc43f2327?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            height: 100vh;
            font-family: Arial, sans-serif; /* Setting a font family */
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-form {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1); /* Adding a subtle shadow */
            max-width: 400px;
            width: 100%;
        }
        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form button {
            margin-bottom: 20px;
        }
        .login-form button {
            padding: 12px;
            font-size: 18px;
        }
        .login-form h2 {
            margin-bottom: 30px;
            color: #333;
            text-align: center;
        }
        .forgot-password {
            text-align: center;
            margin-top: 20px;
        }
        .forgot-password a {
            color: #555;
            text-decoration: none;
        }
        .forgot-password a:hover {
            color: #000;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="login-form">
            <h2>Login</h2>
            <form action="/login" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
            <div class="forgot-password">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
