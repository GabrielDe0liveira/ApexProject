<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>PCC | Login</title>
</head>
<body>
    <div class="wrapper">
        <form action="autenticacao.php" method="post">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name='email'placeholder="  Email" required>
                <i class='bx bxs-user-rectangle'></i>
            </div>
            <div class="input-box">
                <input type="password" name='senha' placeholder="  Senha" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

<<<<<<<< HEAD:Login/index.html
            <div class="remember-forgot">
                <label><input type="checkbox">Lembre-se de mim</label>
                <a href="#">Esqueceu sua senha?</a>
            </div>
========
            <!-- <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password?</a>
            </div> -->
>>>>>>>> b5ec92923a8c3d3bc4ddd491996c142f7d628631:loginPage.php

            <button type="submit" name='submit' class="btn">Login</button>

            <div class="register-link">
                <p>Não possui uma conta? 
<<<<<<<< HEAD:Login/index.html
                <a href="../Registro/index.html">Registre-se!</a></p>
========
                <a href="cadastro.php">Registre-se!</a></p>
>>>>>>>> b5ec92923a8c3d3bc4ddd491996c142f7d628631:loginPage.php
            </div>
        </form>
    </div>
</body>
</html>