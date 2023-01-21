<?php
require_once '../controllers/dbController.php';
require_once '../models/User.php';

class authController

{
    protected $db;
    protected $user;
    function register($email, $password)
    {
        $this->db = new DBController;
        $selectcheck = $this->db->get("SELECT * FROM user");
        if ($selectcheck[1]['email'] == $email) {
            echo "Email already exists";
        } else {
            $insertUser = $this->db->create("INSERT INTO user(email,password,roleid) VALUES('$email','$password',2)");
            if ($insertUser) {
                $_SESSION['email'] = $email;
                echo '<span class="message">New user added successfully will be redirecting to login page</span>';;
                echo "<script>setTimeout(\"location.href = './login.php';\",2600);</script>";
            } else {
                echo '<span class="message">Error</span>';
            }
        }
    }





    function login($email, $password)
    {
        $this->db = new dbController;
        $selectUser = $this->db->get("select * from user where email='$email' and password ='$password'");
        //if user roleid 1 then it is admin redirect him to admin dashboard else redirect to index

        if ($selectUser) {
            if ($selectUser[0]['roleid'] == 1) {
                $_SESSION['email'] = $email;
                $_SESSION['userRole'] = 'Admin';
                echo '<span class="message">You are logged in as admin will be redirected to admindashboard</span>';
                echo "<script>setTimeout(\"location.href = './adminDashboard.php';\",2600);</script>";
            } else {
                $_SESSION['email'] = $email;
                $_SESSION['userRole'] = 'Client';
                echo '<span class="message">You are logged in as client you will be redirected to your home page</span>';
                echo "<script>setTimeout(\"location.href = './index.php';\",2600);</script>";
            }
        } else {
            echo '<span class="message">Error</span>';
        }
    }
}
