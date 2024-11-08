<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../CSS/admin.css">
    
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="#">Reservations</a></li>
            </ul>
        </div>
        <div class="main-content">
            <h1>List of Reservation</h1>

            <div id="reservations-content">
                <h2>Reservations</h2>
                <table>
                    <thead>
                        <tr>
                            <th>FIRSTNAME</th>
                            <th>MIDDLENAME</th>
                            <th>LASTNAME</th>
                            <th>PHONE NUMBER</th>
                            <th>EMAIL</th>
                            <th>DATE</th>
                            <th>ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require_once "cons.php";
                            $sql ="SELECT * FROM bookings_record";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){

                            
                        ?>
                        <tr>
                            <td><?php echo$row['FIRSTNAME'];?></td>
                            <td><?php echo$row['MIDDLENAME'];?></td>
                            <td><?php echo$row['LASTNAME'];?></td>
                            <td><?php echo$row['PHONE'];?></td>
                            <td><?php echo$row['EMAIL'];?></td>
                            <td><?php echo$row['DATE'];?></td>
                            <td>
                                <a href="" class="btn btn-info">VIEW</a>
                                <a href="" class="btn btn-success">EDIT</a>
                                <a href="" class="btn btn-danger">DELETE</a>
                            </td>

                        </tr>
                        <?php
                        }
                        ?>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>