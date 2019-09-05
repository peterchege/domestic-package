<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>APA INSURANCE</title>
    <link rel="stylesheet" href="{{ asset('calc/css/calculator.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('calc/css/parsley.css') }}" media="screen">

    <!-- Google Font API  -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{ asset('calc/img/logon.jpg') }}" rel="icon">
    <link href="{{ asset('calc/img/logon.jpg') }}" rel="apple-touch-icon">

    <!-- My css copy -->
    <link rel="stylesheet" href="{{ asset('calc/css/draft.css') }}" />
    <link rel="stylesheet" href="{{ asset('calc/css/superfish.css') }}" media="screen">


    <!-- Asset CSS Files -->
    <link href="{{ asset('calc/asset/fontawesome-free-5.7.2-web/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('calc/asset/fontawesome-free-5.7.2-web/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('calc/asset/fontawesome-free-5.7.2-web/css/solid.css') }}" rel="stylesheet">
    <link href="{{ asset('calc/asset/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('calc/lib/animate/animate.min.css') }}" rel="stylesheet">

    <!-- Font Awsome 5.7.2 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href="{{ asset('calc/asset/fontawesome-free-5.7.2-web/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('calc/asset/fontawesome-free-5.7.2-web/css/brands.css') }}" rel="stylesheet">
    <link href="{{ asset('calc/asset/fontawesome-free-5.7.2-web/css/solid.css') }}" rel="stylesheet">




    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <link rel="stylesheet" href="{{ asset('calc/asset/bootstrap-4.3.1/css/bootstrap.min.css') }}">

    <!-- UIkit css -->
    <link rel="stylesheet" href="{{ asset('calc/css/uikit.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />


    <!-- chatbot -->

    <!-- csrf     -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

<body>
    <!-- ==============HEADER=============== -->

    <!--==========================
    Header
============================-->
    <header id="header">
        <div class="container-fluid">

            <div id="logo" class="pull-left">

                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="index.php" id="im-left"><img src="{{ asset('calc/img/logon.png') }}" width="80" height="auto"
                        alt="" title="" /></a>
            </div>



            <nav id="nav-menu-container">
                <ul class="nav-menu ">
                    <li class="menu-active"><a href="#">PERSONAL INSURANCE</a></li>
                    <li><a href="products.php">HEALTH INSURANCE</a></li>
                    <li><a href="#">LIFE ASSURANCE</a></li>
                    <li><a href="career.php">INVESTMENT</a></li>
                    <li><a href="csr.php">COMMERCIAL INSURANCE</a></li>
                    <!-- <li><a href="about_us.php">ABOUT US</a></li> -->
                    <li><a href="about_us.php">About Us</a></li>
                </ul>

                <div id="flags">
                    <a href="#"><img src="{{ asset('calc/img/kenya.png') }}" alt="APA KENYA"></a>
                    <a href="#"><img src="{{ asset('calc/img/uganda.png') }}" alt="APA UGANDA"></a>
                </div>
                <a class="logo1" href="#"><img src="{{ asset('calc/images/Apollo.jpg') }}" width="100" height="auto"
                        alt="" title="" /></a>
            </nav>

            <!-- #nav-menu-container-->

        </div>

        <!-- APOLLO GROUP LOGO -->
        <!-- <div id="logo1" class="pull-right1"> -->

        <!-- </div> -->
    </header>

    <!-- #header -->


    <!-- =====================================DOMESTIC PACKAGE CALCULATOR ===================================== -->
    <div class="container-fluid">

        <div class="row ">
            <div class="col-md-6 box-container">
                <form id="form">
                    <div class="container forn-container error-margin" id="form-container">
                        <h2 class="text-center">Premium Information</h2>
                        <hr>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="company_name">Name</label>
                                <input name="name" id="name" type="text" class="form-control" placeholder="Full Name"
                                    value="" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress2">Phone Number</label>
                                <input name="phone" id="phone" type="tel" class="form-control"
                                    placeholder="07XX XXX 537" value="" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Email Address</label>
                                <input name="email" id="email" type="email" class="form-control"
                                    placeholder="example@gmail.com" value="" required>
                            </div>
                            <div class=" form-group col-md-6">
                                <label for="inputAddress2">Location</label>
                                <input name="location" id="location" type="text" class="form-control"
                                    placeholder="Nairobi" value="" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="inputAddress">Property</label>
                                <select id="property" name="property" class="form-control selectFilter"
                                    data-target="section" required>
                                    <option value="-1" selected disabled>Choose...</option>
                                    <option data-ref="owner" name="owner" value="owner">Owner</option>
                                    <option data-ref="tenant" name="tenant" value="tenant">Tenant</option>
                                </select>
                            </div>
                        </div>

                        <!-- SECTION BUILDING -->
                        <div class="row row-section owner">
                            <div class="form-group col-md-6 ">
                                <div class="row check-cn">
                                    <div class="col-2 check-bx">
                                        <input class="form-check-input" type="checkbox" id="build_check"
                                            onclick="myFunction_build()">
                                    </div>
                                    <div class="col-10">
                                        <label class="form-check-label" for="gridCheck1" data-target="#modal-center"
                                            uk-toggle>
                                            Building Cover ( NOTE: We only insure brick material ... <i
                                                class="fas fa-info-circle"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6" id="text">
                                <input name="building_amount" id="building_amount" type="text"
                                    class="form-control number-amount" placeholder="Building value" value="" disabled>
                            </div>
                        </div>

                        <!-- SECTION BUILDING SCRIPT-->
                        <script>
                            function myFunction_build() {
                                if (build_check.checked == true) {
                                    document.getElementById("building_amount").disabled = false;
                                    document.getElementById("building_amount").value = '';

                                } else {
                                    document.getElementById("building_amount").disabled = true;
                                    document.getElementById("building_amount").value = '';


                                }
                            }

                        </script>

                        <!-- SECTION CONTENT -->
                        <div class="row row-section owner tenant">
                            <div class="form-group col-md-6 ">
                                <div class="row check-cn">
                                    <div class="col-2 check-bx">
                                        <input class="form-check-input" type="checkbox" id="content_check"
                                            onclick="myFunction_content()">
                                    </div>
                                    <div class=" col-10">
                                        <label class="form-check-label" for="gridCheck1" data-target="#modal-center1"
                                            uk-toggle>
                                            Contents Cover ( NOTE: We only insure brick material ... <i
                                                class="fas fa-info-circle"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <input name="content_amount" id="content_amount" type="text"
                                    class="form-control number-amount" placeholder="Contents Total Value" value=""
                                    disabled>
                            </div>
                        </div>

                        <!-- SECTION CONTENT SCRIPT-->
                        <script>
                            function myFunction_content() {
                                if (content_check.checked == true) {
                                    document.getElementById("content_amount").disabled = false;
                                    document.getElementById("content_amount").value = '';
                                } else {
                                    document.getElementById("content_amount").disabled = true;
                                    document.getElementById("content_amount").value = '';
                                }
                            }

                        </script>

                        <!-- SECTION ALLRISK -->
                        <div class="row row-section owner tenant">
                            <div class="form-group col-md-6 ">
                                <div class="row check-cn">
                                    <div class="col-2 check-bx">
                                        <input class="form-check-input" type="checkbox" id="risk_check"
                                            onclick="myFunction_risk()">
                                    </div>
                                    <div class="col-10">
                                        <label class="form-check-label" for="gridCheck1" data-target="#modal-center2"
                                            uk-toggle>
                                            All Risk Cover ( NOTE: You cannot take this package alone... <i
                                                class="fas fa-info-circle"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <input name="risk_amount" id="risk_amount" type="text"
                                    class="form-control number-amount" placeholder="All Risk Total value" disabled>

                            </div>
                        </div>

                        <!-- SECTION ALLRISK SCRIPT-->

                        <script>
                            function myFunction_risk() {
                                if (risk_check.checked == true) {
                                    document.getElementById("risk_amount").disabled = false;
                                    document.getElementById("risk_amount").value = '';
                                } else {
                                    document.getElementById("risk_amount").disabled = true;
                                    document.getElementById("risk_amount").value = '';
                                }
                            }

                        </script>

                        <!-- SECTION DOMESTIC EMPLOYEE -->
                        <div class="row row-section owner tenant">
                            <div class="form-group col-md-6 ">
                                <div class="row check-cn">
                                    <div class="col-2 check-bx">
                                        <input class="form-check-input" type="checkbox" id="domestic_check"
                                            onclick="myFunction_domestic()">
                                    </div>
                                    <div class="col-10">
                                        <label class="form-check-label" for="gridCheck1" data-target="#modal-center3"
                                            uk-toggle>
                                            Domestic Employee ( NOTE: You can't take this package alone... <i
                                                class="fas fa-info-circle"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <input name="domestic_amount" id="domestic_amount" type="text"
                                    class="form-control number-amount" placeholder="Total Annual Salary" disabled>
                            </div>
                        </div>

                        <!-- SECTION DOMESTIC EMPLOYEE SCRIPT-->
                        <script>
                            function myFunction_domestic() {
                                if (domestic_check.checked == true) {
                                    document.getElementById("domestic_amount").disabled = false;
                                    document.getElementById("domestic_amount").value = '';
                                } else {
                                    document.getElementById("domestic_amount").disabled = true;
                                    document.getElementById("domestic_amount").value = '';
                                }
                            }

                        </script>

                        <!-- LIABILITY SECTION-->
                        <hr>
                        <div class="row row-section owner tenant">
                            <div class="form-group col-md-6 ">
                                <div class="row check-cn">
                                    <div class="col-2 check-bx">
                                        <input class="form-check-input" type="checkbox" id="liability"
                                            onclick="myFunction_liability()">
                                    </div>
                                    <div class="col-10">
                                        <label class="form-check-label" for="gridCheck1" data-target="#modal-center4"
                                            uk-toggle>
                                            Liability Cover ( You will get a free cover for upto 500,000.
                                            Above that we charge a rate of 0.05%) <i class="fas fa-info-circle"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputAddress">Declare Amount</label>
                                <input name="liability_amount" id="liability_amount" type="text"
                                    class="form-control number-amount" placeholder="500,000" disabled>
                            </div>
                        </div>

                        <script>
                            function myFunction_liability() {
                                if (liability.checked == true) {
                                    document.getElementById("liability_amount").disabled = false;
                                    document.getElementById("liability_amount").value = '';
                                } else {
                                    document.getElementById("liability_amount").disabled = true;
                                    document.getElementById("liability_amount").value = '';
                                }
                            }

                        </script>

                        <br>

                        <div class="row row-section owner tenant">
                            <div class="form-group col-md-6 btn-cal">
                                <button class="btn btn-primary" id="calculate">CALCULATE</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <!-- Value Being displayed -->
            <div class="col-md-3 box-container1 left-side">
                <h2>TOTAL AMOUNT <br>(Kshs)</h2>
                <div class="box-amount total">
                    <p></p>
                </div>
                <br>
                <hr>
                <div class="row">
                </div>
                <h3>DISCLAIMER</h3>
                <div class="rate">
                    <p>BUILDING : We only ensure First class construction. For more information you can contact
                        us<br> Tel - O20 286 2000 , Email -info@apainsurance.org</p>
                </div>
                <br>
                <hr>

                <div class="row text-center pos-btn">
                    <div class="col-6 btn-assist">
                        <a href="http://apatest.dev">
                            <button id="save_quote" class="btn btn-quote">
                                Save Quote
                            </button>
                        </a>
                    </div>
                    <div class="col-6 btn-assist">
                        <button class="btn btn-quote">
                            Request Assistance
                        </button>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-12 btn-red">
                        <a href="{{ route('login') }}">
                            <button id="buy_now" class="btn">
                                BUY NOW
                            </button>
                        </a>
                    </div>
                </div>
                <br>

            </div>
        </div>

    </div>
    <!-- =====================================FOOTER===================================== -->
    <!-- =====================================FOOTER===================================== -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row mover">

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>GENERAL</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Motor Insurance</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Agriculture Insurance</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Domestic Package</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Personal Accident</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">APA Marine</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>HEALTH</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Health Corporate</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Femina</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Jamii Plus </a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Afya Nafuu</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>LIFE</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Elimu</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Imarika</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">HosiCare</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Pumzisha</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Group Pension</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>INVESTMENT</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Balance Funds</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Equity Funds</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">Money Market Funds </a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            Apollo Centre, Ring Rd Parklands<br> Westlands
                            Nairobi – Kenya. <br>
                            Tel: O20 286 2000,<br>
                            Phone: (+254) 70991277,<br>
                            Email:</strong> info@apainsurance.org<br>
                        </p>
                        <br>
                        <div class="social-links">
                            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-line">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="copyright"> Copyright &copy; 2019 <strong>APA INSURANCE</strong>. All Rights
                        Reserved.
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="copyright"> Regulated by IRA </div>
                </div>

                <div class="col-md-4">
                    <div class="copyright"> Terms & Condtions</div>
                </div>
            </div>
        </div>
    </footer><!-- #footer -->


    <!-- ===================================== BUILDING COVER INFORMATION ===================================== -->
    <div id="modal-center" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="modal-cont">
                <h2>BUILDING COVER</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.
                </p>
            </div>

        </div>
    </div>

    <!-- ===================================== CONTENTS COVER INFORMATION ===================================== -->
    <div id="modal-center1" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="modal-cont">
                <h2>CONTENTS COVER</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.
                </p>
            </div>

        </div>
    </div>

    <!-- ===================================== ALL RISK COVER INFORMATION ===================================== -->
    <div id="modal-center2" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="modal-cont">
                <h2>ALL RISK COVER</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.
                </p>
            </div>

        </div>
    </div>

    <!-- ===================================== DOMESTIC EMPLOYEE COVER INFORMATION ===================================== -->
    <div id="modal-center3" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="modal-cont">
                <h2>DOMESTIC EMPLOYEE COVER</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.
                </p>
            </div>

        </div>
    </div>

    <!-- =====================================LIABILITY COVER INFORMATION ===================================== -->
    <div id="modal-center4" class="uk-flex-top" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="modal-cont">
                <h2>LIABILITY COVER</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.
                </p>
            </div>

        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- Optional JavaScript -->



    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="{{ asset('calc/lib/jquery/jquery-migrate.min.js') }}"></script>
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
    <script src="{{ asset('calc/js/uikit.min.js') }}"></script>
    <script src="{{ asset('calc/js/uikit-icons.min.js') }}"></script>

    <script src="{{ asset('calc/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('calc/lib/superfish/hoverIntent.js') }}"></script>
    <script src="{{ asset('calc/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('calc/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('calc/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('calc/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('calc/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('calc/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('calc/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
    <!-- <script src="lib/superfish/superfish.min.js"></script> -->
    <script src="{{ asset('calc/js/sweetalert2.all.min.js') }}" integrity="" crossorigin="anonymous"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('calc/js/main.js') }}"></script>
    <!-- numeral formatter -->
    <script src="{{ asset('calc/js/numeral.js') }}"></script>

    <!--Start of Tawk.to Script-->
    <!-- <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5cc6aace4aa6620df2cfa5f1/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

    </script> -->
    <!--End of Tawk.to Script-->
    <script src="{{ asset('calc/js/selectFilter.min.js') }}"></script>
    <script src="{{ asset('calc/js/parsley.min.js') }}"></script>
    <script src="{{ asset('calc/js/calc_domestic_package.js') }}"></script>

</body>

</html>
