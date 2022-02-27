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

            table, td {
                border: solid;
            }

            th {
                background-color: rgb(0, 0, 0);
                color: rgb(255, 255, 255);
            }
            #submit-button {
                display: inline-block;
                margin-top: 1em;
                padding: 0.5em;
                border-radius: 0.25em;
                background-color: rgb(0, 150, 255);
            }
            #submit-button a {
                text-decoration: none;
                font-weight: bold;
                color: rgb(255, 255, 255);
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
        <div id="submit-button"><a href="insert.php">新規レコード追加</a></div>
    </body>
</html>