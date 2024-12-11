@extends('layout.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Add New Other Fabric</h4>
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

                <form action="other_fabric.html">

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="fabric_composition1" class="form-label">Fabric Composition</label>
                                <input type="text" class="form-control" id="fabric_composition1" name="fabric_composition[]" placeholder="Enter Fabric Composition" value="Comp: 100% Cotton">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="supplier1" class="form-label">Source</label>
                                <input type="text" class="form-control" id="source" name="source[]" placeholder="(Import/Local)">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="supplier1" class="form-label">Supplier</label>
                                <input type="text" class="form-control" id="supplier1" name="supplier[]" placeholder="Enter Supplier">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="unit1" class="form-label">Unit</label>
                                <select id="unit1" class="form-select" name="unit[]">
                                    <option selected>Choose...</option>
                                    <option>Dzm's</option>
                                    <option>Pcs</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="total_yds1" class="form-label">Total yds</label>
                                <input type="text" class="form-control" id="total_yds1" name="total_yds[]" placeholder="Enter Total yds">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="unit_price1" class="form-label">Unit Price (BDT)</label>
                                <input type="text" class="form-control" id="unit_price1" name="unit_price[]" placeholder="Enter Unit Price">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="fabric_composition1" class="form-label">Fabric Composition</label>
                                <input type="text" class="form-control" id="fabric_composition1" name="fabric_composition[]" placeholder="Enter Fabric Composition" value="Const: 22x22/64x54">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="supplier1" class="form-label">Source</label>
                                <input type="text" class="form-control" id="source" name="source[]" placeholder="(Import/Local)">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="supplier1" class="form-label">Supplier</label>
                                <input type="text" class="form-control" id="supplier1" name="supplier[]" placeholder="Enter Supplier">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="unit1" class="form-label">Unit</label>
                                <select id="unit1" class="form-select" name="unit[]">
                                    <option selected>Choose...</option>
                                    <option>Dzm's</option>
                                    <option>Pcs</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="total_yds1" class="form-label">Total yds</label>
                                <input type="text" class="form-control" id="total_yds1" name="total_yds[]" placeholder="Enter Total yds">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="unit_price1" class="form-label">Unit Price (BDT)</label>
                                <input type="text" class="form-control" id="unit_price1" name="unit_price[]" placeholder="Enter Unit Price">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="fabric_composition1" class="form-label">Fabric Composition</label>
                                <input type="text" class="form-control" id="fabric_composition1" name="fabric_composition[]" placeholder="Enter Fabric Composition" value="Quality: CH10624 Peached">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="supplier1" class="form-label">Source</label>
                                <input type="text" class="form-control" id="source" name="source[]" placeholder="(Import/Local)">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="supplier1" class="form-label">Supplier</label>
                                <input type="text" class="form-control" id="supplier1" name="supplier[]" placeholder="Enter Supplier">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="unit1" class="form-label">Unit</label>
                                <select id="unit1" class="form-select" name="unit[]">
                                    <option selected>Choose...</option>
                                    <option>Dzm's</option>
                                    <option>Pcs</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="total_yds1" class="form-label">Total yds</label>
                                <input type="text" class="form-control" id="total_yds1" name="total_yds[]" placeholder="Enter Total yds">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="unit_price1" class="form-label">Unit Price (BDT)</label>
                                <input type="text" class="form-control" id="unit_price1" name="unit_price[]" placeholder="Enter Unit Price">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="fabric_composition1" class="form-label">Fabric Composition</label>
                                <input type="text" class="form-control" id="fabric_composition1" name="fabric_composition[]" placeholder="Enter Fabric Composition" value="">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="supplier1" class="form-label">Source</label>
                                <input type="text" class="form-control" id="source" name="source[]" placeholder="(Import/Local)">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="supplier1" class="form-label">Supplier</label>
                                <input type="text" class="form-control" id="supplier1" name="supplier[]" placeholder="Enter Supplier">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="unit1" class="form-label">Unit</label>
                                <select id="unit1" class="form-select" name="unit[]">
                                    <option selected>Choose...</option>
                                    <option>Dzm's</option>
                                    <option>Pcs</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="total_yds1" class="form-label">Total yds</label>
                                <input type="text" class="form-control" id="total_yds1" name="total_yds[]" placeholder="Enter Total yds">
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label for="unit_price1" class="form-label">Unit Price (BDT)</label>
                                <input type="text" class="form-control" id="unit_price1" name="unit_price[]" placeholder="Enter Unit Price">
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
