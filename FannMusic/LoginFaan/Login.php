<?php
class UserLogin {
    protected $username;
    protected $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
    }

    public function validateCredentials() {
        $validUsername = "demo";
        $validPassword = "demo123";

        return ($this->username === $validUsername && $this->password === $validPassword);
    }
}

class LoginForm extends UserLogin {
    public function __construct($username, $password) {
        parent::__construct($username, $password);
    }

    public function processFormSubmission() {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $username = isset($_GET['username']) ? $_GET['username'] : '';
            $password = isset($_GET['password']) ? $_GET['password'] : '';

            if ($this->validateCredentials()) {
                $_SESSION['username'] = $username;
                exit();
            } else {
                echo "<script>alert('Kredensial tidak valid. Silakan coba lagi.');</script>";
            }

            $loginForm = new LoginForm($username, $password);
            $loginForm->processFormSubmission();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/Faan logo.jpg" type="image/x-icon"> 
    <title>Login Page</title>

<style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background: #f1f1f1; 
    }

    video {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1;
    }

    .login-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 300px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2, label {
        color: #333;
        text-align: center; 
    }

    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc; 
        border-radius: 4px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #13a876;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #a5a8a5;
    }

</style>
</head>

<body>
    <video autoplay muted loop>
        <source src="background.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="login-container">
        <h2>FaanMusic Login</h2>

        <form action="index.php" method="POST">
            <label for="username">Username:</label>
            <input required type="text" id="username" name="username">
            <label for="password">Password:</label>
            <input required type="password" id="password" name="password">
            <input type="submit" value="LOGIN">
        </form>
    </div>
</body>
</html>
