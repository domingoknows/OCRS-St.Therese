<?php
if(isset($_GET['date'])){
    $date = $_GET['date'];
}

if(isset($_POST['submit'])){

    $fname =$_POST['FIRSTNAME'];
    $mname =$_POST['MIDDLENAME'];
    $lname =$_POST['LASTNAME'];
    $phone =$_POST['PHONE'];
    $email =$_POST['EMAIL'];
    $events = $_POST['EVENTS'];

    $conn = new mysqli('localhost','root','','bookingsysystem');

    $sql ="INSERT INTO bookings_record(FIRSTNAME,MIDDLENAME,LASTNAME,PHONE,EMAIL,DATE,EVENTS)VALUES('$fname','$mname','$lname','$phone','$email','$date','$events')";
    if($conn ->query($sql)){
        $message = "<div class='alert alert-success'>Reservation Successfull</div>";
    }else{
        $message = "<div class='alert alert-danger'>Reservation was not Successfull</div>";
    }
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Reservation System</title>
        <link rel="stylesheet" href="../CSS/book.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/main.css">
    </head>

    <body>
        <div class="container">
            <h1 class="text-center alert alert-danger" style="background:#2ecc71;border:none;color:#fff"> Reservation for Date: <?php echo date('m/d/Y', strtotime($date)) ;?></h1>
            <div class="row">
                <div class="col-md-12">
                    <?php echo isset($message)?$message:'';?>
                    <form action="" method="POST" autocomplete="off">
                        <div class="form-group">
                            <label for=""> FIRST NAME</label>
                            <input type="text" class="form-control" name="FIRSTNAME" required>
                        </div>
                        <div class="form-group">
                            <label for=""> MIDDLE NAME</label>
                            <input type="text" class="form-control" name="MIDDLENAME" required>
                        </div>
                        <div class="form-group">
                            <label for=""> LAST NAME</label>
                            <input type="text" class="form-control" name="LASTNAME" required>
                        </div>
                        <div class="form-group">
                            <label for=""> PHONE NUMBER</label>
                            <input type="text" class="form-control" name="PHONE" required>
                        </div>
                        <div class="form-group">
                            <label for=""> EMAIL</label>
                            <input type="email" class="form-control" name="EMAIL" required>
                        </div>
                        <div class="form-group">
                            <label for=""> CHOOSE EVENT</label>
                            <select  id="mySelect" name="EVENTS" class="form-control" required>
                                <option value="">Select an Event</option>
                                <option value="wedding">Wedding</option>
                                <option value="christening">Christening</option>
                                <option value="funeral">Funeral</option>
                            </select>
                        </div>
                        <div id="button">
                        <button type="submit" name="submit" class="btn btn-primary"> Submit </button>
                        <a href="index.php" class="btn btn-success">Back</a>
                        </div>
    
                        <div class="form-wedding" id="form-wedding">
                                <img src="../IMAGE/form.jpg" class="img" height="150px" width="700px">
                                <form action="" method="post">
                                <p class="top">WEDDING ARRANGEMENT</p>
                                    <div class="one">
                                        <label>Date of Marriage:</label>
                                        <input class="date" type="date" required>
                                        <label>Time:</label>
                                        <input class="time" type="time" required>
                                    </div>
                                    <div class="name">
                                        <p class="groom">GROOM</p><p>BRIDE</p>
                                        <div class="left">
                                            <label>First Name:</label>
                                            <input class="first" type="text" required>
                                            <label>First Name:</label>
                                            <input class="firstt" type="text" required>
                                            <label>Middle Name:</label>
                                            <input class="middle" type="text" required>
                                            <label>Middle Name:</label>
                                            <input class="middlee" type="text" required>
                                            <label>Surname:</label>
                                            <input class="sur" type="text" required>
                                            <label>Surname:</label>
                                            <input class="surn" type="text" required>
                                            <label>Nickname:</label>
                                            <input class="nick" type="text" required>
                                            <label>Age:</label>
                                            <input class="age" type="number" required>
                                            <label>Nickname:</label>
                                            <input class="nickk" type="text" required>
                                            <label>Age:</label>
                                            <input class="agee" type="number" required>
                                            <label>Address of Origin:</label>
                                            <input class="add" type="text" required>
                                            <label>Address of Origin:</label>
                                            <input class="addd" type="text" required>
                                            <label>Present Address:</label>
                                            <input class="ress" type="text" required>
                                            <label>Present Address:</label>
                                            <input class="resss" type="text" required>
                                            <label>Celullar Number:</label>
                                            <input class="num" type="tel" required>
                                            <label>Celullar Number:</label>
                                            <input class="numm" type="tel" required>
                                            <label>Name of Parents:</label>
                                            <input class="parents" type="tel" required>
                                            <label>&</label>
                                            <label class="lparents">Name of Parents:</label>
                                            <input class="parents" type="tel" required>
                                            <label>&</label>
                                            <input class="parentss" type="text" required>
                                            <input class="parentsss" type="text" required>
                                        </div>
                                    </div>

                                    <div class="service">
                                        <span>Services:</span>
                                        <div class="church">
                                            <p>Church</p><label>Php:</label>
                                            <input type="text">
                                        </div>
                                        <div class="area">
                                            <p>Reception Area</p><label>Php:</label>
                                            <input type="text">
                                        </div>
                                        <div class="others">
                                            <p>Others</p><label>Php:</label>
                                            <input type="text">
                                        </div>
                                        <div class="total">
                                            <p>TOTAL</p><label>Php:</label>
                                            <input type="text">
                                        </div>
                                    </div>

                                    <div class="conforme">
                                        <span>Conforme:</span>
                                        <div class="bride">
                                            <label>Groom:</label>
                                            <input class="bridee" type="text">
                                            <label>Bride:</label>
                                            <input type="text">
                                        </div>
                                        <div class="fill">
                                            <label>Date of Filling:</label>
                                            <input type="date">
                                        </div>
                                    </div>

                                    <div class="ty">
                                        <span>THANK YOU FOR GIVING US THE CHANCE TO SERVE YOU BETTER GODBLESS!</span>
                                        <hr>
                                        <div class="clerk">
                                            <label>for clerk's use only</label><br>
                                            <label>Terms of Payment mode:</label>
                                        </div>
                                        <div class="payment">
                                            <label>Date:</label>
                                            <input class="pd" type="date">
                                            <label>Amount:</label>
                                            <input class="pi" type="text">
                                            <label>OR #:</label>
                                            <input class="or" type="text">
                                            <label>Received by:</label>
                                            <input class="r" type="text">
                                        </div>
                                        <div class="payment">
                                            <label>Date:</label>
                                            <input class="pd" type="date">
                                            <label>Amount:</label>
                                            <input class="pi" type="text">
                                            <label>OR #:</label>
                                            <input class="or" type="text">
                                            <label>Received by:</label>
                                            <input class="r" type="text">
                                        </div>
                                        <div class="payment">
                                            <label>Date:</label>
                                            <input class="pd" type="date">
                                            <label>Amount:</label>
                                            <input class="pi" type="text">
                                            <label>OR #:</label>
                                            <input class="or" type="text">
                                            <label>Received by:</label>
                                            <input class="r" type="text">
                                        </div>
                                        <div class="payment">
                                            <label>Date:</label>
                                            <input class="pd" type="date">
                                            <label>Amount:</label>
                                            <input class="pi" type="text">
                                            <label>OR #:</label>
                                            <input class="or" type="text">
                                            <label>Received by:</label>
                                            <input class="r" type="text">
                                        </div>
                                    </div>
                                    <div class="button" id="button">
                                    <button type="submit" name="submit" class="btn btn-primary"> Submit </button>
                                    <a href="index.php" class="btn btn-success">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="form-christening" id="form-christening">
                            <img src="../IMAGE/form.jpg" class="img" height="150px" width="660px">
                            <form action="" method="post">
                                <div class="input-field">
                                    <div class="center">
                                        <label>Petsa ng binyag:</label>
                                        <input class="timee" required type="time">
                                    </div>
                                    <div class="bata">
                                        <label >Pangngalan ng bata:</label>
                                        <input required type="text"><br>
                                    </div>
                                    <div class="petsa">
                                        <label >Petsa ng kapanganakan:</label>
                                        <input required type="text"><br>
                                    </div>
                                    <div class="lugar">
                                        <label >Lugar ng kapanganakan:</label>
                                        <input required type="text"><br>
                                    </div>
                                    <div class="ama">
                                        <label>Pangngalan ng ama:</label>
                                        <input required type="text"><br>
                                    </div>
                                    <div class="ina">
                                        <label>Pangngalan ng ina:</label>
                                        <input required type="text"><Br>
                                    </div>
                                    <div class="tirahan">
                                        <label>Tirahan:</label>
                                        <input required type="text"><br>
                                    </div>
                                    <div class="center2">
                                        <label>Contact Number:</label>
                                        <input required type="tel">
                                        <label>Petsa ng kasal:</label>
                                        <input required class="time2" type="date">
                                    </div>
                                    <div class="space">
                                        <div class="ninong">
                                        <label>Pangalan ng mga ninong at ninang</label> 
                                        </div>
                                        <div class="edad">
                                        <label>Edad</label>
                                        </div>
                                        <div class="home">
                                        <label>Tirahan</label><br>
                                        </div>
                                        <input class="text" type="text" value="1. "><input class="bilang" type="number"><input class="home" type="text">
                                        <input class="text" type="text" value="2. "><input class="bilang" type="number"><input class="home" type="text">
                                        <input class="text" type="text" value="3. "><input class="bilang" type="number"><input class="home" type="text">
                                        <input class="text" type="text" value="4. "><input class="bilang" type="number"><input class="home" type="text">
                                        <input class="text" type="text" value="5. "><input class="bilang" type="number"><input class="home" type="text">
                                        <input class="text" type="text" value="6. "><input class="bilang" type="number"><input class="home" type="text">
                                        <input class="text" type="text" value="7. "><input class="bilang" type="number"><input class="home" type="text">
                                        <input class="text" type="text" value="8. "><input class="bilang" type="number"><input class="home" type="text">
                                        <input class="text" type="text" value="9. "><input class="bilang" type="number"><input class="home" type="text">
                                        <input class="text" type="text" value="10. "><input class="bilang" type="number"><input class="home" type="text">
                                    </div>
                                </div>
                                <div class="button" id="button">
                                <button type="submit" name="submit" class="btn btn-primary"> Submit </button>
                                <a href="index.php" class="btn btn-success">Back</a>
                                </div>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="../JS/book.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>