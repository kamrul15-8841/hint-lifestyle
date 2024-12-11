@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Update Style Details</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title mb-4">If need</h4> -->

                    <form action="style_details.html">
                        <div class="mb-3">
                            <label for="formrow-style-no-input" class="form-label">Style No</label>
                            <input type="text" class="form-control" id="formrow-style-no-input" name="style_no"
                                placeholder="Enter Style No">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-division-input" class="form-label">Division</label>
                                    <input type="text" class="form-control" id="formrow-division-input" name="division"
                                        placeholder="Enter Division">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="formrow-season-input" class="form-label">Season</label>
                                    <input type="text" class="form-control" id="formrow-season-input" name="season"
                                        placeholder="Enter Season">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formrow-product-category-input" class="form-label">Product Category</label>
                                    <input type="text" class="form-control" id="formrow-product-category-input"
                                        name="product_category" placeholder="Enter Product Category">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formrow-total-quantity-input" class="form-label">Total Quantity</label>
                                    <input type="number" class="form-control" id="formrow-total-quantity-input"
                                        name="total_quantity" placeholder="Enter Total Quantity">
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
