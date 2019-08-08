@extends('layouts.customer')
@section('content')
    <!-- MAIN CONTENT -->
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-news-paper icon-build">
                            </i>
                        </div>
                        <div class="build-head">
                            <h2> INVOICE </h2>

                        </div>
                    </div>
                    <div class="page-title-actions">
                        <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                            class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-star"></i>
                        </button>
                        <div class="d-inline-block dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-business-time fa-w-20"></i>
                                </span>
                                Help
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-inbox"></i>
                                            <span>
                                                Request A Callback
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-book"></i>
                                            <span>
                                                Live chat
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-card mb-3 card">
                <div class="card-body build-h5">
                    <!-- <h5 class="card-title">Kindly fill the following information</h5><br> -->
                    <div class="row">
                        <div class="col-6 col-logo">
                            <img src="img/logo.png" alt="">

                            <div class="apa-address"><br>

                                <address>
                                    FROM:<br>
                                    APA INSURANCE LTD, WESTLANDS<br>
                                    P.O. Box 30065-00100 Nairobi-Kenya<br>
                                    Telephone: O20 286 2000 <br>
                                    E-mail:info@apainsurance.org

                                </address>
                            </div>
                        </div>
                        <div class="col-6 badge-status">
                            <div class="mb-2 mr-2 badge badge-danger mv-badge">UNPAID</div>
                            <div class="apa-address">
                                <address>
                                    TO:<br>
                                    PETER CHEGE KINUTHIA<br>
                                    P.O. Box 30065-00100 Nairobi-Kenya<br>
                                    Telephone: 0701075090 <br>
                                    E-mail: peterchege442@gmail.com<br>
                                    PIN : A002603455S
                                </address>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <div class="invoce-style">
                                <h3>Invoice : #4902</h3>
                                <p>Order ID: 4F291J</p>
                                <p>Payment Due: 01/08/2019</p>
                                <p>Renewal Date: 01/08/2020</p>
                            </div>
                        </div>
                    </div><br>

                    <!-- SECTION -->

                    <div class="row">
                        <div class="col-12">
                            <div class="invoce-style text-center">
                                <h4>PACKAGE : <small>DOMESTIC PACKAGE</small></h4><br>
                            </div>
                        </div>
                        <div class="col-md-11 table-algn">
                            <div class="invoce-style ">
                                <h5>SECTION : <small>A - BUILDING COVER</small></h5>
                            </div>

                            <!-- TABLE SECTION -->
                            <div class="section-table">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <table class="mb-0 table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Description</th>
                                                    <th>Sum Insured (KShs)</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Residential Building of First Class Construction
                                                        situated at PLOT NO. 1870/VI/209
                                                        MVULI ROAD WESTLANDS, NAIROBI
                                                    </td>
                                                    <td>10,000,000</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"></th>
                                                    <th class="text-center">Total Sum Insured </th>
                                                    <th>10,0000,000</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAXATION AND DEDUCTIONS -->

                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <div class="tax-style">
                                <ul>
                                    <hr>
                                    <li>Currency : Kshs</li>
                                    <hr>
                                    <li>Premium : 60,000</li>
                                    <hr>
                                    <li>Training Levy: 54.00</li>
                                    <hr>
                                    <li>Stamp Duty: 40.00</li>
                                    <hr>
                                    <li> PHFunds: 57.00</li>
                                    <hr>
                                    <br>
                                    <li class="total-amount">Total Premium : 60,251.00</li>
                                    <hr>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- PAYMENT GATEWAY -->

                    <div class="row">
                        <div class="col-6  text-right">
                            <button class="btn btn-primary btn-invoice btn-pay" type="submit">SUBMIT PAYMENT</button>
                        </div>

                        <div class="col-6">
                            <button class="btn btn-primary btn-invoice btn-pdf" type="submit">GENERATE PDF</button>
                        </div>

                    </div>





                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function () {
                            'use strict';
                            window.addEventListener('load', function () {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function (form) {
                                    form.addEventListener('submit', function (event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                    }, false);
                                });
                            }, false);
                        })();
                    </script>
                </div>
            </div>

        </div>
    </div>
@endsection