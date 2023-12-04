
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident - Login</title>
    <link rel="stylesheet" href="../Style/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="../Images/qc-brgy-logo.png" type="image/x-icon">
</head>
<body>
    <div class="resident-login-container">

        <div class="resident-login-box">

            <div class="resident-login-logo">
                <img src="../Images/qc-brgy-logo.png" alt="" srcset="">
            </div>
            <div class="resident-login-title">
                <h3>LOGIN AS RESIDENT</h3>
            </div>

            <div class="resident-login-input-box">
                <form action="../Php/resident-event.php">
                <div class="resident-login-input">
                    <input type="text" name="username-resident" id="username-resident" placeholder="Username" class="input">
                </div>

                <div class="resident-login-input">
                    <input type="password" name="password-resident" id="password-resident" placeholder="Password" class="input">
                </div>

                <div class="resident-login-input" id="forBtn">
                    <input type="submit" value="Login" class="btn">
                    <a href="../Php/resident-register.php">Not registered yet? Click Here</a>
                </div>
                </form>
            </div>


            
        </div>
       
    </div>
</body>
</html>