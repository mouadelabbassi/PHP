<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filled Registration Form</title>
    <link rel="stylesheet" href="cb.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <center>
        <div class="container">
            <div class="heading">Review Your Details</div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $firstname = htmlspecialchars($_POST['firstname']);
                $lastname = htmlspecialchars($_POST['lastname']);
                $email = htmlspecialchars($_POST['email']);
                $phone = htmlspecialchars($_POST['phone']);
                $password = htmlspecialchars($_POST['password']);
            } else {
                $firstname = "";
                $lastname = "";
                $email = "";
                $phone = "";
                $password = "";
            }
            ?>
            <form class="form" action="cible.php" method="post">
                <input class="input"  type="text" id="firstname" name="firstname" value="<?= $firstname ?>" required>
                <input class="input" type="text" id="lastname" name="lastname" value="<?= $lastname ?>" required>
                <input class="input" type="email" id="email" name="email" value="<?= $email ?>" required>
                <input class="input" type="tel" id="phone" name="phone" value="<?= $phone ?>" required>
                <input class="input" type="password" id="password" name="password" value="<?= $password ?>" required>
                <div class="box">
                    <label>
                        <input type="checkbox" id="showPassword"> Show Password
                    </label>
                </div>
                <input class="login-button" type="submit" value="Confirm">
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