<?php
session_start(); 

if (!isset($_SESSION['name'])) {
    header("Location: registration.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Croissave</title>
    <link rel="stylesheet" href="styles.css">
    <script rel = "text/javascript" src = "darktheme.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Adamina&family=Allan:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="readmore.js" defer></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</head>
<body class="account-page">
    <div class="wrapper" style="background-color: #b8dbc9; height: 900px">
        <header class="header">
            <nav class="navbar navbar-expand-lg" style="background-color: #0c720f;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item mx-3">
                            <a class="nav-link active" aria-current="page" href="main.html">Croissave</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="restaurants.html">Restaurants</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="feedback.html">Feedback</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="account.php">Account</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="gallery.html">Gallery</a>
                        </li>
                    </ul>
                    <div class="buttons mb-3" style="padding: 10px;">
                        <a href="signin.html" class="btn btn-primary auth-link">Login</a>
                        <a href="signup.html" class="btn btn-outline-secondary reg-link ml-2">Register</a>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div class="account-block">
                <img src="images/ava.jpg" alt="Avatar" class="avatar">
                <div class="account-info">
                    <h2><?php echo htmlspecialchars($_SESSION['name']); ?></h2>
                    <h2><?php echo htmlspecialchars($_SESSION['surname']); ?></h2>
                    <p><strong>E-mail: </strong><?php echo htmlspecialchars($_SESSION['email']); ?></p>
                    <p><strong>Gender: </strong><?php echo htmlspecialchars($_SESSION['gender']); ?></p>
                </div>
            </div>
            <div class="small_block_acc" style = "width: 400px; height: 70px; background-color: #0c720f; border-radius: 12px; margin-left: 550px;">
                <p style="padding-top: 15px; margin-left: 150px; color: white; font-size: 20px;">My orders</p>
            </div>
        </main>

        <footer>
            <div class="cont" style="background-color: white;">
                <p style="text-align: center; font-size: 20px; font-family: serif; color: black;">Contacts</p>
                <p style="text-align: center; font-size: 15px; font-family: serif; color: black;"><b>Nurgul Bassanova</b><br> tel: +77084940775<br>e-mail: noorgoolearn@mail.ru</p>
                <p style="text-align: center; font-size: 15px; font-family: cursive; color: #462300;">All rights reserved.</p>
            </div>
        </footer>
    </div>

    <script src="lightdark.js" defer></script>
</body>

</html>