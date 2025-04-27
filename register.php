<table border="3">
   
        <tr>
            <th>id</th>
            <th>name</th>
            <th>password</th>
            <th>email</th>
            <th>phone</th>
            <th>address</th>
            <th>gender</th>
            
        
        </tr>
   
    
        <?php
        include "connection.php";

        $sql = "SELECT * FROM admin";
        $select = $con->query($sql);
             $id=1;
        if ($select->num_rows > 0) {
            while ($a = $select->fetch_array()) {
                $id=$a['0'];

                echo "<tr>";
                echo "<td>" . $a[0] . "</td>";
                echo "<td>" . $a[1] . "</td>";
                echo "<td>" . $a[2] . "</td>";
                echo "<td>" . $a[3] . "</td>";
                echo "<td>" . $a[4] . "</td>";
                echo "<td>" . $a[5] . "</td>";
                echo "<td>" . $a[6] . "</td>";
                echo "</tr>";
            }
        
        }
        ?>
  <tr>
   <td><button><a href="delete.php?deleteid=<?php echo $id;?>">delete</a></button></td>
   <td><button><a href="update.php?updateid=<?php echo $id;?>">update</a></button></td>
 
  </tr>

</table>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        form {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="number"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #218838;
        }   
    </style>
</head>
<body>
    <form action="home.php" method="post">
        <h1>register</h1>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter your username" required>
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
        <br><br>
        
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>
        <br><br>
        <label for="phone">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Enter your phone number" required>
        <br><br>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Enter your address" required>
        <br><br>
        <label for="gender">gender</label><br>
        <input type="radio" name="gender" id="male" value="male">male<br>
        <input type="radio" name="gender" id="female" value="female">female<br><br>
        <button type="submit" name="send">create account</button>
    </form>
</body>
</html>
