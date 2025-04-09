<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        *{
            font-family: monospace;
        }

        .container{
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .left{
            display: grid;
            gap: 20px;
        }

        .admin{
            display: flex;
            align-items: center;
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px 15px;
            background: #00adff;
            gap: 10px;
        }

        .admin *{
            margin: 0;
            text-align: center;
        }

        .bottom{
            display: grid;
            gap: 10px;
        }

        .nav{
            text-decoration: none;
            text-align: center;
            padding: 10px 15px;
            background: linear-gradient(#d7d7d7, #545454);
            border: 1px solid black;
            border-radius: 10px;
        }

        a{
            color: black;
        }

        td div a{
            background: #00adff;
            font-size: 15px;
            border: 1px solid hsl(199, 100.00%, 25.00%);
            padding: 5px 15px;
            color: white;
            text-decoration: none;
            border-radius: 25px;
        }

        td div{
            display: grid;
            gap: 5px;
        }

        .right h2,
        td{
            text-align: center;
            padding: 5px;
        }

        table{
            border-collapse: collapse;
        }

        th{
            padding: 5px 15px 15px;
            font-size: 10px;
        }

        img{
            width: 50px;
            border-radius: 50%;
            border: 1px solid #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="admin">
                <div class="admin-left">
                    <img src="images/1.png">
                </div>
                <div class="admin-right">
                    <h3>ADMIN</h3>
                    <h3>admin@gmail.com</h3>
                </div>
            </div>
            <div class="bottom">
                <a href="#" class="nav">Navigation</a>
                <a href="#" class="nav">Navigation</a>
                <a href="#" class="nav">Navigation</a>
                <a href="#" class="nav">Navigation</a>
                <a href="#" class="nav">Navigation</a>
                <a href="#" class="nav">Navigation</a>
            </div>
        </div>
        <div class="right">
            <h2>Enployee File Information</h2>
            <table border=1>
                <tr>
                    <th>Id Number</th>
                    <th>Employee ID Number</th>
                    <th>Picture</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                <?php
                    $query = mysqli_query($con, "SELECT * FROM information");

                    while ($row = mysqli_fetch_assoc($query)){
                        $middleInitial = $row['mname'];
                        $index = 0;
                ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><a href="information.php?ID=<?php echo $row['id'];?>"><?php echo $row['employee_id'];?></a></td>
                        <td><img src="images/<?php echo $row['picture']; ?>.png"></td>
                        <td><?php echo $row['title'];?></td>
                        <td>
                            <p>
                                <?php echo $row['lname']. ", ";?>
                                <?php echo $row['fname']. " ";?>
                                <?php
                                    if (isset($middleInitial[$index])){
                                        echo ucfirst($middleInitial[$index]). ".";
                                    }
                                ?>
                            </p>
                        </td>
                        <td>
                            <div>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>