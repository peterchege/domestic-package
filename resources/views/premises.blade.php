@extends('layouts.customer')
@section('content')

<!-- MAIN CONTENT -->
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-culture icon-build">
                        </i>
                    </div>
                    <div class="build-head">
                        <h2> PREMISES INFORMATION </h2>
                        <div class="page-title-subheading">
                            The purpose of this form is to provide the comany with all the
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
                <h5 class="card-title">Kindly fill the following information</h5><br>
                <form class="needs-validation" novalidate>
                    <div class="form-row">

                        <ol class="cont-li">
                            <li>Of what materials is the dwelling constructed?

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-check">
                                            <label class="form-check-label"><br>
                                                Wall :
                                            </label>
                                            <div class="col-md-12 col-sm-12 mb-3"><br>
                                                <input type="Text" class="form-control" id="validationCustom01"
                                                    placeholder="e.g. bricks..." required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="position-relative form-check">
                                            <label class="form-check-label"><br>
                                                Roof :
                                            </label>
                                            <div class="col-md-12 col-sm-12 mb-3"><br>
                                                <input type="Text" class="form-control" id="validationCustom01"
                                                    placeholder="e.g. bricks..." required>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>

                            <li>Height of the building (Storey / Floors).
                                <div class="col-md-5 col-sm-12 mb-3"><br>
                                    <input type="Number" class="form-control" id="validationCustom01"
                                        placeholder="e.g. 2" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </li>

                            <li>Of what materials are the outbuildings (if any) constructed?
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-check">
                                            <label class="form-check-label"><br>
                                                Wall :
                                            </label>
                                            <div class="col-md-12 col-sm-12 mb-3"><br>
                                                <input type="Text" class="form-control" id="validationCustom01"
                                                    placeholder="e.g. bricks..." required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="position-relative form-check">
                                            <label class="form-check-label"><br>
                                                Roof :
                                            </label>
                                            <div class="col-md-12 col-sm-12 mb-3"><br>
                                                <input type="Text" class="form-control" id="validationCustom01"
                                                    placeholder="e.g. bricks..." required>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>

                            <li>Is any business, profession or trade carried on in any portion of the premises of which
                                the dwelling forms a part?<br>

                                <div class="position-relative form-check">
                                    <label class="form-check-label"><br>
                                        <input name="rad" type="radio" class="form-check-input" value="yes"> Yes
                                    </label>
                                    <div class="col-md-12 col-sm-12 mb-3" style="display: none;" id="textboxes"><br>
                                        <label>If so, give particulars.</label>
                                        <textarea class="form-control" id="display_field" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="rad" type="radio" class="form-check-input" value="No">No
                                    </label>
                                </div>
                            </li>

                            <li>Is the dwelling :

                                <div class="position-relative form-check">
                                    <label class="form-check-label"><br>
                                        <input name="radio" type="radio" class="form-check-input">
                                        A private dwelling house
                                    </label>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="radio" type="radio" class="form-check-input">
                                        A self contained flat with separate entrance exclusively under
                                        your control
                                    </label>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="radio" type="radio" class="form-check-input">
                                        Rooms not self contained
                                    </label>
                                </div>

                            </li>

                            <li>Is the dwelling solely in your occupation?
                                (including your family and any servants)
                                <div class="position-relative form-check">
                                    <label class="form-check-label"><br>
                                        <input name="radio_dwell" type="radio" class="form-check-input"> Yes
                                    </label>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="radio_dwell" type="radio" class="form-check-input" value="no"> No
                                    </label>
                                </div>
                            </li>

                            <li id="occupation" style="display: none">If not solely in your own occupation, do you let
                                apartments or receive boarders?
                                <div class="position-relative form-check">
                                    <label class="form-check-label"><br>
                                        <input name="radio1" type="radio" class="form-check-input"> Yes
                                    </label>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="radio1" type="radio" class="form-check-input" value="no"> No
                                    </label>
                                </div>
                            </li>

                            <li>Will the dwelling be left without any inhabitants for more than 30 consecutive days?
                                <div class="position-relative form-check">
                                    <label class="form-check-label"><br>
                                        <input name="radio_30" type="radio" class="form-check-input" value="yes"> Yes
                                    </label>

                                    <!-- textbox display -->
                                    <div class="col-md-12 col-sm-12 mb-3" style="display:none;" id="textboxes1"><br>
                                        <label>If so, give particulars.</label>
                                        <textarea class="form-control" id="display_field" rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="radio_30" type="radio" class="form-check-input" value="no"> No
                                    </label>
                                </div>
                            </li>

                            <li id="inhabit" style="display: none">Will the dwelling be left without
                                any inhabitants for more than 7 consecutive days?<br>
                                <div class="position-relative form-check"><br>
                                    <label class="form-check-label">
                                        <input name="radio_sev" type="radio" class="form-check-input" value="yes"> Yes
                                    </label>
                                    <!-- textbox display -->
                                    <div class="col-md-12 col-sm-12 mb-3" style="display: none;" id="textboxes2"><br>
                                        <label>If so, give particulars.</label>
                                        <textarea class="form-control" id="display_field" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="radio_sev" type="radio" class="form-check-input">
                                        No
                                    </label>
                                </div>
                            </li>

                            <li>Are the buildings in a good state of repair and will they be so maintained?
                                <div class="position-relative form-check"><br>
                                    <label class="form-check-label">
                                        <input name="radio_maintain" type="radio" class="form-check-input"> Yes
                                    </label>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="radio_maintain" type="radio" class="form-check-input"> No
                                    </label>
                                </div>
                            </li>

                            <li>Do you have burglar-proof doors and windows?
                                <div class="position-relative form-check">
                                    <label class="form-check-label"><br>
                                        <input name="radio_proof" type="radio" class="form-check-input" value="yes"> Yes
                                    </label>
                                    <!-- textbox display -->
                                    <div class="col-md-12 col-sm-12 mb-3" style="display: none;" id="textboxes3"><br>
                                        <label> If so give details</label>
                                        <textarea class="form-control" id="display_field" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="radio_proof" type="radio" class="form-check-input">
                                        No
                                    </label>
                                </div>
                            </li>

                            <li>What other security arrangements do you have in place (e.g Guards, alarm, etc)?
                                <div class="col-md-9 col-sm-12 mb-3"><br>
                                    <textarea class="form-control" id="display_field" rows="3"></textarea>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </li>


                        </ol>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="product_risk.html">
                                <button class="btn btn-primary btn-mine" type="submit">NEXT</button>
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
