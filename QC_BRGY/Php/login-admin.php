<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login</title>
    <link rel="stylesheet" href="../Style/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="../Images/qc-brgy-logo.png" type="image/x-icon">
</head>
<body>
    <div class="admin-login-container">

        <div class="admin-login-box">

            <div class="admin-login-logo">
                <img src="../Images/qc-brgy-logo.png" alt="" srcset="">
            </div>
            <div class="admin-login-title">
                <h3>LOGIN AS ADMIN</h3>
            </div>

            <div class="admin-login-input-box">

                <form action="../Php/admin-page.php" method="get">

                    <div class="admin-login-input">
                        <input type="text" name="username-admin" id="username-admin" placeholder="Username" class="input">
                    </div>

                    <div class="admin-login-input">
                        <input type="password" name="password-admin" id="password-admin" placeholder="Password" class="input">
                    </div>

                    <div class="admin-login-input" id="forBtn">
                        <input type="submit" value="Login" class="btn">
                    </div>

                </form>

            </div>


            
        </div>
       
    </div>
</body>
</html>