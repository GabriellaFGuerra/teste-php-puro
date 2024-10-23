<?php
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $code = $_POST['code'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $apiUrl = 'https://jsonplaceholder.typicode.com/posts/1';
    $response = file_get_contents($apiUrl);
    $data = json_decode($response, true);
    $title = $data['title'];

    $sql = "INSERT INTO users (name_user, email_user, password_user, title_user, code_user) 
            VALUES (:name, :email, :password, :title, :code)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':password' => $password,
        ':title' => $title,
        ':code' => $code
    ]);

    echo "Usuário cadastrado com sucesso!";
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <h1>Cadastro de Usuário</h1>
    <form action="register.php" method="POST">
        <label>Nome:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Código Único:</label><br>
        <input type="text" name="code" required><br><br>

        <label>Senha:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>