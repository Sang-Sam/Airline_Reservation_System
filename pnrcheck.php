<?php
session_start();
error_reporting(0);

$con = mysqli_connect("localhost", "root", "Mysql@25", "airline_reservation");
$q = mysqli_query($con, "select pnr,flight_no,journey_date,class,booking_status,no_of_passengers,lounge_access,priority_checkin,insurance,payment_id,customer_id from ticket_details where pnr='" . $_SESSION['user'] . "'");
$n = mysqli_fetch_assoc($q);
$stname = $n['pnr'];
$flight_no = $n['flight_no'];
$journey_date = $n['journey_date'];
$class = $n['class'];
$booking_status = $n['booking_status'];
$no_of_passengers = $n['no_of_passengers'];
$lounge_access = $n['lounge_access'];
$priority_checkin = $n['priority_checkin'];
$insurance = $n['insurance'];
$payment_id = $n['payment_id'];
$customer_id = $n['customer_id'];

$id = $_SESSION['user'];

$result = mysqli_query($con, "SELECT * FROM passengers WHERE pnr='" . $_SESSION['user'] . "'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Airline Reservation</title>
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/admform.css">
    <style>
        .details-table {
            border: 1px solid #ddd;
            border-collapse: collapse;
            width: 80%;
            margin: auto;
        }

        .details-table th,
        .details-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
    <script type="text/javascript">
        function printpage() {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
            printButton.style.visibility = 'visible';
        }
    </script>
</head>

<body>
    <div class="container">
        <center><h3 class="text-center">Airpot Authority of India</h3></center>
        <center><h2 class="text-center">Boarding Pass - Flight Reservation Slip</h2></center>
        <center><h4 class="text-center"><?php echo $booking_status; ?></h4></center>
        <br><BR><br>

        <table class="table table-bordered details-table">
            <tr>
                <td><font style="font-family: Verdana;">PNR :</font></td>
                <td colspan="3"><?php echo $id; ?></td>
                <td><font style="font-family: Verdana;">Flight No :</font></td>
                <td colspan="3"><?php echo $flight_no; ?></td>
                <td><font style="font-family: Verdana;">Date of journey :</font></td>
                <td colspan="3"><?php echo $journey_date; ?></td>
            </tr>
            <tr>
                <td><font style="font-family: Verdana;">Class :</font></td>
                <td colspan="3"><?php echo $class; ?></td>
                <td><font style="font-family: Verdana;">Payment ID :</font></td>
                <td colspan="3"><?php echo $payment_id; ?></td>
            </tr>
            <tr>
                <td><font style="font-family: Verdana;">Lounge Access :</font></td>
                <td colspan="3"><?php echo $lounge_access; ?></td>
                <td><font style="font-family: Verdana;">Priority Checkin :</font></td>
                <td colspan="3"><?php echo $priority_checkin; ?></td>
                <td><font style="font-family: Verdana;">Insurance :</font></td>
                <td colspan="3"><?php echo $insurance; ?></td>
            </tr>
            <tr>
                <td><font style="font-family: Verdana;">Booked By (Username) :</font></td>
                <td colspan="3"><?php echo $customer_id; ?></td>
                <td><font style="font-family: Verdana;">Status:</font></td>
                <td colspan="3"><?php echo $booking_status; ?></td>
                <td><font style="font-family: Verdana;">No. of Passengers:</font></td>
                <td colspan="3"><?php echo $no_of_passengers; ?></td>
            </tr>
        </table>

        <br>
        <br>
        <br>

        <center><img src='images/just_fly.jpg' class='img-thumbnail' width='250px'></center>
        <BR><br><br>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <center>
                        <table class="table table-bordered details-table">
                            <!-- Additional styling and modifications can be made here -->
                        </table>
                    </center>
                </div>
            </div>
        </div>

        <center><input type="submit" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center>
        <br><br><br>
        <CENTER><a href="pnr.php">Check other PNR</a></CENTER>
    </div>

</body>

</html>
