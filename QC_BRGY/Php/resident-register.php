<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../Style/style.css?v=<?php echo time(); ?>">
    <link rel="shortcut icon" href="../Images/qc-brgy-logo.png" type="image/x-icon">
</head>
<body>

    <div class="register-container">

        <div class="register-box">

            <div class="register-title">
                <img src="../Images/qc-brgy-logo.png" alt="">
                <label>Registration Form</label>
            </div>

            <div class="register-form">
                <form action="#">
                    <div class="register-input">
                        <label>Fullname</label>
                        <input type="text" name="userFullName" id="userFullName" class="input-form" required>
                    </div>
                    <div class="register-input">
                        <label>Address</label>
                        <input type="text" name="userAddress" id="userAddress" class="input-form" required>
                    </div>
                    <div class="register-input">
                        <label>Age</label>
                        <input type="number" name="userAge" id="userAge" class="input-form" required>
                    </div>
                    <div class="register-input">
                        <label>Birthdate</label>
                        <input type="date" name="userBirthDate" id="userBirthDate" class="input-form" required>
                    </div>
                    <div class="register-input">
                        <label>UserName</label>
                        <input type="text" name="userName" id="userName" class="input-form" required>
                    </div>
                    <div class="register-input">
                        <label>Password</label>
                        <input type="text" name="userPassword" id="userPassword" class="input-form" required>
                    </div>
                    <div class="register-input">
                        <label>Upload Your Picture</label>
                        <input type="file" name="userPhoto" id="userPhoto" class=""required>
                    </div>
                    <div class="register-btn">
                        <input type="submit">
                    </div>
                    
                </form>
            </div>

        </div>
    </div>

</body>
</html>