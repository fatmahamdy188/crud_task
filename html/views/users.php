<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="public/style.css">
    <title>Users</title>
</head>
<body>
    <h1>Users List</h1>
    <table>
        <tr><th>Name</th><th>Email</th><th>Actions</th></tr>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= htmlspecialchars($user['name']) ?></td>
                <td><?= htmlspecialchars($user['email']) ?></td>
                <td>
                    <a href="index.php?delete=<?= $user['id'] ?>">Delete</a>
                    <a href="views/update.php?id=<?= $user['id'] ?>">Update</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>