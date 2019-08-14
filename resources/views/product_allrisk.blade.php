@extends('layouts.customer')
@section('content')
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
                        <h2> ALL RISKS INFORMATION </h2>
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
                    <p>Please give detailed description and state separately the full value of each
                        item. A valuation from an
                        approved valuer must be submitted in respect of each article to be insured for
                        more than Shs. 20,000/=
                    </p>
                </div>

                <form class="needs-validation" id="form_allrisk" novalidate action="{{ route('allriskSubmit') }}"
                    method="POST">
                    <div class="form-row container">
                        <div class="col-3 cont-row">
                            <label>Item Description</label>
                            <input type="text" class="form-control" id="item_description" placeholder="" required>
                            <div class="invalid-feedback">
                                Please provide a description of the item
                            </div>
                        </div>
                        <div class="col-2 cont-row">
                            <label>Make & Model </label>
                            <input type="text" class="form-control" id="make_model" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Please provide the model of the item
                            </div>
                        </div>

                        <div class="col-2 cont-row">
                            <label>Serial Number </label>
                            <input type="text" class="form-control" id="serial_number" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Please provide the serial Number of the item
                            </div>
                        </div>

                        <div class="col-2 cont-row">
                            <label>Value (KShs)</label>
                            <input type="number" class="form-control" id="value" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Please provide the value of the item
                            </div>
                        </div>

                        <div class="col-1 cont-row">
                            <button class="btn btn-primary btn-mine space-bt" id="add_item" type="submit">Add</button>
                        </div>

                    </div>

                    <!-- TABLE -->
                    <div class="row container">
                        <div class="col-lg-11 table-alg">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Amount</div>
                                            <!-- <div class="widget-subheading">People Interested
                                                            </div> -->
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white">
                                                <span>350,000</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">List of items</h5>
                                    <table class="mb-0 table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Description</th>
                                                <th>Make & Model</th>
                                                <th>Serial Number</th>
                                                <th>Value(KShs)</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_body">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-12 text-center">
                            <button class="btn btn-primary btn-mine" id="next" type="submit">NEXT</button>
                        </div>
                    </div>
                </form>

                <script>
                    $(document).ready(function () {
                        var i = 1;
                        $('#add_item').click(function (e) {
                            e.preventDefault();
                            var item_description = $('#item_description').val();
                            var make_model = $('#make_model').val();
                            var serial_number = $('#serial_number').val();
                            var value = $('#value').val();
                            if (item_description == '' || make_model == '' || serial_number == '' ||
                                value == '') {
                                alert('Please fill all the input fields!');
                            } else {
                                $('#table_body').append('<tr id="' + i +
                                    '"  class="item-row"  ><th scope="row">' + i +
                                    '</th><td>' + item_description +
                                    '</td><input type="hidden" name="item_description[]" value="' +
                                    item_description + '"><td>' + make_model +
                                    '</td><input type="hidden" name="make_model[]" value="' +
                                    make_model + '"><td>' + serial_number +
                                    '</td><input type="hidden" name="serial_number[]" value="' +
                                    serial_number +
                                    '"> <td>' + value +
                                    '</td><input type="hidden" name="value[]" value="' +
                                    value +
                                    '"> <td> <button name="remove" class = "btn btn-focus remove" id = "' +
                                    i + '"> Remove </button></td></tr>'
                                );
                                $('.no-entry').remove();
                                i++;
                                $('#form_allrisk').trigger('reset');
                            }
                        });
                        $(document).on('click', '.remove', function (e) {
                            e.preventDefault();
                            var id = $(this).attr('id');
                            $('#' + id + '').remove();
                            if ($('.item-row').length < 1) {
                                var no_entry = '<td class="no-entry">Please add your item(s).</td>';
                                $('#table_body').append(no_entry);
                            }
                        });

                        $(document).on('click', '#next', function (e) {
                            e.preventDefault();
                            if ($('.item-row').length < 1) {
                                alert('Please fill and add all the input fields!');
                            } else {
                                $('form').unbind('submit').submit();
                            }
                        });

                        if ($('.item-row').length < 1) {
                            var no_entry = '<td class="no-entry">Please add your item(s).</td>';
                            $('#table_body').append(no_entry);
                        }
                    });

                </script>
            </div>
        </div>

    </div>
</div>
@endsection
