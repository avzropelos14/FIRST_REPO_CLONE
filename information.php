<?php 
    include 'connect.php';
    $id = $_GET['ID'];

    $query = mysqli_query($con, "SELECT * FROM information where id='$id'");
    while ($row = mysqli_fetch_assoc($query)){
        $middleInitial = $row['mname'];
        $index = 0;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
    <style>
        *{
            font-family: monospace;
        }

        table{
            border-collapse: collapse;
            width: 100%;
        }

        table *{
            text-align: center;
            padding: 10px;
        }

        .box{
            background: #00adff;
            height: 100%;
            padding: 10px;
            border: 1px solid #000;
            border-radius: 25px;
            display: flex;
            justify-items: center;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .left p{
            margin: 0;
            text-align: center;
        }

        img{
            width: 150px;
            border-radius: 50%;
            border: 1px solid #000;
        }

        .container{
            display: flex;
            justify-content: center;
            width: 100%;
            height: 100%;
            gap: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <div class="box">
                <div class="top"><img src="images/<?php echo $row['picture']; ?>.png"></div>
                <div class="bottom">
                    <p>
                        <?php echo $row['lname']. ", ";?>
                        <?php echo $row['fname']. " ";?>
                        <?php 
                            if (isset($middleInitial[$index])){
                                echo ucfirst($middleInitial[$index]). ".";
                            }
                        ?>
                    </p>
                    <p><?php echo $row['email_address'];?></p>
                </div>
            </div>
        </div>
        <div class="right">
            <h1>Primary Informaion</h1>
            <table border=1>
                <tr>
                    <th>Employee ID Number</th>
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                </tr>
                    <tr>
                        <td><?php echo $row['employee_id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row['mname']; ?></td>
                        <td><?php echo $row['lname']; ?></td>
                    </tr>
                <tr>
                    <td colspan="5"></td>
                </tr>
                <tr>
                    <th colspan="2">Age</th>
                    <th colspan="1">Sex</th>
                    <th colspan="2">Date of Birth</th>
                </tr>
                    <tr>
                        <td colspan="2"><?php echo $row['age']; ?></td>
                        <td colspan="1"><?php echo $row['sex']; ?></td>
                        <td colspan="2"><?php echo $row['dob']; ?></td>
                    </tr>
            </table>

            <h1>Secondary Informaion</h1>
            <table border=1>
                <tr>
                    <th colspan="2">Email Address</th>
                    <th colspan="5">Phone Number</th>
                </tr>
                    <tr>
                        <td colspan="2"><?php echo $row['email_address']; ?></td>
                        <td colspan="5"><?php echo $row['phone_number']; ?></td>
                    </tr>
                <tr><!-- Blank --></tr>
                <tr><th colspan="7">PHYSICAL HOME ADDRESS</th></tr>
                <tr>
                    <th>House Number</th>
                    <th>Building Name/Number</th>
                    <th>Street Name</th>
                    <th>City/Town</th>
                    <th>State</th>
                    <th>Zip Code</th>
                    <th>Country</th>
                </tr>
                    <tr>
                        <td><?php echo $row['house_number']; ?></td>
                        <td><?php echo $row['building_name']; ?></td>
                        <td><?php echo $row['street_name']; ?></td>
                        <td><?php echo $row['city_town']; ?></td>
                        <td><?php echo $row['state']; ?></td>
                        <td><?php echo $row['zip_code']; ?></td>
                        <td><?php echo $row['country']; ?></td>
                    </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>