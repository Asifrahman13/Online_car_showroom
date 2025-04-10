<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRONOS</title>
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
    <!-- Main Tag-->
    <main>
        <header>
            <!-- Navbar -->
            <navbar>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <h4>CRONOS</h4>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <!-- Starting, ending -->
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="userSignin.php"><?php
                                                                                if (isset($_SESSION["email"])) {
                                                                                    echo "User: ", $_SESSION["firstName"], " ", $_SESSION["name"];
                                                                                } else {
                                                                                    echo "Sign In";
                                                                                } ?></a>
                                    <!-- check previous session exists or not -->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="adminSignin.php"><?php
                                                                                if (isset($_SESSION["adminName"])) {
                                                                                    echo "Admin: ", $_SESSION["adminName"];
                                                                                } else {
                                                                                    echo "Admin Sign In";
                                                                                } ?>


                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </navbar>

            <!-- Carousel Part -->
            <carousel>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <!-- images                                                      -->

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/mercedes_c.jpg" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img src="images/audi_s5.jpg" class="d-block w-100" alt="..." />
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/bmw_m5.jpg" alt="..." />
                        </div>
                    </div>



                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </carousel>

            <!-- More Information -->
            <information>
                <div class="container mt-5 bg-light ">
                    <div class="row">
                        <div class="col-md-6 mt-5 information">
                            <div class="text-center">
                                <h2>Explore our lineup</h2>
                                <p>
                                    Stylish sedans, capable SUVs and rugged Highlanders -
                                    you decide, we provide. Any
                                    car fitting your lifestyle. <i> <b>Your satisfaction is
                                            our pride.</b> </i>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-dark text-center reward_icon">
                                <i class="fas fa-award"></i>
                                <i class="fas fa-car"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-md-6">
                            <div class="text-dark text-center reward_icon">
                                <i class="fas fa-money-check-alt"></i>
                                <i class="fas fa-coins"></i>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="text-center mt-3">
                                <h2>No Cost Maintenance Plan & Roadside Assistance</h2>
                                <p>
                                    <!-- Peace of mind comes standard when every new comes with CronosCare. -->
                                    With every new purchase feel an absolute sense of
                                    security from CronosCare.
                                    World class service guranteed.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </information>
            <!-- Footer -->
            <footer>
                <div class="bg-dark mt-5">
                    <div class="container footer text-light p-3 bg-dark">
                        <div class="row mt-5">
                            <div class="col-md-4">
                                <div>
                                    <h4>CRONOS CORPORATION</h4>
                                    <hr>
                                    <small>
                                        <h4>Owners</h4>
                                        <p><i>Asif Rahman</i></p>
                                        <p><i>Afsan Haque</i></p>
                                        <p><i>Shad Bin Sharif Sami</i></p>
                                        <p><i>Muntaha Tabassum</i></p>
                                        <!-- <p><i>Aminul Islam</i></p> -->
                                    </small>
                                </div>
                                <hr>
                                <div class="footerAgreement">
                                    <a href="">Terms of Use |</a>
                                    <a href="">Privacy Center |</a>
                                    <a href="">Security Center |</a> <a href="">Trademarks
                                        |</a>
                                    <a href="">License Agreements |</a> <a href="">Code of
                                        Conduct |</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </footer>
        </header>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>