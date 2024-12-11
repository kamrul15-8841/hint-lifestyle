@extends('layout.main')
@section('content')
<div class="row" >
    <!-- <div class="col-12" style="text-align: center;">
         <h4 class="mb-sm-0 font-size-18" >Style Summary</h4>
    </div> -->
    <div style="padding: 0px 12px 0px 0px;" >
        <p class="card-title-desc" style="  text-align: center; border: 1px solid black;">HINT PRE-COSTING</p>
    </div>

    <style>
        tr,th {
            border: 1px solid;
            font-size: 10px;
            text-align: center;
        }
        td {
            border: 1px solid;
            text-align: left;
        }
        th{
            background-color: lightgrey;
        }
        .forspc{
            background-color: gray; color: white; border-color: black;
        }
        .form-group {
            margin-bottom: 5px;
        }
    </style>
    <div class="row" style="width: 100%; padding: 0px 0px 0px 12px;">
        <div style="width: 30%; padding: 0px;">
            <table style="width: 99%; padding: 0px;">
                <thead>
                    <tr>
                        <th colspan="2" >Prepared By</th>
                        <th colspan="2" >Faisal</th>
                        <th colspan="1" >Closing Date</th>
                        <th colspan="1" >24-Dec-23</th>
                    </tr>
                    <tr>
                        <th colspan="6">STYLE DETAILS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2">Style No:</td>
                        <td colspan="2">65686810</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Division</td>
                        <td colspan="2">Boys</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Season</td>
                        <td colspan="2">Spring</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Product Category</td>
                        <td colspan="2">Tops</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2">SMV</td>
                        <td colspan="2"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Age Range</td>
                        <td colspan="2"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2">CM/Pcs</td>
                        <td colspan="2"></td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Order Qty.</td>
                        <td colspan="2">29800 pcs+/-</td>
                        <td colspan="1"></td>
                        <td colspan="1"></td>
                    </tr>


                    <tr>
                        <th class="forspc" colspan="6" >Marker Size</th>
                    </tr>
                    <tr>
                        <th  >Sizer</th>
                        <th  >Chest</th>
                        <th  >CBL</th>
                        <th  >Sleeve</th>
                        <th  >Arm Hole</th>
                        <th  >SWEEP</th>
                    </tr>
                    <tr>
                        <td >.</td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                    </tr>
                    <tr>
                        <td >.</td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                    </tr>

                    <tr>
                        <th colspan="6">Summaries cost info  per pcs garments (Style No - Season)</th>
                    </tr>
                    <tr>
                        <th colspan="2"></th>
                        <th>Quoted</th>
                        <th>Actual</th>
                        <th>Actual/Quote</th>
                        <th>Diff</th>
                    </tr>
                    <tr>
                        <td colspan="2">Shell Fabric</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">Other Fabric</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">SEWING ACCESSORIES</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">PACKAGING AND FINISHING</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">VALUE ADDITION</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">WASHING</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">TOTAL COST</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">CM</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">Cost of Manufaturing</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">Selling & Distribution Overhead</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">TOTAL Cost</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="2">Profit Percentage</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2">MRP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div style="width: 70%; padding: 0px;">
            <table style="width: 100%; padding: 0px;">
                <thead>
                    <tr>
                        <th class="forspc" rowspan="2" colspan="2" >ALL CONSUMPTION QUANTITY IS FOR ONE PC GARMENT. NOT IN DZ ANYMORE</th>
                        <th colspan="6" >Quoted</th>
                        <th colspan="3" >Actual</th>
                        <th colspan="2" class="forspc">Quoted/Actual</th>
                    </tr>
                    <tr>
                        <th>Supplier</th>
                        <th>Unit</th>
                        <th>Req Qty</th>
                        <th>Total Req</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                        <th>Quantity</th>
                        <th>Unit Price/pc</th>
                        <th>Total</th>
                        <th>Amount</th>
                        <th>%</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <th colspan="7" >Shell Fabric</th>
                        <th ></th>
                        <th colspan="2"></th>
                        <th></th>
                        <th>$1.03</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center" class="text-center">1</td>
                        <td>Comp : 100% Ctn poplin</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">2</td>
                        <td>Const : 80x70 32x32</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">3</td>
                        <td>Quality : Lightweight Sheeting</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="7" >Other Fabric</th>
                        <th ></th>
                        <th colspan="2"></th>
                        <th></th>
                        <th>$1.03</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">1</td>
                        <td>Comp : 100% Cotton</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">2</td>
                        <td>Const : 22x22/64x54</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">3</td>
                        <td>Quality: CH10624 Peached</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="7" >Functional trim cost (Threads, interling/Btn)</th>
                        <th ></th>
                        <th colspan="2"></th>
                        <th></th>
                        <th>$1.03</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">1</td>
                        <td>Interlining (Non-Woven dot)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">2</td>
                        <td>Interlining (TC)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">3</td>
                        <td>Thread</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">4</td>
                        <td>Plastic Button 4 hole BTN 12435</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">6</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">7</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">8</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="7" >Pkg Trim Cost</th>
                        <th ></th>
                        <th colspan="2"></th>
                        <th></th>
                        <th>$1.03</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">1</td>
                        <td>Poly</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">2</td>
                        <td>Carton</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">3</td>
                        <td>Gum Tape + Tag pin</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">4</td>
                        <td>Label/Hangtag/Sticker</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">6</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="7" >Decorative Trim cost (LBL Label @ Pocket & Placket)</th>
                        <th ></th>
                        <th colspan="2"></th>
                        <th></th>
                        <th>$1.03</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">1</td>
                        <td>Pocket Label</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">2</td>
                        <td>Placket Label</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                     <tr>
                        <td style="width: 20px;"  class="text-center">3</td>
                        <td>Neck Tape</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="7" >HANGER</th>
                        <th ></th>
                        <th colspan="2"></th>
                        <th></th>
                        <th>$1.03</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">1</td>
                        <td>Hanger(Carters)</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">2</td>
                        <td>SIZE CLIP</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th colspan="7" >VALUE ADDITION</th>
                        <th ></th>
                        <th colspan="2"></th>
                        <th></th>
                        <th>$1.03</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">1</td>
                        <td>EMB</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">2</td>
                        <td>Print</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    {{-- <tr>
                        <td style="width: 20px;"  class="text-center">4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> --}}
                    <tr>
                        <th colspan="7" >WASHING</th>
                        <th ></th>
                        <th colspan="2"></th>
                        <th></th>
                        <th>$1.03</th>
                        <th></th>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">1</td>
                        <td>GMT WASH</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">2</td>
                        <td>DENIM WASH</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    {{-- <tr>
                        <td style="width: 20px;"  class="text-center">3</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">4</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 20px;"  class="text-center">5</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr> --}}



                </tbody>
            </table>
        </div>
</div>
<div class="col-2" Style="padding-top: 50px; text-align: center;" ></div>
<div class="col-10" Style="padding-top: 50px; text-align: center;" >
    <table>
        <tbody>
            <tr>
                <td  style="height: 200px; text-align: center; padding:10px">
                    <img style="height: 180px; width: 180px;" src="{{ asset('assets/images/shirt.jpg')}}" alt="Product">
                </td>
                <td  style="height: 200px; text-align: center; padding:10px">
                    <img style="height: 180px; width: 180px;" src="{{ asset('assets/images/shirt.jpg')}}" alt="Product">
                </td>
                <td  style="height: 200px; text-align: center; padding:10px">
                    <img style="height: 180px; width: 180px;" src="{{ asset('assets/images/shirt.jpg')}}" alt="Product">
                </td>
                {{-- <td  style="height: 200px; text-align: center; padding:10px">
                    <img style="height: 180px; width: 180px;" src="{{ asset('assets/images/shirt.jpg')}}" alt="Product">
                </td>
                <td  style="height: 200px; text-align: center; padding:10px">
                    <img style="height: 180px; width: 180px;" src="{{ asset('assets/images/shirt.jpg')}}" alt="Product">
                </td> --}}
            </tr>
        </tbody>
    </table>
</div>

</div>
@endsection
