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
        @if(session('message_name'))
        <div class="alert alert-danger">
            {{session('message_name')}}
        </div>
        @endif
        <div class="main-card mb-3 card">
            <div class="card-body build-h5">
                <h5 class="card-title">Kindly fill the following information</h5><br>
                <form action="{{ route('premisesSubmit') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-row">
                        <ol class="cont-li">

                            <li>State physical location of all the Premises at which property is contained/ insurance is
                                requred
                                <div class="row">
                                    <div class="col-md-8">

                                        <label class="form-check-label"><br>
                                            Physical location:
                                        </label>

                                        <div class="col-md-12 col-sm-12 mb-3"><br>
                                            <input name="physical_location" type="text"
                                                class="form-control @error('physical_location') is-invalid @enderror"
                                                id="validationCustom01"
                                                placeholder="e.g. PLOT NO. 1870/VI/209 MVULI ROAD WESTLANDS, NAIROBI..."
                                                required value="{{ old('physical_location') }}">
                                            @error('physical_location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-4">

                                        <label class="form-check-label"><br>
                                            Value of the building:
                                        </label>

                                        <div class="col-md-12 col-sm-12 mb-3"><br>
                                            <input name="premises_value" type="number"
                                                class="form-control @error('premises_value') is-invalid @enderror"
                                                id="premises_value" placeholder="e.g. 10000000" required
                                                value="{{ old('premises_value') }}">
                                            @error('premises_value')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </li>

                            <li>Of what materials is the dwelling constructed?
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-check">
                                            <label class="form-check-label"><br>
                                                Wall :
                                            </label>
                                            <div class="col-md-12 col-sm-12 mb-3"><br>
                                                {{-- <input name="wall_material" type="text"
                                                    class="form-control @error('wall_material') is-invalid @enderror"
                                                    id="validationCustom01" placeholder="e.g. bricks..." required
                                                    value="{{ old('wall_material') }}"> --}}
                                                <select class="form-control">
                                                    <option selected disabled>Choose.....</option>
                                                    <option>Bricks </option>
                                                    <option>Stone </option>
                                                </select>
                                                @error('wall_material')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="position-relative form-check">
                                            <label class="form-check-label"><br>
                                                Roof :
                                            </label>
                                            <div class="col-md-12 col-sm-12 mb-3"><br>
                                                <select class="form-control">
                                                    <option selected disabled>Choose.....</option>
                                                    <option>Bricks </option>
                                                    <option>Stone </option>
                                                </select>
                                                @error('roof_material')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>

                            <li>Height of the building (Storey / Floors).
                                <div class="col-md-5 col-sm-12 mb-3"><br>
                                    <select class="form-control">
                                        <option selected disabled>Choose.....</option>
                                        <option>Bricks </option>
                                        <option>Stone </option>
                                    </select>
                                    @error('building_height')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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
                                                <select class="form-control">
                                                    <option selected disabled>Choose.....</option>
                                                    <option>Bricks </option>
                                                    <option>Stone </option>
                                                </select>
                                                @error('outbuilding_wall')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="position-relative form-check">
                                            <label class="form-check-label"><br>
                                                Roof :
                                            </label>
                                            <div class="col-md-12 col-sm-12 mb-3"><br>
                                                <select class="form-control">
                                                    <option selected disabled>Choose.....</option>
                                                    <option>Bricks </option>
                                                    <option>Stone </option>
                                                </select>
                                                @error('outbuilding_roof')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>Is any business, profession or trade carried on in any portion of the premises of which
                                the dwelling forms a part?<br>
                                <div class="position-relative form-check">
                                    <label class="form-check-label"><br>
                                        <input name="rad" type="radio"
                                            class="form-check-input @error('rad') is-invalid @enderror " value="1"
                                            {{(old('rad') == '1') ? 'checked' : ''}}> Yes
                                    </label>
                                    <div class="col-md-12 col-sm-12 mb-3" style="display: none;" id="textboxes"><br>
                                        <label>If so, give particulars.</label>
                                        <textarea name="rad_details" class="form-control" id="display_field"
                                            rows="3">{{ old('rad_details') }}</textarea>
                                    </div>
                                </div>

                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="rad" type="radio"
                                            class="form-check-input @error('rad') is-invalid @enderror" value="0"
                                            {{(old('rad') == '0') ? 'checked' : ''}}>No
                                        @error('rad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                </div>
                            </li>

                            <li>Is the dwelling :
                                <div class="position-relative form-check">
                                    <label class="form-check-label"><br>
                                        <input name="dwelling" type="radio"
                                            class="form-check-input @error('dwelling') is-invalid @enderror "
                                            value="private" {{(old('dwelling') == 'private') ? 'checked' : ''}}>
                                        A private dwelling house
                                    </label>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="dwelling" type="radio"
                                            class="form-check-input @error('dwelling') is-invalid @enderror"
                                            value="self-contained"
                                            {{(old('dwelling') == 'self-contained') ? 'checked' : ''}}>
                                        A self contained flat with separate entrance exclusively under
                                        your control
                                    </label>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="dwelling" type="radio"
                                            class="form-check-input @error('dwelling') is-invalid @enderror"
                                            value="room-not-self-contained"
                                            {{(old('dwelling') == 'room-not-self-contained') ? 'checked' : ''}}>
                                        Rooms not self contained
                                        @error('dwelling')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                </div>

                            </li>

                            <li>Is the dwelling solely in your occupation?
                                (including your family and any servants)
                                <div class="position-relative form-check">
                                    <label class="form-check-label"><br>
                                        <input name="dwelling_occupation" type="radio"
                                            class="form-check-input @error('dwelling_occupation') is-invalid @enderror"
                                            value="1" {{(old('dwelling_occupation') == '1') ? 'checked' : ''}}>
                                        Yes
                                    </label>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="dwelling_occupation" type="radio"
                                            class="form-check-input @error('dwelling_occupation') is-invalid @enderror"
                                            value="0" {{(old('dwelling_occupation') == '0') ? 'checked' : ''}}>
                                        No
                                        @error('dwelling_occupation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                </div>
                            </li>

                            <li id="occupation" style="display: none">If not solely in your own occupation, do you let
                                apartments or receive boarders?
                                <div class="position-relative form-check">
                                    <label class="form-check-label"><br>
                                        <input name="let" type="radio"
                                            class="form-check-input @error('let') is-invalid @enderror " value="1"
                                            {{(old('let') == '1') ? 'checked' : ''}}> Yes
                                    </label>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="let" type="radio"
                                            class="form-check-input  @error('let') is-invalid @enderror " value="0"
                                            value="0" {{(old('let') == '0') ? 'checked' : ''}}>
                                        No
                                        @error('let')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                </div>
                            </li>

                            <li>Will the dwelling be left without any inhabitants for more than 30 consecutive days?
                                <div class="position-relative form-check">
                                    <label class="form-check-label"><br>
                                        <input name="thirty_day" type="radio"
                                            class="form-check-input @error('thirty_day') is-invalid @enderror" value="1"
                                            {{(old('thirty_day') == '1') ? 'checked' : ''}}> Yes
                                    </label>

                                    <!-- textbox display -->
                                    <div class="col-md-12 col-sm-12 mb-3" style="display:none;" id="textboxes1"><br>
                                        <label>If so, give particulars.</label>
                                        <textarea name="thirty_day_details" class="form-control" id="display_field"
                                            rows="3">{{ old('thirty_day_details') }}</textarea>
                                    </div>
                                </div>

                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="thirty_day" type="radio"
                                            class="form-check-input @error('thirty_day') is-invalid @enderror" value="0"
                                            {{(old('thirty_day') == '0') ? 'checked' : ''}}> No
                                        @error('thirty_day')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                </div>
                            </li>

                            <li id="inhabit" style="display: none">Will the dwelling be left without
                                any inhabitants for more than 7 consecutive days?<br>
                                <div class="position-relative form-check"><br>
                                    <label class="form-check-label">
                                        <input name="seven_day" type="radio" class="form-check-input" value="1"> Yes
                                    </label>
                                    <!-- textbox display -->
                                    <div class="col-md-12 col-sm-12 mb-3" style="display: none;" id="textboxes2"><br>
                                        <label>If so, give particulars.</label>
                                        <textarea name="seven_day_details" class="form-control" id="display_field"
                                            rows="3">{{ old('seven_day') }}</textarea>
                                    </div>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="seven_day" type="radio" class="form-check-input" value="0">
                                        No
                                    </label>
                                </div>
                            </li>

                            <li>Are the buildings in a good state of repair and will they be so maintained?
                                <div class="position-relative form-check"><br>
                                    <label class="form-check-label">
                                        <input name="repair_state" type="radio"
                                            class="form-check-input @error('repair_state') is-invalid @enderror"
                                            value="1" {{(old('repair_state') == '1') ? 'checked' : ''}}>
                                        Yes
                                    </label>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="repair_state" type="radio"
                                            class="form-check-input @error('repair_state') is-invalid @enderror"
                                            value="0" {{(old('repair_state') == '0') ? 'checked' : ''}}> No
                                        @error('repair_state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                </div>
                            </li>

                            <li>Do you have burglar-proof doors and windows?
                                <div class="position-relative form-check">
                                    <label class="form-check-label"><br>
                                        <input name="burglar_proof" type="radio"
                                            class="form-check-input @error('burglar_proof') is-invalid @enderror "
                                            value="1" {{(old('burglar_proof') == '1') ? 'checked' : ''}}> Yes
                                    </label>
                                    <!-- textbox display -->
                                    <div class="col-md-12 col-sm-12 mb-3" style="display: none;" id="textboxes3"><br>
                                        <label> If so give details</label>
                                        <textarea name="burglar_proof_details" class="form-control" id="display_field"
                                            rows="3">{{ old('burglar_proof_details') }}</textarea>
                                    </div>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="burglar_proof" type="radio"
                                            class="form-check-input @error('burglar_proof') is-invalid @enderror "
                                            value="0" {{(old('burglar_proof') == '0') ? 'checked' : ''}}>
                                        No
                                        @error('burglar_proof')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                </div>
                            </li>

                            <li>What other security arrangements do you have in place (e.g Guards, alarm, etc)?
                                <div class="col-md-9 col-sm-12 mb-3"><br>
                                    <textarea class="form-control" id="display_field" rows="3"
                                        name="other_security">{{ old('other_security') }}</textarea>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <input type="hidden" name="building_amount" id="building_amount" value="">
                    <input type="hidden" name="content_amount" id="content_amount" value="">
                    <input type="hidden" name="domestic_amount" id="domestic_amount" value="">
                    <input type="hidden" name="risk_amount" id="risk_amount" value="">
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="{{ route('premisesSubmit') }}">
                                <button id="premisesSubmit" name="submitPremisesInfo" class="btn btn-primary btn-mine"
                                    type="submit">NEXT</button>
                            </a>

                        </div>
                    </div>

                </form>

                <script>
                    // // Example starter JavaScript for disabling form submissions if there are invalid fields
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

                </script>
                <script>
                    $(document).ready(function () {
                        var building_amount = sessionStorage.getItem('building_amount');
                        if (building_amount != '') {
                            $('#premises_value').val(building_amount);
                        }

                        var content_amount = sessionStorage.getItem('content_amount');
                        $('#content_amount').val(content_amount);
                        var domestic_amount = sessionStorage.getItem('domestic_amount');
                        $('#domestic_amount').val(domestic_amount);
                        var risk_amount = sessionStorage.getItem('risk_amount');
                        $('#risk_amount').val(risk_amount);

                        $('#premisesSubmit').click(function (e) {
                            e.preventDefault();
                            var errors = [];
                            $('textarea').each(function () {
                                // element == this
                                if (!$(this).is(":hidden") && $(this).val() == '') {
                                    $(this).css('border', '#d92550 solid 1px');
                                    errors.push($(this).attr('name'));
                                } else {
                                    $(this).removeAttr('style');
                                }
                            });
                            if (errors.length > 0) {
                                swal.fire('Please fill in the missing fields!', '', 'info');
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
