<?php

include("connection.php");
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = '$id'";

$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleup.css">
    <title>Editar usuario</title>
</head>
<body>

    <div class="users-form">
        <h2>Editar usuario</h2>

        <form action="edit_user.php" method="POST">

            <input type="hidden" name="id" value="<?= $row['id']?>">
            <label for="name">Nombre:</label>
            <input type="text" name="name" value="<?= $row['name'] ?>" required><br>

            <label for="lastname">Apellido:</label>
            <input type="text" name="lastname" value="<?= $row['lastname'] ?>" required><br>

            <label for="username">Usuario:</label>
            <input type="text" name="username" value="<?= $row['username'] ?>" required><br>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" value="<?= $row['password'] ?>" required><br>

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" value="<?= $row['email'] ?>" required><br>

            <input type="submit" value="Editar">
        </form>
    </div>
    <style>
        .users-form {
    width: 300px;
    margin:  auto; 
    padding: 80px;
    background: linear-gradient(135deg, #FFD700, #00FF00); 
    border-radius: 10px;
    text-align: center; 
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); 
}

h2 {
    color: #0a0808; 
    font-family: Georgia, 'Times New Roman', Times, serif;
}

label {
    display: block;
    margin-top: 10px;
    color: #555; 
    font-family: Georgia, 'Times New Roman', Times, serif
}

input[type="text"],
input[type="password"],
input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus {
    border-color: #007bff;
}

input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    margin-top: 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #b06868;}
    </style>
</body>
</html>