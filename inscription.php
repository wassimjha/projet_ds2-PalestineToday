<?php
session_start();
include_once 'connexion.php';
include_once 'User.php';
include_once 'mail.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mail = $_POST['mail'];

    // Create database connection
    $database = new Database();
    $db = $database->getConnection();

    // Initialize User object
    $user = new User($db);

    // Register user
    if ($user->registerUser($username, $password, $mail)) {
        header('Location: authentification.php');
        sendEmail($mail, 'Welcome to Palestine Today! We are thrilled to have you join our community of passionate individuals who are dedicated to sharing and learning about Palestine.','Welcome to PalestineToday !');
        exit();
    } else {
        header('Location: inscription.php');
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Palestine Blog</title>
  <link rel="stylesheet" href="login_style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
</head>
<body>
  <div class="wrapper">
    <form action="inscription.php" method="post" name="f">
      <h1>S'inscrire</h1>
      <div class="input-box">
        <input type="text" placeholder="Nom d'utilisateur" name="username" pattern="^[^\s]+$" title="Username must not contain spaces." required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Mot de Passe" name="password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="input-box">
        <input type="mail" placeholder="E-mail" name="mail" required pattern="[a-zA-Z0-9._%+-]+@gmail\.com$" title="Veuillez saisir une adresse Gmail valide">
      </div>
      <button type="submit" class="btn" onclick="verif()">Créer</button>
    </form>
  </div>
</body>
</html>