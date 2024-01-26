<!DOCTYPE html>
<html lang="en">
<?php
include 'connection.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <style>
        /* Add your CSS styles here */
        body {
            background-image: url('travel.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Add a semi-transparent overlay */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
        }

        header {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 50px;
        }

        header h1 {
            font-size: 40px;
            font-style: italic;
        }

        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 10px;
            color: white;
            font-size: 50px;
        }

        .admin-portal {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 20px;
            border-radius: 10px;
        }

        .admin-portal h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #3498db;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <header>
        <h1>Voyage Vista</h1>
    </header>
    <nav>
        <a href="admin.html">Admin</a>
    </nav>
    <div class="admin-portal">
        <h2>Registered Users</h2>
        <?php
        $sql="select * from users WHERE usertype = 'user'";
        $result=$connect->query($sql);
        if($result->num_rows > 0)
        {
            ?>

        <table>
          
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                
                
            </tr>
            <?php
            while($row=$result->fetch_assoc())
            {
                echo '<tr>';
                echo'<td>';
                echo $row["username"];
                echo '</td>';
                echo'<td>';
                echo $row["email"];
                echo '</td>';
                echo'<td>';
                echo $row["password"];
                echo '</td>';
        
            }
        }
        
            ?>
            <!-- Add more rows for other registered users -->
        </table>
    </div>
</body>
</html>

