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
        @if(session('message_name'))
        <div class="alert alert-success">
            {{session('message_name')}}
        </div>
        @endif
        <div class="main-card mb-3 card">
            <div class="card-body">
                <!-- <h5 class="card-title">Bootstrap 4 Form Validation</h5> -->
                <form action="{{ route('billingDetailsSubmit') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    @foreach ($userDetails as $userDetail)
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom01">First Name</label>

                            <input name="first_name" type="text"
                                class="form-control @error('first_name') is-invalid @enderror" id="validationCustom01"
                                placeholder="" value="{{ $userDetail->first_name }}" required>
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <div class="invalid-feedback">
                                Please provide your firstname
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">Middle Name</label>
                            <input name="middle_name" type="text"
                                class="form-control @error('middle_name') is-invalid @enderror" id="validationCustom02"
                                placeholder=""
                                value="<?= (($userDetail->middle_name)?$userDetail->middle_name:old('middle_name')); ?>"
                                required>
                            @error('middle_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <div class="invalid-feedback">
                                Please provide your middle name.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div> --}}
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustomUsername">Last Name</label>
                            <div class="input-group">
                                <input name="last_name" type="text"
                                    class="form-control @error('last_name') is-invalid @enderror "
                                    id="validationCustomUsername" placeholder="" aria-describedby="inputGroupPrepend"
                                    value="{{ $userDetail->last_name }}" required>
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                {{-- <div class="invalid-feedback">
                                    Please provide your Surname
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col-md-5 mb-3">
                            <label for="validationCustom01">Phone Number</label>
                            <input name="phone_number" type="tel"
                                class="form-control @error('phone_number') is-invalid @enderror "
                                id="validationCustom01" placeholder="" value="{{ $userDetail->phone_number }}" required>
                            <div class="invalid-feedback">
                                Please provide your Telephone No.
                            </div>
                            @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <div class="valid-feedback">
                                Looks good!
                            </div> --}}
                        </div>

                        <div class="offset-1 col-md-5 mb-3">
                            <label for="validationCustom02">Other Number</label>
                            <input name="other_number" type="tel"
                                class="form-control @error('other_number') is-invalid @enderror "
                                id="validationCustom02" placeholder=""
                                value="<?= (($userDetail->other_number)?$userDetail->other_number:old('other_number')); ?>"
                                required>
                            @error('other_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <div class="invalid-feedback">
                                Please provide your Phone Number
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div> --}}
                        </div>
                        {{-- <div class="col-md-4 mb-3">
                            <label for="validationCustomUsername">Fax Number</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="validationCustomUsername" placeholder=""
                                    aria-describedby="inputGroupPrepend" required value="">
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
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror "
                                id="validationCustom01" placeholder="" required value="{{ $userDetail->email }}"
                                disabled>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <div class="invalid-feedback">
                                Please provide your Email Address.
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div> --}}
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">KRA PIN Number</label>
                            <input name="kra" type="text" class="form-control @error('kra') is-invalid @enderror "
                                id="validationCustom02" placeholder="" required value="{{ $userDetail->kra }}">
                            @error('kra')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <div class="invalid-feedback">
                                Please provide your Pin Number
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div> --}}
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom02">National ID Number</label>
                            <input name="national_id" type="number" class="form-control @error('national_id') @enderror"
                                id="validationCustom02" placeholder="" value="{{ $userDetail->national_id }}" required>
                            @error('national_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <div class="invalid-feedback">
                                Please provide your Identification Number
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div> --}}
                        </div>

                    </div>
                    <br>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom03">Postal Address (P.O.BOX)</label>
                            <input name="postal_address" type="number"
                                class="form-control @error('postal_address') is-invalid @enderror "
                                id="validationCustom03"
                                value="<?= (($userDetail->postal_address)?$userDetail->postal_address:old('postal_address')); ?>"
                                placeholder="" required>
                            @error('postal_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <div class="invalid-feedback">
                                Please provide a valid Address.
                            </div> --}}
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationCustom04">City / Town</label>
                            <input name="city_town" type="text"
                                class="form-control @error('city_town') is-invalid @enderror" id="validationCustom04"
                                value="<?= (($userDetail->city_town)?$userDetail->city_town:old('city_town')); ?>"
                                placeholder="" required>
                            @error('city_town')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <div class="invalid-feedback">
                                Please provide a valid city / town.
                            </div> --}}
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="validationCustom03">Post Code</label>
                            <input name="post_code" type="text"
                                class="form-control @error('post_code') is-invalid @enderror " id="validationCustom03"
                                value="<?= (($userDetail->post_code)?$userDetail->post_code:old('post_code')); ?>"
                                placeholder="" required>
                            @error('post_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <div class="invalid-feedback">
                                Please provide a valid Post code.
                            </div> --}}
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="validationCustom05">county</label>
                            <input name="county" type="text" class="form-control @error('county') is-invalid @enderror "
                                id="validationCustom05"
                                value="<?= (($userDetail->county)?$userDetail->county:old('county')); ?>" placeholder=""
                                required>
                            @error('county')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            {{-- <div class="invalid-feedback">
                                Please provide a valid county.
                            </div> --}}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input name="terms_conditions"
                                class="form-check-input @error('terms_conditions') @enderror " type="checkbox"
                                value="{{ old('terms_conditions') }}" id="invalidCheck" required>
                            @error('terms_conditions')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>

                            {{-- <div class="invalid-feedback">
                                You must agree before submitting.
                            </div> --}}

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn btn-primary btn-mine" name="complete" id="complete"
                                type="submit">Complete</button>
                        </div>
                    </div>
                    @endforeach
                </form>

                <script>
                    // //  Example starter JavaScript for disabling form submissions if there are invalid fields
                    // (function () {
                    //     'use strict';
                    //     window.addEventListener('load', function () {
                    //         // Fetch all the forms we want to apply custom Bootstrap validation styles to
                    //         var forms = document.getElementsByClassName('needs-validation');
                    //         // Loop over them and prevent submission
                    //         var validation = Array.prototype.filter.call(forms, function (form) {
                    //             form.addEventListener('submit', function (event) {
                    //                 if (form.checkValidity() === false) {
                    //                     event.preventDefault();
                    //                     event.stopPropagation();
                    //                 }
                    //                 form.classList.add('was-validated');
                    //             }, false);
                    //         });
                    //     }, false);
                    // })();

                    $(document).ready(function () {
                        $('form').submit(function (e) {
                            e.preventDefault();
                            if ($('input[name=terms_conditions]').prop('checked') == false) {
                                swal.fire('Please agree to the terms and conditions!', '', 'info');
                            } else {
                                $('form').unbind('submit').submit();
                            }
                        });
                    });

                </script>
            </div>
        </div>

    </div>
</div>
@endsection