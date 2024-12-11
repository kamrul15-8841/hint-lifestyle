@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Add New Style Details</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="card-title mb-4">If need</h4> -->

                    <form action="style_details.html">
<!--                                        <div class="mb-3">-->
<!--                                            <label for="formrow-style-no-input" class="form-label">Style No</label>-->
<!--                                            <input type="text" class="form-control" id="formrow-style-no-input" name="style_no" placeholder="Enter Style No">-->
<!--                                        </div>-->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-style-no-input" class="form-label">Style No</label>
                                    <input type="text" class="form-control" id="formrow-style-no-input" name="style_no" placeholder="Enter Style No">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-division-input" class="form-label">Division</label>
                                    <select id="formrow-division-input" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>Men</option>
                                        <option>Women</option>
                                        <option>Girls</option>
                                        <option>Boys</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-season-input" class="form-label">Season</label>
                                    <input type="text" class="form-control" id="formrow-season-input" name="season" placeholder="Enter Season">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-product-category-input" class="form-label">Product Category</label>
                                    <select id="formrow-age-range-input" class="form-select" name="product_category">
                                        <option selected>Choose...</option>
                                        <option>Shirt</option>
                                        <option>Tops</option>
                                    </select>
                                    {{-- <input type="text" class="form-control" id="formrow-product-category-input" name="product_category" placeholder="Enter Product Category"> --}}
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-division-input" class="form-label">Age Range</label>
                                    <select id="formrow-age-range-input" class="form-select">
                                        <option selected>Choose...</option>
                                        <option>Adults</option>
                                        <option>Kids</option>
                                        <option>Todler</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-total-quantity-input" class="form-label">Order Quantity</label>
                                    <input type="number" class="form-control" id="formrow-total-quantity-input" name="total_quantity" placeholder="Enter Order Quantity">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formrow-smv-input" class="form-label">SMV</label>
                                    <input type="text" class="form-control" id="formrow-smv-input" name="smv" placeholder="Enter SMV" readonly>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="formrow-cm-pcs-input" class="form-label">CM Per Pcs</label>
                                    <input type="number" class="form-control" id="formrow-cm-pcs-input" name="cm_pcs" placeholder="Enter CM/Pcs" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-image1-input" class="form-label">Image-1</label>
                                    <input type="file" class="form-control" id="formrow-image1-input" name="image1" placeholder="Enter Product Category">
                                </div>
                                <div class="mb-3">
                                    <label for="formrow-img-title1-input" class="form-label">Image Title-1</label>
                                    <input type="text" class="form-control" id="formrow-img-title1-input" name="imageTitle1" placeholder="Enter Image Title">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-image2-input" class="form-label">Image-2</label>
                                    <input type="file" class="form-control" id="formrow-image2-input" name="image2" placeholder="Enter Product Category">
                                </div>
                                 <div class="mb-3">
                                    <label for="formrow-img-title2-input" class="form-label">Image Title-2</label>
                                    <input type="text" class="form-control" id="formrow-img-title2-input" name="imageTitle2" placeholder="Enter Image Title">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-image3-input" class="form-label">Image-3</label>
                                    <input type="file" class="form-control" id="formrow-image3-input" name="image3" placeholder="Enter Product Category">
                                </div>
                                 <div class="mb-3">
                                    <label for="formrow-img-title3-input" class="form-label">Image Title-3</label>
                                    <input type="text" class="form-control" id="formrow-img-title3-input" name="imageTitle3" placeholder="Enter Image Title">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-image1-input" class="form-label">Image-4</label>
                                    <input type="file" class="form-control" id="formrow-image1-input" name="image4" placeholder="Enter Product Category">
                                </div>
                                <div class="mb-3">
                                    <label for="formrow-img-title1-input" class="form-label">Image Title-4</label>
                                    <input type="text" class="form-control" id="formrow-img-title1-input" name="imageTitle4" placeholder="Enter Image Title">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label for="formrow-image2-input" class="form-label">Image-5</label>
                                    <input type="file" class="form-control" id="formrow-image2-input" name="image5" placeholder="Enter Product Category">
                                </div>
                                 <div class="mb-3">
                                    <label for="formrow-img-title2-input" class="form-label">Image Title-5</label>
                                    <input type="text" class="form-control" id="formrow-img-title2-input" name="imageTitle5" placeholder="Enter Image Title">
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
