<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cronos | Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head>

<body class="sign-up">
    <navbar>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <h4 style="color:white">CRONOS</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <!-- Starting, ending -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php" style="color:white">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="userSignin.php" style="color:white">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminSignin.php" style="color:white">Admin Sign In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </navbar>
    <!-- Sign In -->


    <signin>
        <div class="container d-flex align-items-center justify-content-center bg-white">
            <div class="card p-5 border-sign-in">
                <h4 class="text-center text-secondary mb-5">Sign-up</h4>
                <!-- signupdb to connect -->
                <form action="signupdb.php" method="post">
                    <!-- input started -->
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name='fname' class="form-control" id="firstName"
                            aria-describedby="emailHelp" />
                    </div>
                    <!-- input finished -->
                    <!-- input started -->
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name='lname' class="form-control" id="lastName"
                            aria-describedby="emailHelp" />
                    </div>
                    <!-- input finished -->
                    <!-- input started -->
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name='city' class="form-control" id="city" aria-describedby="emailHelp" />
                    </div>
                    <!-- input finished -->
                    <!-- input started -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" rows="2" name='address'></textarea>
                    </div>
                    <!-- input finished -->
                    <!-- input started -->
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="text" name='phone_number' class="form-control" id="phoneNumber"
                            aria-describedby="emailHelp" />
                    </div>
                    <!-- input finished -->
                    <!-- input started -->
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name='email' class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" />
                    </div>
                    <!-- input finished -->

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name='pass' class="form-control" id="exampleInputPassword1" />
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


                <!-- Register Button -->

                <div class="text-center mt-5">
                    <small class="text-danger">Already Have an Account?</small>
                    <div class="d-flex justify-content-center mt-2">
                        <button class="btn btn-warning">
                            <a class="btn-anchor" href="userSignin.php">Sign In</a>
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