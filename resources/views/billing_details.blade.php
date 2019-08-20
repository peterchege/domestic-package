@extends('layouts.customer')
@section('content')
<!-- MAIN CONTENT -->
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-calculator icon-build">
                        </i>
                    </div>
                    <div class="build-head">
                        <h2> BILLING INFORMATION </h2>
                        <div class="page-title-subheading">
                            The purpose of this form is to provide the company with all the
                            material information<br> that is likely to influence the assessment of your cover.
                        </div>
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
                            Buttons
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-inbox"></i>
                                        <span>
                                            Inbox
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-book"></i>
                                        <span>
                                            Book
                                        </span>
                                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link">
                                        <i class="nav-link-icon lnr-picture"></i>
                                        <span>
                                            Picture
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a disabled href="javascript:void(0);" class="nav-link disabled">
                                        <i class="nav-link-icon lnr-file-empty"></i>
                                        <span>
                                            File Disabled
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-card mb-3 card">
            <div class="card-body">
                <!-- <h5 class="card-title">Bootstrap 4 Form Validation</h5> -->
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">First Name</label>
                            <input type="text" class="form-control" id="validationCustom01" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Please provide your firstname
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Middle Name</label>
                            <input type="text" class="form-control" id="validationCustom02" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Please provide your Lastname
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustomUsername">Last Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="validationCustomUsername" placeholder=""
                                    aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please provide your Surname
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <label for="validationCustom01">Mobile Number</label>
                            <input type="tel" class="form-control" id="validationCustom01" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Please provide your Telephone No.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="offset-2 col-md-5 mb-3">
                            <label for="validationCustom02">Other Number</label>
                            <input type="tel" class="form-control" id="validationCustom02" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Please provide your Phone Number
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        {{-- <div class="col-md-4 mb-3">
                            <label for="validationCustomUsername">Fax Number</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="validationCustomUsername" placeholder=""
                                    aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Please provide your Fax No.
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">Email Address</label>
                            <input type="email" class="form-control" id="validationCustom01" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Please provide your Email Address.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">KRA PIN Number</label>
                            <input type="number" class="form-control" id="validationCustom02" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Please provide your Pin Number
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">National ID Number</label>
                            <input type="number" class="form-control" id="validationCustom02" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Please provide your Identification Number
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Postal Address (P.O.BOX)</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="" required>
                            <div class="invalid-feedback">
                                Please provide a valid Address.
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom04">City / Town</label>
                            <input type="text" class="form-control" id="validationCustom04" placeholder="" required>
                            <div class="invalid-feedback">
                                Please provide a valid city / town.
                            </div>
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="validationCustom03">Post Code</label>
                            <input type="text" class="form-control" id="validationCustom03" placeholder="" required>
                            <div class="invalid-feedback">
                                Please provide a valid Post code.
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="validationCustom05">county</label>
                            <input type="text" class="form-control" id="validationCustom05" placeholder="" required>
                            <div class="invalid-feedback">
                                Please provide a valid county.
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="product_risk.html">
                                <button class="btn btn-primary btn-mine" type="submit">Complete</button>
                            </a>

                        </div>
                    </div>
                </form>

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
