<div class="container bg-white shadow-lg">
    <h3 class="text-center p-3">IMPLEMENTATION/CHANGE REVIEW AND APPROVAL RECORD</h3>
    <div class="row my-5">
        <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12 mt-2">Originator:</div>
                <div class="col-md-9 col-lg-9 col-sm-12">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12 mt-2">CR#:</div>
                <div class="col-md-9 col-lg-9 col-sm-12">
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4 col-sm-12">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12 mt-2">Date:</div>
                <div class="col-md-9 col-lg-9 col-sm-12">
                    <input type="date" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-3 col-lg-3 col-sm-12">
            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Hold Required?
                </label>
            </div>
        </div>
        <div class="col-md-9 col-lg-9 col-sm-12">
            <div class="mb-3">
                <input type="text" class="form-control" id="reason" placeholder="Reason">
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-12">
            <div class="form-check mt-2">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    STAT
                </label>
            </div>
        </div>
        <div class="col-md-9 col-lg-9 col-sm-12">
            <div class="mb-3">
                <input type="text" class="form-control" id="reason" placeholder="Reason">
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-12 mt-2">Change effects:</div>
                <div class="col-md-9 col-lg-9 col-sm-12">
                    <select class="form-control" name="change_effects" id="change_effects">
                        <option value="0">Select a change effect</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-sm-12 mt-2">Manufactured For:</div>
                <div class="col-md-9 col-lg-8 col-sm-12">
                    <select class="form-control" name="change_effects" id="change_effects">
                        <option value="0">Select a Manufactured</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Supplier Pre-Change Notification:
                        </label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <input type="file" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Supplier Notification:
                        </label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <input type="file" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 mt-3">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Add/Edit UDI Data Elements:
                        </label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <input type="file" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Product Labeling affected:
                        </label>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <input type="file" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="w-100 my-4" style="background-color: #E2EDFE;">
            <h4 class="text-center my-2">Change information</h4>
        </div>
        <div class="w-100 d-flex justify-content-end my-3">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success mx-3" type="button" onclick="addRowChangeInfo()">
                    <i class="anticon anticon-plus"></i>
                    Add Item
                </button>
            </div>
        </div>
        <table id="change_information_table" class="table table-bordered table-responsive text-center mb-0 pb-0 border-bottom-0 w-100">
            <thead>
                <tr style="background-color:#e9e9e9;">
                    <th rowspan="10">Options</th>
                    <th rowspan="10">Item</th>
                    <th rowspan="10">Description of Change:</th>
                    <th colspan="4">Select all that apply</th>
                </tr>
                <tr class="table-secondary">
                    <th>Boom</th>
                    <th>Router</th>
                    <th>10-Line</th>
                    <th>Label Proof</th>
                </tr>
            </thead>
            <tbody id="rows">
                <tr>
                    <td id="column_0">
                        <button class="btn btn-danger" onclick="deleteRow()">
                            <i class="anticon anticon-close"></i>
                        </button>
                    </td>
                    <td id="column_1">
                        <input type="text" class="form-control input_table" name="item_">
                    </td>
                    <td id="column_2">
                        <textarea cols="80" rows="3" class="form-control input_table" name="description_change_"></textarea>
                    </td>
                    <td id="column_3">
                        <input class="form-check-input input_table" type="checkbox" name="boom_">
                    </td>
                    <td id="column_4">
                        <input class="form-check-input input_table" type="checkbox" name="router_">
                    </td>
                    <td id="column_5">
                        <input class="form-check-input input_table" type="checkbox" name="ten_line_">
                    </td>
                    <td id="column_6">
                        <input class="form-check-input input_table" type="checkbox" name="label_proof_">
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-bordered border-top-0 table-responsive text-center pt-0 mt-0">
            <thead>
                <tr style="background-color:#e9e9e9;">
                    <th style="width: 100% !important;">Reason for changes:</th>
                </tr>
            </thead>
            <tbody id="rows">
                <tr>
                    <td>
                        <textarea class="form-control" name="" id="" cols="200" rows="3"></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <table id="affected_item_table" class="table table-bordered border-top-0 table-responsive text-center pt-0 mt-0">
            <thead>
                <tr class="table-secondary">
                    <th colspan="7">Affected Item(s)/Document Number(s)</th>
                    <th colspan="5">Stock per Warehouse</th>
                    <th>Contunue to Build</th>
                    <th colspan="2">Disposition</th>
                </tr>
                <tr>
                    <th>Item</th>
                    <th>Desc. of Item</th>
                    <th>New Rev</th>
                    <th>SM USA</th>
                    <th>SM EU</th>
                    <th>SM CAN</th>
                    <th>SM INTL</th>
                    <th>1</th>
                    <th>2</th>
                    <th>5</th>
                    <th>7</th>
                    <th>Stock Rev</th>
                    <th>(Y/N)</th>
                    <th>Accepted Rev(s)</th>
                    <th>UAI/S/RW/RD/RI</th>
                </tr>
            </thead>
            <tbody id="rows">
                <tr>
                    <td style="width: 350px;" id="column_affected_0">
                        <input type="text" class="form-control">
                    </td>
                    <td id="column_affected_1">
                        <textarea class="form-control input_table_affected" cols="200" rows="3"></textarea>
                    </td>
                    <td id="column_affected_2">
                        <input type="text" class="form-control input_table_affected">
                    </td>
                    <td id="column_affected_3">
                        <input class="form-check-input input_table_affected" type="checkbox">
                    </td>
                    <td id="column_affected_4">
                        <input class="form-check-input input_table_affected" type="checkbox">
                    </td>
                    <td id="column_affected_5">
                        <input class="form-check-input input_table_affected" type="checkbox">
                    </td>
                    <td id="column_affected_6">
                        <input class="form-check-input input_table_affected" type="checkbox">
                    </td>
                    <td id="column_affected_7">
                        <input type="text" class="form-control input_table_affected">
                    </td>
                    <td id="column_affected_8">
                        <input type="text" class="form-control input_table_affected">
                    </td>
                    <td id="column_affected_9">
                        <input type="text" class="form-control input_table_affected">
                    </td>
                    <td id="column_affected_10">
                        <input type="text" class="form-control input_table_affected">
                    </td>
                    <td id="column_affected_11">
                        <input type="text" class="form-control input_table_affected">
                    </td>
                    <td id="column_affected_12">
                        <input type="text" class="form-control input_table_affected">
                    </td>
                    <td id="column_affected_13">
                        <input type="text" class="form-control input_table_affected">
                    </td>
                    <td id="column_affected_14">
                        <input type="text" class="form-control input_table_affected">
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="col-md-12 my-2 py-3 px-0">
            <div class="text-center my-2 py-3" style="background-color: #e9e9e9;">
                Approval
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Clinical Affairs</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Engineering</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Int' Sales</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Materials</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Post Market</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Product Mgmt</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Production</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Purchasing</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Quality</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Regulatory - Int'l</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Regulatory - NA & EU</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Sterilization</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">Supplier Management</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="" class="form-label">UDI Personnel</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <select class="form-control" name="name" id="id">
                            <option value="0">Select</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-end my-3">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-dark me-md-2 mx-3" type="button">Cancel</button>
                    <button class="btn btn-success" type="button">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</div>
