<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>APA INSURANCE</title>
    <link rel="stylesheet" href="css/customer.css" media="screen">

    {{-- <?php  'views/head_links.php'; ?> --}}



</head>

<body>
    <!-- ==============HEADER=============== -->



    <!-- =====================================DOMESTIC PACKAGE CALCULATOR ===================================== -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 back-register">

            </div>

            <div class="col-md-6">
                <div class="customer-login">
                    <h2> WELCOME TO OUR CUSTOMER PORTAL</h2>
                    <div class="under-line img12">
                        <img src="images/line.png" alt="">
                    </div>
                    <form class="customer-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fist Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name"
                                        aria-describedby="emailHelp" placeholder="Enter first name">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name"
                                        aria-describedby="emailHelp" placeholder="Enter last">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                name="password_confirmation" placeholder="Password">

                        </div>

                        <div class="customer-btn">
                            <div class="row">
                                <button type="submit" class="btn btn-primary">CREATE ACCOUNT</button>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a href="{{ route('login') }}">Already Have an account? Login</a> </div>
                                </div>

                            </div>
                            <!-- <hr> -->
                            <!-- <p>Sign in with :</p>
                            <div class="row btn-cust">
                                <div class="col-md-6 ">
                                    <a href="#" class="btn btn-gmail"><i class="fab fa-google-plus-g"></i> Gmail</a>
                                </div>
                                <div class="col-md-6 ">
                                    <a href="#" class="btn btn-fb"><i class="fab fa-facebook-f"></i> Facebook</a>
                                </div>
                            </div> -->
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
    <!-- =====================================FOOTER===================================== -->
    {{-- <?php  'views/footer.php'; ?> --}}
    <!-- Optional JavaScript -->
    {{-- <?php  'inc/scripts.php'; ?> --}}
    <script src="js/selectFilter.min.js"></script>

</body>

</html>
