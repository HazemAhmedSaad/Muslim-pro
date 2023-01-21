<?php
require_once '../models/User.php';
require_once '../controllers/authController.php';
$user = new User;
$auth = new authController;
if (!isset($_SESSION["email"])) {
    session_start();
}
if (isset($_POST['email']) && isset($_POST['password'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $setmail = $user->setEmail($_POST['email']);
        $setpass = $user->setPassword($_POST['password']);
        $getmail = $user->getEmail();
        $getpass = $user->getPassword();
        $auth->login($getmail, $getpass);
    } else {
        echo '<span class="message">please fill all fields</span>';
    }
}
?>
<script>
function validateForm() {
    var x = document.querySelector(".email").value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Not a valid e-mail address");

        return false;
    }
}
window.onload = setTimeout(function() {
    document.querySelector('.message').style.display = 'none';
}, 3000);
</script>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../static/css/leon.css" />
    <link rel="stylesheet" href="../static/css/normalize.css" />
    <link rel="stylesheet" href="../static/css/all.min.css" />
    <link rel="stylesheet" href="../static/css/login.css">

</head>

<body>
    <?php include "nav.php" ?>

    <div class="container log-cont">
        <div class="login-box">
            <h1>Login</h1>
            <form method="POST">
                <div class="user-box">
                    <input onchange="validateForm()" class="email" type="text" name="email" required="">
                    <label>Email</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" required="">
                    <label>Password</label>
                </div>
                <button type="submit" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Login
                </button>
            </form>
        </div>
    </div>
    <?php include "footer.php" ?>

</body>

</html>