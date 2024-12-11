@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Add New Hanger</h4>

                <!-- <div class="page-title-right">
                    <button type="button" class="btn btn-success waves-effect waves-light">Add New</button>
                </div> -->
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="mb-3 ajax-select mt-3 mt-lg-0">
                <label class="form-label">Style No</label>
                <select class="form-control select2">
                    <option value="">Select Style No</option>
                    <option value="637735372">637735372</option>
                    <option value="637735392">637735392</option>
                    <option value="637735392">637735392</option>
                    <option value="637735362">637735362</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title mb-4">If need</h4> -->

                    <form action="value_addition.html">

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label for="item_name1" class="form-label">Item Name</label>
                                    <input type="text" class="form-control" id="item_name1" placeholder="Enter Item Name"
                                        value="Hanger ( Carters)">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="supplier1" class="form-label">Supplier</label>
                                    <input type="text" class="form-control" id="supplier1" placeholder="Enter Supplier">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="unit1" class="form-label">Unit</label>
                                    <select id="unit1" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>Dzm's</option>
                                        <option>Pcs</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="unit_price1" class="form-label">Unit Price (BDT)</label>
                                    <input type="text" class="form-control" id="unit_price1"
                                        placeholder="Enter Unit Price">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="total_amount1" class="form-label">Total Amount</label>
                                    <input type="text" class="form-control" id="total_amount1"
                                        placeholder="Enter Total Amount">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="item_name2" placeholder="Enter Item Name"
                                        value="SIZE CLIP">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="supplier2" placeholder="Enter Supplier">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <select id="unit2" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>Dzm's</option>
                                        <option>Pcs</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="unit_price2"
                                        placeholder="Enter Unit Price">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="total_amount2"
                                        placeholder="Enter Total Amount">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="item_name2" placeholder="Enter Item Name"
                                        value="">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="supplier2"
                                        placeholder="Enter Supplier">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <select id="unit2" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>Dzm's</option>
                                        <option>Pcs</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="unit_price2"
                                        placeholder="Enter Unit Price">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="total_amount2"
                                        placeholder="Enter Total Amount">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="item_name2"
                                        placeholder="Enter Item Name" value="">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="supplier2"
                                        placeholder="Enter Supplier">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <select id="unit2" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>Dzm's</option>
                                        <option>Pcs</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="unit_price2"
                                        placeholder="Enter Unit Price">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="total_amount2"
                                        placeholder="Enter Total Amount">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="item_name2"
                                        placeholder="Enter Item Name" value="">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="supplier2"
                                        placeholder="Enter Supplier">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <select id="unit2" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>Dzm's</option>
                                        <option>Pcs</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="unit_price2"
                                        placeholder="Enter Unit Price">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="total_amount2"
                                        placeholder="Enter Total Amount">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="item_name2"
                                        placeholder="Enter Item Name" value="">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="supplier2"
                                        placeholder="Enter Supplier">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <select id="unit2" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>Dzm's</option>
                                        <option>Pcs</option>
                                    </select>
                                </div>
                            </div>



                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="unit_price2"
                                        placeholder="Enter Unit Price">
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="total_amount2"
                                        placeholder="Enter Total Amount">
                                </div>
                            </div>

                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                        </div>
                    </form>


                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->

    </div>
@endsection
