<?php
session_start();

if (!isset($_SESSION["adminName"])) {
    header("location: userSignin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRONOS | Admin Panel</title>
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                            <a class="btn btn-danger" class="nav-link" href="adminSignout.php">Sign Out,
                                <?= $_SESSION['adminName']; ?> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </navbar>



    <!-- Main Tag-->



    <h6 class="text-center mt-4">Hello, <span class="text-secondary"><?= $_SESSION['adminName']; ?></span></h6>
    <div class="text-center text-success mb-5"><small>Logged as Admin</small></div>
    <main class="container">
        <div class="text-center mb-4">
            <h2>Bookings</h2>
        </div>
        <div>

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Order Time</th>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Car ID</th>
                        <th scope="col">Model</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Price</th>
                        <th scope="col">Button</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $searched_name = $_GET['searched_name'];
                    require_once("dbConnect.php");
                    $sql = "SELECT order_id, order_time, customer.customer_id, customer.first_name , customer.last_name, car.car_id, car.model, car.brand, car.price FROM booking INNER JOIN customer on customer.customer_id = booking.customer_id INNER JOIN car on car.car_id = booking.car_id WHERE (customer.first_name = '$searched_name' or customer.last_name = '$searched_name' or (CONCAT(customer.first_name,' ',customer.last_name)) = '$searched_name') ORDER BY order_id DESC";



                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        //here we will print every row that is returned by our query $sql
                        while ($row = mysqli_fetch_array($result)) {
                            //here we have to write some HTML code, so we will close php tag
                    ?>
                    <tr>
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2]; ?> </td>
                        <td><?php echo $row[3]; ?> <?php echo $row[4]; ?></td>
                        <td><?php echo $row[5]; ?></td>
                        <td><?php echo $row[6]; ?> </td>
                        <td><?php echo $row[7]; ?> </td>
                        <td><?php echo $row[8]; ?> </td>


                        <td><button class="btn btn-danger"><a
                                    href="deleteBookingFromAdminEnd.php?bookingID=<?php echo $row[0]; ?> & carID=<?php echo $row[5]; ?>">Delete</a></button></button>
                        </td>
                    </tr>
                    <?php
                        }
                    } 
                    ?>
                </tbody>
            </table>

            <!-- User Informations -->
            <div class="text-center mt-5 mb-4">
                <h3>Users Information</h3>

            </div>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Customer ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">City</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Email</th>
                        <th scope="col">Delete User</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("dbConnect.php");
                    $sql = "SELECT * from customer WHERE (customer.first_name = '$searched_name' or customer.last_name = '$searched_name' or (CONCAT(customer.first_name,' ',customer.last_name)) = '$searched_name')";


                    //   (SELECT CONCAT(first_name,' ', last_name) AS fullname FROM customer WHERE fullname = '$searched_name';)
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        //here we will print every row that is returned by our query $sql
                        while ($row = mysqli_fetch_array($result)) {
                            //here we have to write some HTML code, so we will close php tag
                    ?>
                    <tr>
                        <td><?php echo $row[0]; ?></td>
                        <td><?php echo $row[1]; ?></td>
                        <td><?php echo $row[2] ?> </td>
                        <td><?php echo $row[3] ?></td>
                        <td><?php echo $row[4] ?> </td>
                        <td><?php echo $row[5] ?></td>
                        <td><?php echo $row[6] ?> </td>
                        <td><button class="btn btn-danger"><a
                                    href="deleteUserFromAdminEnd.php?userID=<?php echo $row[0]; ?>">Delete</a></button>
                        </td>
                    </tr>
                    <?php
                        }
                    }
                    else {
                        echo "<script>alert('No result found'); window.location.href='adminPanel.php';</script>";
                    }
                    ?>
                </tbody>
            </table>

            <div class="text-center mt-5 mb-4">
                <h2>All Cars</h2>
            </div>
            <div>

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Brand</th>
                            <th scope="col">Model</th>
                            <th scope="col">Category</th>
                            <th scope="col">MPG</th>
                            <th scope="col">Transmission Type</th>
                            <th scope="col">Fuel Type</th>
                            <th scope="col">Fuel Capacity</th>
                            <th scope="col">Horse Power</th>
                            <th scope="col">Torque</th>
                            <th scope="col">Seat Capacity</th>
                            <th scope="col">Boot Space</th>
                            <th scope="col">Color</th>
                            <th scope="col">Status</th>
                            <th scope="col">Thumbnail</th>
                            <th scope="col">Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once("dbConnect.php");
                        $sql = "SELECT brand, model, specification.category,specification.mpg, specification.transmission_type, specification.fuel_type, specification.fuel_capacity, specification.horse_power, specification.torque, specification.seat_capacity, specification.boot_space, specification.color, car.car_status, specification.car_id, picture FROM car INNER JOIN specification on specification.car_id = car.car_id ORDER BY car.car_id ASC";

                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            //here we will print every row that is returned by our query $sql
                            while ($row = mysqli_fetch_array($result)) {
                                //here we have to write some HTML code, so we will close php tag
                        ?>
                        <tr>
                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2] ?> </td>
                            <td><?php echo $row[3] ?></td>
                            <td><?php echo $row[4] ?> </td>
                            <td><?php echo $row[5] ?></td>
                            <td><?php echo $row[6] ?> </td>
                            <td><?php echo $row[7] ?> </td>
                            <td><?php echo $row[8] ?> </td>
                            <td><?php echo $row[9] ?> </td>
                            <td><?php echo $row[10] ?> </td>
                            <td><?php echo $row[11] ?> </td>
                            <td><?php echo $row[12] ?> </td>

                            <td class="carIcon"><a href="<?php echo $row[14] ?>" target="_blank"><img class="img-fluid"
                                        src="<?php echo $row[14] ?>" alt=""></a></td>
                            <td><button class="btn btn-danger"><a
                                        href="deleteCar.php?carID=<?php echo $row[13]; ?>">Delete</a></button></button>
                            </td>
                        </tr>
                        <?php
                            }
                        }
                        ?>
                        <!--Egula delete hoi jabe  -->

                        <!-- eittuk -->
                    </tbody>
                </table>

                <!-- Add Cars -->
                <div class="text-center carAdding mb-5">
                    <h2>Add Car</h2>
                </div>
                <div class="m-auto mb-5 d-flex justify-content-center">
                    <div class="card p-5 border-addCar">
                        <form action="addCardb.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="cid" class="form-label">Car ID (must be unique)</label>
                                        <input type="text" name='cid' class="form-control" id="cid" />
                                    </div>
                                    <!-- input finished -->
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="chassisNumber" class="form-label">Chassis Number (must be
                                            unique)</label>
                                        <input type="text" name='cn' class="form-control" id="chassisNumber" />
                                    </div>
                                    <!-- input finished -->
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="model" class="form-label">Model</label>
                                        <input type="text" name='md' class="form-control" id="model" />
                                    </div>
                                    <!-- input finished -->
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="brand" class="form-label">Brand</label>
                                        <input type="text" name='br' class="form-control" id="brand" />
                                    </div>
                                    <!-- input finished -->
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="yearOfRelease" class="form-label">Year of Release</label>
                                        <input type="date" name='yr' class="form-control" id="yearOfRelease" />
                                        <!-- <textarea class="form-control" id="address" rows="2" name='address'></textarea> -->
                                    </div>
                                    <!-- input finished -->
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="price" class="form-label">Price (taka)</label>
                                        <input type="text" name='pr' class="form-control" id="price" />
                                    </div>
                                    <!-- input finished -->
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="category" class="form-label">Category</label>
                                        <input type="text" name='ct' class="form-control" id="category" />
                                    </div>
                                    <!-- input finished -->
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="mpg" class="form-label">MPG</label>
                                        <input type="text" name='mpg' class="form-control" id="mpg" />
                                    </div>
                                    <!-- input finished -->

                                </div>
                                <div class="col-md-6">
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="tt" class="form-label">Transmission Type</label>
                                        <input type="text" name='tt' class="form-control" id="transmissionType" />
                                    </div>
                                    <!-- input finished -->
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="fuelType" class="form-label">Fuel Type</label>
                                        <input type="text" name='ft' class="form-control" id="fuelType" />
                                    </div>
                                    <!-- input finished -->
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="fuelCapacity" class="form-label">Fuel Capacity (litre)</label>
                                        <input type="text" name='fc' class="form-control" id="fuelCapacity" />
                                    </div>
                                    <!-- input finished -->
                                    <!-- input started -->

                                    <div class="mb-3">
                                        <label for="horsePower" class="form-label">Horse-Power</label>
                                        <input type="text" name='hp' class="form-control" id="horsePower" />
                                    </div>
                                    <!-- input finished -->

                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="torque" class="form-label">Torque (nm)</label>
                                        <input type="text" name='tr' class="form-control" id="torque" />
                                    </div>
                                    <!-- input finished -->
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="seatCapacity" class="form-label">Seat Capacity</label>
                                        <input type="text" name='sc' class="form-control" id="seatCapacity" />
                                    </div>
                                    <!-- input finished -->
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="bootSpace" class="form-label">Boot Space (litre)</label>
                                        <input type="text" name='bs' class="form-control" id="bootSpace" />
                                    </div>
                                    <!-- input finished -->
                                    <!-- input started -->
                                    <div class="mb-3">
                                        <label for="color" class="form-label">Color</label>
                                        <input type="text" name='cl' class="form-control" id="color" />
                                    </div>
                                    <!-- input finished -->
                                </div>
                            </div>

                            <!-- input started -->
                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Thumbnail Link <i
                                        class="fas fa-link"></i></label>
                                <input type="text" name='th' class="form-control" id="thumbnail" />
                            </div>
                            <!-- input finished -->
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary w-50">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>