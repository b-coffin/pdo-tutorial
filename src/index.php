<html>
    <head>
        <meta charset="utf-8">
        <title>PDO Tutorial</title>
    </head>
    <body>
        <h3>PDO Tutorial</h3>
        <?php
            try {
                $pdo = new PDO('mysql:host=db;dbname=homestead;port=3306', 'root', 'secret');
                $result = $pdo->query('SELECT * FROM users');
                foreach ($result as $row) {
                    print_r($row);
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
                exit();
            }
        ?>
    </body>
</html>