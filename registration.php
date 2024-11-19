<?php
ini_set('session.gc_maxlifetime', 1000); 
session_set_cookie_params(1000);   
session_start();
$host = 'localhost';
$user = 'nurgul';
$pass = 'Nurgul22!';
$dbnm = 'croissave';

$link = mysqli_connect($host, $user, $pass, $dbnm);

if (isset($_POST['button_signup'])) {
    $name = $_POST['first_name'];
    $surname = $_POST['surname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $passw1 = $_POST['psswrd1'];
    $passw2 = $_POST['psswrd2'];
    $rightlen = 6;
    $password_pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()]).*$/'; 
    $errorMessages = []; 

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessages[] = "Invalid email format!";
    }

    if (!preg_match($password_pattern, $passw1)) {
        $errorMessages[] = "Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character!";
    }

    if ($passw1 !== $passw2) {
        $errorMessages[] = "Passwords do not match!";
    } elseif (strlen($passw1) < $rightlen) {
        $errorMessages[] = "Password must be at least $rightlen characters long!";
    }

    if (!empty($errorMessages)) {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Signup Error</title>
        </head>
        <body>
            <ul>";
        
        foreach ($errorMessages as $message) {
            echo "<li>$message</li>"; 
        }

        echo "</ul>
             <button onclick='window.location.href=\"signup.html\"'>Back</button>  
        </body>
        </html>";
        exit; 
    }

    $sql = mysqli_query($link, "INSERT INTO `guests`(`name_guest`, `surname_guest`, `gender_guest`, `email_guest`, `passw_guest`) VALUES ('$name', '$surname', '$gender', '$email', '$passw1');");
    
    if ($sql) {
        $_SESSION['name'] = $name;
        $_SESSION['surname'] = $surname;
        $_SESSION['gender'] = $gender;
        $_SESSION['email'] = $email;
        header('Location: account.php');
        exit;
    } else {
        echo "Database error: " . mysqli_error($link); 
    }
}
?>
