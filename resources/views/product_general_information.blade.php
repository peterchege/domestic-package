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
                        <h2> GENERAL INFORMATION </h2>
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
                <h5 class="card-title">Kindly fill the following information</h5><br>
                <form action="{{ route('generalInformationSubmit') }}" method="POST" class="needs-validation"
                    novalidate>
                    @csrf
                    <div class="form-row  ">
                        <ol class="cont-li ">
                            <li>Has any insurer:
                                <ul>
                                    <li>Declined to insure you?
                                        <div class="position-relative form-check">
                                            <label class="form-check-label">
                                                <input name="insurer_decline" type="radio" class="form-check-input @error('insurer_decline') is-invalid
                                                    @enderror" value="1"
                                                    {{(old('insurer_decline') == '1') ? 'checked' : ''}}> Yes
                                            </label>
                                            <!-- textbox display -->
                                            <div class="col-md-12 col-sm-12 mb-3" style="display: none;"
                                                id="textboxes4"><br>
                                                <label> If so give details</label>
                                                <textarea name="insurer_decline_details" class="form-control"
                                                    id="display_field"
                                                    rows="3">{{ old('insurer_decline_details') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="position-relative form-check">
                                            <label class="form-check-label">
                                                <input name="insurer_decline" type="radio" value="0" class="form-check-input @error('insurer_decline') is-invalid
                                                    @enderror" {{ old('insurer_decline')=='0'?'checked':'' }}>
                                                No
                                                @error('insurer_decline')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </li>

                                    <li>Required special terms to insure you?
                                        <div class="position-relative form-check">
                                            <label class="form-check-label">
                                                <input name="special_terms" type="radio" class="form-check-input  @error('special_terms') is-invalid
                                                    @enderror" value="1"
                                                    {{(old('special_terms') == '1') ? 'checked' : ''}}> Yes
                                            </label>
                                            <!-- textbox display -->
                                            <div class="col-md-12 col-sm-12 mb-3" style="display: none;"
                                                id="textboxes5"><br>
                                                <label> If so give details</label>
                                                <textarea name="special_terms_details" class="form-control"
                                                    id="display_field"
                                                    rows="3">{{ old('special_terms_details') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="position-relative form-check">
                                            <label class="form-check-label">
                                                <input name="special_terms" type="radio" class="form-check-input  @error('special_terms') is-invalid
                                                    @enderror" value="0"
                                                    {{(old('special_terms') == '0') ? 'checked' : ''}}>
                                                No
                                                @error('special_terms')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </li>

                                    <li>Cancellled or refused to renew your insurance?
                                        <div class="position-relative form-check">
                                            <label class="form-check-label">
                                                <input name="cancelled_refused_cover" type="radio" class="form-check-input @error('cancelled_refused_cover') is-invalid
                                                    @enderror " value="1"
                                                    {{ old('cancelled_refused_cover')=='1'?'checked':'' }}> Yes
                                            </label>
                                            <!-- textbox display -->
                                            <div class="col-md-12 col-sm-12 mb-3" style="display: none;"
                                                id="textboxes6"><br>
                                                <label> If so give details</label>
                                                <textarea name="cancelled_refused_cover_details" class="form-control"
                                                    id="display_field"
                                                    rows="3">{{ old('cancelled_refused_cover_details') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="position-relative form-check">
                                            <label class="form-check-label">
                                                <input name="cancelled_refused_cover" type="radio" class="form-check-input @error('cancelled_refused_cover') is-invalid
                                                    @enderror" value="0"
                                                    {{ old('cancelled_refused_cover')=='0'?'checked':'' }}> No
                                                @error('cancelled_refused_cover')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </li>

                                    <li>Increased your premium on renewal?
                                        <div class="position-relative form-check">
                                            <label class="form-check-label">
                                                <input name="increased_premium" type="radio"
                                                    class="form-check-input @error('increased_premium') is-invalid @enderror "
                                                    value="1" {{(old('increased_premium') == '1') ? 'checked' : ''}}>
                                                Yes
                                            </label>
                                            <!-- textbox display -->
                                            <div class="col-md-12 col-sm-12 mb-3" style="display: none;"
                                                id="textboxes7"><br>
                                                <label> If so give details</label>
                                                <textarea name="increased_premium_details" class="form-control"
                                                    id="display_field"
                                                    rows="3">{{ old('increased_premium_details') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="position-relative form-check">
                                            <label class="form-check-label">
                                                <input name="increased_premium" type="radio" class="form-check-input @error('increased_premium') is-invalid
                                                    @enderror" value="0"
                                                    {{(old('increased_premium') == '0') ? 'checked' : ''}}>
                                                No
                                                @error('increased_premium')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </li>

                            <li>Have you ever sustained loss from any of the herein mentioned perils?
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="sustained_loss_from_mentioned_perils" type="radio" class="form-check-input @error('sustained_loss_from_mentioned_perils')
                                            is-invalid @enderror" value="1"
                                            {{ (old('sustained_loss_from_mentioned_perils')=='0')?'checked':'' }}>
                                        Yes
                                    </label>
                                    <!-- textbox display -->
                                    <div class="col-md-12 col-sm-12 mb-3" style="display: none;" id="textboxes8">
                                        <br>
                                        <label> If so give details</label>
                                        <textarea name="sustained_loss_from_mentioned_perils_details"
                                            class="form-control" id="display_field"
                                            rows="3">{{ old('sustained_loss_from_mentioned_perils_details') }}</textarea>
                                    </div>
                                </div>
                                <div class="position-relative form-check">
                                    <label class="form-check-label">
                                        <input name="sustained_loss_from_mentioned_perils" type="radio" class="form-check-input @error('sustained_loss_from_mentioned_perils')
                                            is-invalid @enderror " value="0"
                                            {{ (old('sustained_loss_from_mentioned_perils') == '0')? 'checked':'' }}>
                                        No
                                        @error('sustained_loss_from_mentioned_perils')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                </div>
                            </li>


                        </ol>
                    </div>

                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn btn-primary btn-mine" id="generalInformationSubmit"
                                type="submit">NEXT</button>
                        </div>
                    </div>

                </form>

                <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
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
                        // check if theres a yes radio button that's acitve
                        $('#generalInformationSubmit').click(function (e) {
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
