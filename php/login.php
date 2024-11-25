<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UDigital</title>
    <link rel="shortcut icon" href="../assets/favicon/favicon.ico" type="image/x-icon">
    <!-- Link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card bg-dark text-light shadow-lg p-4 border-secondary" style="max-width: 400px; width: 100%;">
            <h2 class="text-center mb-4">Login</h2>
            <form action="login.php" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" id="username" name="username" class="form-control bg-secondary text-light border-0" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control bg-secondary text-light border-0" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php
    include_once("config/config.php"); // conectar com o banco de dados
    session_start();
    $username = !empty($_POST['username']) ? $_POST['username'] : false;
    $password = !empty($_POST['password']) ? $_POST['password'] : false;  

    if($username && $password){
        $hashusername = md5(trim(strtolower($_POST['username'])));
        $hashpassword = md5(trim(strtolower($_POST['password'])));
        $cookie_expiration = time() + 3600;

        $sql = "SELECT * FROM usuario WHERE username = '" . $hashusername . "' AND password = '". $hashpassword . "'";
        // recebendo o resultado da query
        $result = mysqli_query($link, $sql);

        if(mysqli_num_rows($result) > 0){ // se o número de linhas retornado for maior que 0, então tem um usuário no sistema
            echo "Login successful!";
            setcookie("username", $username, $cookie_expiration, "/");
            setcookie("loggedin", "1", $cookie_expiration, "/");
            header("Location: main.php");

        }else{
            echo "Invalid username or password.";
        }
    }else{
        echo "Please fill both username and password.";
    }
?>