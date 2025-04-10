<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["email"])) {
    header("location: userPanel.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRONOS | Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<!-- navbar -->

<body class="sign-in">
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
                            <a class="nav-link" href="userSignin.php">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminSignin.php">Admin Sign In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </navbar>



    <!-- Sign In -->




    <signin>
        <div class="container d-flex align-items-center justify-content-center bg-light">
            <div class="card p-5 border-sign-in">
                <div>
                    <h4 class="text-center text-secondary">Sign In</h4>
                </div>
                <!-- signindb to connect eith databse -->

                <form action="signindb.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" />
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" />
                    </div>
                    <button type="submit" value="Sign In" class="btn btn-primary">Submit</button>
                </form>

                <!-- Register Button -->
                <div class="text-center mt-5">
                    <small class="text-danger">Don't Have an Account?</small>
                    <div class="d-flex justify-content-center mt-2">
                        <button class="btn btn-warning">
                            <a class="btn-anchor" href="userSignup.php">Sign Up</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </signin>
    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>