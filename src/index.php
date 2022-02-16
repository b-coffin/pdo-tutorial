<html>
    <head>
        <meta charset="utf-8">
        <title>PDO Tutorial</title>
    </head>
    <body>
        <h3>PDO Tutorial</h3>
        <?php
            try {
                $pdo = new PDO('mysql:host=db;dbname=homestead;', 'root', 'secret');
                $result = $pdo->query('SELECT 1');
                print_r($result);
            } catch (PDOException $e) {
                echo $e->getMessage();
                exit();
            }
        ?>
    </body>
</html>