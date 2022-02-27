<?php
    try {
        if (array_key_exists('name', $_POST)) {
            $name = $_POST['name'];
            $pdo = new PDO('mysql:host=db;dbname=homestead;port=3306', 'root', 'secret');
            $insertStatement = $pdo->prepare('INSERT INTO homestead.users SET name=:name');
            $insertStatement->execute(array(':name' => $name));
            header("Location:index.php");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit();
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>INSERT - PDO Tutorial -</title>
    </head>
    <body>
        <h3>新規ユーザ追加</h3>
        <form action="insert.php" method="post">
            <label for="name">名前:</label>
            <input type="text" name="name" id="name" required>
            <input type="submit" value="保存">
        </form>
    </body>
</html>