<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRONOS | Booking</title>
    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body>
    <!-- Navbar -->
    <!-- Navbar -->
    <navbar>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <h4>CRONOS</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <!-- Starting, ending -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="userPanel.php">User Panel</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </navbar>


    <?php
    session_start();

    require_once('dbConnect.php'); // Using database connection file here

    $cusID = $_SESSION['cusID'];
    ?>

    <main class="container bg-light">
        <div class="text-center">
            <h2>Bookings</h2>
        </div>
        <div>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Order Time</th>
                        <th scope="col">Car ID</th>
                        <th scope="col">Customer_id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Model</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Price</th>
                        <th scope="col">Delete Booking</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("dbConnect.php");  // Using database connection file here
                    $sql = "SELECT order_id, order_time, car.car_id, customer.customer_id, customer.first_name ,car.model, car.brand, car.price FROM booking 
                    INNER JOIN customer on customer.customer_id = booking.customer_id
                    INNER JOIN car on car.car_id = booking.car_id WHERE booking.customer_id='$cusID' ORDER BY order_id DESC;";

                    $result = mysqli_query($conn, $sql);  // Executing the query
                    if (mysqli_num_rows($result) > 0) {  // If the query was executed successfully

                        while ($row = mysqli_fetch_array($result)) {  // here we will print every column that is returned by our query $sql
                            //here we have to write some HTML code, so we will close php tag
                    ?>
                    <tr>
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?> </td>
                        <td><?php echo $row[3]; ?></td>
                        <td><?php echo $row[4]; ?> </td>
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?> </td>
                        <td><?php echo $row[7]; ?> </td>
                        <td><button class="btn btn-danger" style="color:aliceblue"><a
                                    href="deleteBookingFromUserEnd.php
                                ?bookingID=<?php echo $row[0]; ?> & carID=<?php echo $row[2]; ?>">Delete</a></button></button></td>
                    </tr>
                    <?php
                        }
                    }


                    ?>

                </tbody>


            </table>