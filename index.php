<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    echo "Submit successfully";
    echo "<br>";
    echo "Your username: " . $username;
    echo "<br>" . "Your email: " . $email;

}