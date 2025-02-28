<?php
include(__DIR__ . '/../config/db.php');

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    $stmt = $pdo->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
    $stmt->execute([$name, $email, $id]);

    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" value="<?= $user['name'] ?>" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" value="<?= $user['email'] ?>" required>
        <br>
        <button type="submit">Update User</button>
    </form>
    <a href="index.php">Back</a>
</body>
</html>
