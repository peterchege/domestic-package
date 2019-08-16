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
                        <h2> DOMESTIC EMPLOYEES INFORMATION </h2>
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

        <div class="main-card mb-3 card">
            <div class="card-body build-h5">
                <h5 class="card-title">Kindly fill the following information</h5><br>
                <div class="col-12">
                    <p>Please identify which domestic employees you have, the number of each and their total annual
                        salary.
                    </p>
                </div>

                <form class="needs-validation" id="form_domestic" method="POST" action="{{ route('domesticSubmit') }}"
                    novalidate>
                    @csrf
                    <div class="row cont-row container">
                        <div class="col-md-2 offset-2">
                            <label>Employee</label><br>
                            <input type="checkbox" class="form-check-input check indoor_staff" id="indoor_staff">
                            <p>Indoor Staff</p>
                            <br>
                            <input type="checkbox" class="form-check-input check gardener" id="gardener">
                            <p>Gardener</p>
                            <br>
                            <input type="checkbox" class="form-check-input check stablemen" id="stablemen">
                            <p>Stablemen</p>
                            <br>
                            <input type="checkbox" class="form-check-input check chauffeurs" id="chauffeurs">
                            <p>Chauffeurs</p>
                            <br>
                            <input type="checkbox" class="form-check-input check watchmen" id="watchmen">
                            <p>Watchmen</p>
                        </div>
                        <div class="col-md-2 number_column">
                            <label>No. </label>
                            <input type="number" class="form-control" id="indoor_staff" placeholder="" value=""
                                disabled>
                            <br>
                            <input type="number" class="form-control" id="gardener" placeholder="" value="" disabled>
                            <br>
                            <input type="number" class="form-control" id="stablemen" placeholder="" value="" disabled>
                            <br>
                            <input type="number" class="form-control" id="chauffeurs" placeholder="" value="" disabled>
                            <br>
                            <input type="number" class="form-control" id="watchmen" placeholder="" value="" disabled>
                        </div>

                        <div class="col-md-4 offset-1 salary_column">
                            <label>Total Annual Salary</label><br>
                            <input type="number" class="form-control" id="indoor_staff" placeholder="" value="" disabled
                                disabled>
                            <br>
                            <input type="number" class="form-control" id="gardener" placeholder="" value="" disabled>
                            <br>
                            <input type="number" class="form-control" id="stablemen" placeholder="" value="" disabled>
                            <br>
                            <input type="number" class="form-control" id="chauffeurs" placeholder="" value="" disabled>
                            <br>
                            <input type="number" class="form-control" id="watchmen" placeholder="" value="" disabled>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4   offset-md-7 col-xl-4">
                            <div class="card mb-3 widget-content bg-grow-early">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Total Amount</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white">
                                            <span>80,000</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn btn-primary btn-mine" type="submit">NEXT</button>
                        </div>
                    </div>
                </form>

                <script>
                    $(document).ready(function () {
                        //checkbox reveal and hide
                        $('.check').click(function () {
                            if ($(this).prop('checked') == true) {
                                var id_name = $(this).attr('id');
                                $('.number_column>#' + id_name + '').prop('disabled', false);
                                $('.salary_column>#' + id_name + '').prop('disabled', false);
                            } else if ($(this).prop('checked') == false) {
                                var id_name = $(this).attr('id');
                                $('.number_column>#' + id_name + '').prop('disabled', true);
                                $('.number_column>#' + id_name + '').val('');
                                $('.salary_column>#' + id_name + '').prop('disabled', true);
                                $('.salary_column>#' + id_name + '').val('');
                            }
                        });
                    });

                </script>
            </div>
        </div>

    </div>
</div>
@endsection
