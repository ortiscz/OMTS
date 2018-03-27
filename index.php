<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>
        Project OMTS | Database Management Systems
    </title>
</head>

<body>
    <video autoplay muted loop class="visual" id="video">
        <source src="assets/video/visual.mp4" type="video/mp4">
        <small>Your browser does not support the video.</small>
    </video>
    <div class="visual-cover"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-xs-9 col-sm-8 col-md-6 col-lg-4">
                <div class="login-container container-dark-blue card">
                    <div class="card-body">
                        <h1 class="card-title text-center h3 blue mb-4">OMTS portal login</h1>
                        <form class="login-form" action="./scripts/login.php" method="post">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <img src="assets/img/icon-user.png" class="input-group-text" id="icon-user">
                                    </div>
                                    <input class="form-control" type="text" placeholder="EMAIL ADDRESS" required aria-label="Username" aria-describedby="icon-user" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <img src="assets/img/icon-password.png" class="input-group-text" id="icon-password">
                                    </div>
                                    <input class="form-control" type="password" placeholder="PASSWORD" required aria-describedby="icon-password" name="password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-4 mt-4">LOGIN</button>
                            <p class="message text-center white">Not registered? <a href="javascript:void();" data-toggle="modal" data-target="#registrationModal">Create an account</a></p>
                            <p class="text-center white"><small><em>::dev only:: GO TO <a href="project.php">PROJECT PAGE</a></em></small></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- The Registration Modal -->
    <div class="modal fade" id="registrationModal">
        <div class="modal-dialog">
            <div class="modal-content container-dark-blue">
                <!-- Modal body -->
                <div class="modal-body">
                    <a class="register-close white" data-dismiss="modal" href="javascript:void()">x</a>
                    <div class="continer">
                        <h1 class="modal-title text-center h3 blue mb-4 mt-2">Create an account!</h1>
                        <form class="register-form" action="./scripts/register.php" method="post">
                            <div class="form-group row">
                                <label for="register-email" class="col-sm-4 col-form-label text-right white">Email address</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" name="register-email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-password" class="col-sm-4 col-form-label text-right white">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" class="form-control" name="register-password">
                                </div>
                            </div>
                            <hr>
                            <h2 class="text-center h6 blue mb-2">Detail information</h2>
                            <div class="form-group row">
                                <label for="register-fname" class="col-sm-4 col-form-label text-right white">First name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-fname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-lname" class="col-sm-4 col-form-label text-right white">Last name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-lname">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-city" class="col-sm-4 col-form-label text-right white">City</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-city">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-streetnum" class="col-sm-4 col-form-label text-right white">street number</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-streetnum">
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label for="register-streetname" class="col-sm-4 col-form-label text-right white">street name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-streetname">
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label for="register-state" class="col-sm-4 col-form-label text-right white">State</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-state">
                                </div>                                
                            </div>
                            <div class="form-group row">
                                <label for="register-zip" class="col-sm-4 col-form-label text-right white">ZIP</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="register-zip">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-phone" class="col-sm-4 col-form-label text-right white">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-phone">
                                </div>                                
                            </div>
                            <hr>
                            <h2 class="text-center h6 blue mb-2 blue">Card information</h2>
                            <div class="form-group row">
                                <label for="register-card" class="col-sm-4 col-form-label text-right white">Card number</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="register-card">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-expiration" class="col-sm-4 col-form-label text-right white">Card expiration</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="register-expiration" placeholder="MM/YY">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="register-ccv" class="col-sm-4 col-form-label text-right white">CCV</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="register-ccv" placeholder="123">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mb-4 mt-4">Submit</button>                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    document.getElementById("video").currentTime = Math.floor((Math.random() * 55) + 1);
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>