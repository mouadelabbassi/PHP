<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <center>
        <div class="container">
            <div class="heading">Sign In</div>
            <form action="cible.php" class="form" method="post">
                <input required="" class="input" type="text" name="firstname" id="firstname" placeholder="Enter your First Name">
                <input required="" class="input" type="text" name="lastname" id="lastname" placeholder="Enter your Last Name">
                <input required="" class="input" type="email" name="email" id="email" placeholder="Enter your Email">
                <input required="" class="input" type="tel" name="phone" id="phone" placeholder="Enter your Phone Number">
                <input required="" class="input" type="password" name="password" id="password" placeholder="Enter your Password">
                <div class="box">
                    <label>
                        <input type="checkbox" id="showPassword"> Show Password
                    </label>
                </div>
                <input class="login-button" type="submit" value="Submit">
            </form>
        </div>
    </center>
    <script>
        // JavaScript to toggle password visibility
        const passwordField = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('showPassword');

        showPasswordCheckbox.addEventListener('change', () => {
            if (showPasswordCheckbox.checked) {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        });
    </script>
</body>

</html>