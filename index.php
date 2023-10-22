<?php

include("connection.php");

$con = connection();

$sql = "SELECT * FROM users";

$query = mysqli_query($con, $sql);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleindex.css">
    <title>Página dos</title>
    
</head>
<body>
    <div class="users-form">
        <h2>Únase aquí:</h2>

        <form action="insert_user.php" method="POST">

            <label for="name">Nombre:</label>
            <input type="text" name="name" required><br>

            <label for="lastname">Apellido:</label>
            <input type="text" name="lastname" required><br>

            <label for="username">Usuario:</label>
            <input type="text" name="username" required><br>

            <label for="password">Contraseña:</label>
            <input type="password" name="password" required><br>

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" required><br>

            <input type="submit" value="Registrarse">
        </form>
    </div>

    <div class="users-table">
        <h2>Usuarios registrados</h2>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>lastname</th>
                    <th>username</th>
                    <th>password</th>
                    <th>email</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row ['id'] ?></th>
                        <th> <?=  $row ['name'] ?></th>
                        <th><?= $row ['lastname'] ?></th>
                        <th><?= $row ['username'] ?></th>
                        <th><?= $row ['password'] ?></th>
                        <th><?= $row ['email'] ?></th>
                        <th><a class="users-table--edit" href="update.php?id=<?= $row['id']?>">Editar</a></th>
                        <th><a class="users-table--delete" href="delete_user.php?id=<?= $row['id'] ?>" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <h1>¡Nosotros!</h1>
        <a href="inicio.html"><button id="boton">Volver al sitio web</button></a>
        <ul></ul>
</body>
</html>