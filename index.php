<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <style>
        .container{
            display: flex;
            gap: 10px;
        }

        table{
            border-collapse: collapse;
        }

        table th{
            padding: 5px 10px 10px;
        }

        table td{
            padding: 10px;
        }

        .profile{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* will be changed later */
        .placeholder{
            background: white;
            width: 100px;
            height: 100px;
            border: 1px solid black;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="profile">
                <div class="profileLeft">
                    <!-- Will Be Changed Later -->
                    <div class="placeholder"></div>
                </div>
                <div class="profileRight">
                    <h3>ADMIN</h3>
                    <h3>admin@gmail.com</h3>
                </div>
            </div>
            <div class="nav">
                <div class="navBox"><a href="#">Navigation</a></div>
                <div class="navBox"><a href="#">Navigation</a></div>
                <div class="navBox"><a href="#">Navigation</a></div>
                <div class="navBox"><a href="#">Navigation</a></div>
                <div class="navBox"><a href="#">Navigation</a></div>
                <div class="navBox"><a href="#">Navigation</a></div>
            </div>
        </div>
        <div class="right">
            <h1>Employee File Information</h1>
            <table border=1>
                <tr>
                    <th>ID Number</th>
                    <th>Employee ID Number</th>
                    <th>Picture</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                <?php
                    $sql = mysqli_query($con, "SELECT * FROM primaryinformation");

                    while ($row = mysqli_fetch_assoc($sql)){
                ?>

                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td>
                                <a href="#">
                                    <?php echo $row['employee_id']; ?>
                                </a>
                            </td>
                            <td><?php echo $row['picture']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                            <td style="font-weight: bold;">
                                <?php echo $row['lname']. ", "; ?>
                                <?php echo $row['fname']. " "; ?>
                                <?php echo $row['mname']. "."; ?>
                            </td>
                            <td>
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
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