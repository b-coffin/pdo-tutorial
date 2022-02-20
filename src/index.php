<html>
    <head>
        <meta charset="utf-8">
        <title>PDO Tutorial</title>
        <style>
            table {
                border-collapse: collapse;
            }

            td, th {
                padding: 0.5em;
            }

            table, td, th {
                border: solid;
            }
        </style>
    </head>
    <body>
        <h3>PDO Tutorial</h3>
        <?php
            try {
                $pdo = new PDO('mysql:host=db;dbname=homestead;port=3306', 'root', 'secret');
                $result = $pdo->query('SELECT * FROM users');
                if ($result instanceof PDOStatement) {
                    print('<table><thead><tr><th>id</th><th>name</th></tr></thead><tbody>');
                    foreach ($result as $row) {
                        print('<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td></tr>');
                    }
                    print('</tbody></table>');
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
                exit();
            }
        ?>
    </body>
</html>