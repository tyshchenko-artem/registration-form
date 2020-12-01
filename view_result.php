<html>
<head>
    <meta charset="UTF-8">
    <title>Table of Users</title>
    <link rel="stylesheet" href="style_for_table.css">
</head>
<body>
    <h1>Table of Users</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Login</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        <?php


            $connect = mysqli_connect('localhost', 'root', 'root', 'newdb');

            if (!$connect) {
            die('Error connect to database!');
            }

            $users = mysqli_query($connect, "SELECT * FROM `users`");
            $users = mysqli_fetch_all($users);
            foreach ($users as $user) {
                ?>

                <tr>
                    <td><?=$user[0]?></td>
                    <td><?=$user[1]?></td>
                    <td><?=$user[2]?></td>
                    <td><?=$user[3]?></td>
                </tr>

                <?php
            }
        ?>
    </table>
</body>
</html>
