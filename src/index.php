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
                $result = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
                $columns = $pdo->query('SHOW COLUMNS FROM users')->fetchAll(PDO::FETCH_COLUMN, 0);
                if (is_array($result) && is_array($columns)) {
                    print('<table><thead><tr>');
                    foreach ($columns as $column) {
                        print('<th>'.$column.'</th>');
                    }
                    print('</tr></thead><tbody>');
                    foreach ($result as $row) {
                        print('<tr>');
                        foreach ($row as $value) {
                            print('<td>'.$value.'</td>');
                        }
                        print('</tr>');
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