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
                        <h2> CONTENTS INFORMATION </h2>
                        <div class="page-title-subheading">
                            The purpose of this form is to provide the company with all the
                            material information<br> that is likely to influence the assessment of your
                            cover.
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
                <div class="col-12">
                    <p>Contents being furniture, household goods and personal effects
                        that belong to you; or
                        any member of your family normally
                        residing with the you at this residence; and fixtures and
                        fittings that you own or for which you are legally responsible, not being the
                        landlord's
                        fixtures and fittings, in this residence.
                    </p>
                    <p>No one article (Furniture, Household appliances
                        Pianos and Organs excepted) shall be deemed of
                        greater value than 5 per cent of the Total Sum
                        Insured on the Contents unless such article is
                        specifically insured.
                        Specify here any such articles of greater value than
                        5 per cent of the Total Sum Insured on the said
                        contents

                        Description Value

                        The total value of platinum, gold and silver
                        articles, jewellery and furs will be deemed not to
                        exceed one-third of the total sum insured on the
                        said contents unless specially agreed. If the said
                        value exceeds this portion please state the total
                        value of such property.
                    </p>
                </div>

                <form action="{{ route('contentSubmit') }}" method="POST" class="needs-validation" id="form_content"
                    novalidate>
                    @csrf
                    <div class="form-row container">
                        <div class="col-3 cont-row">
                            <label>Item Description </label>
                            <input type="text" class="form-control" id="item_description" placeholder="" value=""
                                required>
                            <div class="invalid-feedback">
                                Please provide item description
                            </div>
                        </div>

                        <div class="col-3 cont-row">
                            <label>Value (KShs)</label>
                            <input type="number" class="form-control" id="item_value" placeholder="" value="" min="1"
                                required>
                            <div class="invalid-feedback">
                                Please provide value of item
                            </div>
                        </div>

                        <div class="col-2 cont-row">
                            <button class="btn btn-primary btn-mine space-bt" id="add_content"
                                type="submit">Add</button>
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
                                                <span id="span_total_amount"></span>
                                            </div>
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
                                                <th>Value (KShs)</th>
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
                            <button class="btn btn-primary btn-mine" type="submit" id="next">NEXT</button>
                        </div>
                    </div>
                </form>

                <script>
                    $(document).ready(function () {
                        var i = 1;
                        $('#add_content').click(function (e) {
                            e.preventDefault();
                            var item_description = $('#item_description').val();
                            var item_value = $('#item_value').val();
                            var items_value = 0;

                            if (item_description == '' || item_value == '') {
                                swal.fire('Please fill all the input fields!', '', 'info');
                            } else {
                                $('#table_body').append('<tr id="' + i +
                                    '" class="item-row" ><th scope="row">' + '<li></li>' +
                                    '</th><td>' + item_description +
                                    '</td><input type="hidden" class="hidden-input-text" name="item_description[]" value="' +
                                    item_description + '"><td>' + item_value +
                                    '</td><input type="hidden" class="hidden-input-number" name="item_value[]" value="' +
                                    item_value +
                                    '"> <td> <button name="remove" class = "btn btn-focus remove" id = "' +
                                    i + '"> Remove </button></td></tr>'
                                );
                                $('.no-entry').remove();
                                i++;
                                $('#form_content').trigger('reset');
                                $('#span_total_amount').html(add());
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
                            $('#span_total_amount').html(add());
                        });

                        $(document).on('click', '#next', function (e) {
                            e.preventDefault();
                            if ($('.item-row').length < 1) {
                                swal.fire('Please fill and add all the input fields!', '', 'info');
                            } else {
                                $('form').unbind('submit').submit();
                            }
                        });

                        if ($('.item-row').length < 1) {
                            var no_entry = '<td class="no-entry">Please add your item(s).</td>';
                            $('#table_body').append(no_entry);
                        }

                        function add() {
                            var sum = 0;
                            $(".hidden-input-number").each(function () {
                                sum += +this.value;
                            });
                            return sum; // an add function shouldn't really "alert"
                        }

                    });

                </script>
            </div>
        </div>

    </div>
</div>
@endsection
