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
        @if(session('message_name'))
        <div class="alert alert-success">
            {{session('message_name')}}
        </div>
        @endif
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
                            @foreach ($invoiceDetails as $invoiceDetail)
                            <address>
                                TO:<br>
                                {{ $invoiceDetail->first_name. ' '.$invoiceDetail->middle_name.' '.$invoiceDetail->last_name }}<br>
                                P.O. Box {{ $invoiceDetail->postal_address }}-{{  $invoiceDetail->post_code }}
                                {{ $invoiceDetail->county }}<br>
                                Telephone: {{  $invoiceDetail->phone_number }} <br>
                                E-mail: {{  $invoiceDetail->email }}<br>
                                PIN : {{  $invoiceDetail->kra }}
                            </address>
                            @endforeach
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

                    <!-- SECTION  A -->

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
                                            @foreach ($buildingCovers as $buildingCover)
                                            <tr>
                                                <th scope="row">-</th>
                                                {{-- <td>Residential Building of First Class Construction
                                                    situated at PLOT NO. 1870/VI/209
                                                    MVULI ROAD WESTLANDS, NAIROBI
                                                </td> --}}
                                                <td>Residential Building of First Class Construction
                                                    situated at {{ $buildingCover->location }}
                                                </td>
                                                <td>{{ $buildingCover->premises_value }}</td>

                                            </tr>
                                            @endforeach

                                            <tr>
                                                <th scope="row"></th>
                                                <th class="text-center">Total Sum Insured </th>
                                                <th>{{ $buildingCovers->sum('premises_value') }}</th>
                                                <?php $coverPrem = (0.15/100)*($buildingCovers->sum('premises_value')) ?>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION  B -->

                    <div class="col-md-11 table-algn">
                        <div class="invoce-style ">
                            <h5>SECTION : <small> B - CONTENTS</small></h5>
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
                                            @foreach ($buildingContents as $buildingContent)
                                            <tr>
                                                <th scope="row">-</th>

                                                {{-- <td>Household contents ( Single Article Limit- 5% of the Sum Insured)
                                                </td> --}}
                                                <td>{{ $buildingContent->item_description }}</td>
                                                <td>{{ $buildingContent->item_value }}</td>


                                            </tr>

                                            @endforeach

                                            <tr>
                                                <th scope="row"></th>
                                                <th class="text-center">Total Sum Insured </th>
                                                <th>{{ $buildingContents->sum('item_value') }}</th>
                                                <?php $contentPrem = (1/100)*($buildingContents->sum('item_value')) ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION  C -->

                    <div class="col-md-11 table-algn">
                        <div class="invoce-style ">
                            <h5>SECTION : <small> C - ALLRISK</small></h5>
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
                                            @foreach ($buildingRisks as $buildingRisk)
                                            <tr>
                                                <th scope="row">-</th>
                                                <td>{{ $buildingRisk->make_model.' '.$buildingRisk->item_description.' S/N '.$buildingRisk->serial_number }}
                                                </td>
                                                <td>{{ $buildingRisk->value }}</td>
                                            </tr>
                                            @endforeach
                                            {{-- <tr>
                                                <th scope="row">2</th>
                                                <td>IPHONE XS 256 S/N 357225092369588
                                                </td>
                                                <td>128,000.00 </td>
                                            </tr> --}}
                                            <tr>
                                                <th scope="row"></th>
                                                <th class="text-center">Total Sum Insured </th>
                                                <th>{{ $buildingRisks->sum('value') }}</th>
                                                <?php $riskPrem = (1.5/100)*($buildingRisks->sum('value')) ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION  D -->

                    <div class="col-md-11 table-algn">
                        <div class="invoce-style ">
                            <h5>SECTION : <small> D - DOMESTIC EMPLOYEE</small></h5>
                        </div>

                        <!-- TABLE SECTION -->
                        <div class="section-table">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <table class="mb-0 table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Description/Occupation</th>
                                                <th>No Of Employees</th>
                                                <th>Wages/Salaries </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <th scope="row">-</th>
                                                {{-- <td>1 Gardener & 2 domestic servants</td> --}}
                                                <td>
                                                    @foreach ($buildingEmployees as $buildingEmployee)
                                                    {{ $buildingEmployee->number_of_employees.' '.$buildingEmployee->employee_type.', ' }}
                                                    @endforeach
                                                </td>

                                                <td>{{ $buildingEmployees->sum('number_of_employees') }}</td>
                                                <td>{{ $buildingEmployees->sum('annual_salary') }}</td>
                                                <?php $employeePrem = (2.253/100)*($buildingEmployees->sum('annual_salary')) ?>
                                            </tr>

                                            {{-- <tr>
                                                <th scope="row"></th>
                                                <th class="text-center">Total Sum Insured </th>
                                                <th>4000,000</th>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SECTION  E -->

                    <div class="col-md-11 table-algn">
                        <div class="invoce-style ">
                            <h5>SECTION : <small> E - LIABILITY</small></h5>
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
                                                <th>Limit of liability</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">-</th>
                                                <td>SEC E-OWNERS LIABILITY
                                                </td>
                                                <td>1,000,000</td>
                                            </tr>
                                            {{-- <tr>
                                                <th scope="row"></th>
                                                <th class="text-center">Total Sum Insured </th>
                                                <th>4000,000</th>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- END OF SECTION -->

                <!-- PAYMENT OPTIONS AND TOATAL COST -->

                <div class="row">

                    <!-- PAYMENT METHORD OPTION -->
                    <div class="col-md-6">
                        <div class="row">
                            <h5 class="text-center">WE ACCEPT THE FOLLOWING PAYMENT OPTION</h5>
                            <div class="col-3">
                                <img src="img/.png" alt="">
                            </div>
                        </div>

                    </div>

                    <!-- TAXATION AND DEDUCTIONS -->

                    <div class="col-md-6 ">
                        <div class="tax-style">
                            <ul>
                                <hr>
                                <li>Currency : Kshs</li>
                                <hr>
                                <?php $premium = $employeePrem + $riskPrem + $contentPrem + $coverPrem ?>
                                <li>Premium : {{ $premium }}</li>
                                <hr>
                                <?php $training = (0.2/100)*$premium ?>
                                <li>Training Levy: {{ $training }}</li>
                                <hr>
                                <li>Stamp Duty: 40.00</li>
                                <hr>
                                <?php $ph = (0.25/100)*$premium ?>
                                <li> PHFunds: {{ $ph }}</li>
                                <hr>
                                <br>
                                <?php $totalPremium = $premium + $training + 40 + $ph ?>
                                <li class="total-amount">Total Premium : {{ $totalPremium }}</li>
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
