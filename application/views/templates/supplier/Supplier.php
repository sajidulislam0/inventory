
<div class="site-buttons d-inline-block float-right">
    <button onclick="goBack()" class="btn green font-size mb-3"><i class="fa fa-arrow-alt-circle-left"></i> Go Back</button>
</div>
<h3 class="mb-5">Add Supplier</h3>

<div class="row">
    <div class="col-md-4">
        <div class="input-form">
            <div class="div-border">
                <div class="form-group">
                    <label for="exampleInputname">Person Name:</label>
                    <input type="text" id="name" name="name" required="required" class="form-control" placeholder="Name">

                </div>


                <div class="form-group">
                    <label for="exampleInputemail">Company Name</label>
                    <input type="text" id="phone" name="company_name" class="form-control" placeholder="Phone">
                </div>

                <div class="form-group">
                    <label for="exampleInputemail">Phone </label>
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone">

                </div>
                <div class="form-group">
                    <label for="exampleInputemail">Address </label>
                    <textarea id="address" name="address" value="" class="form-control" placeholder="Address here.."></textarea>

                </div>
               

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group has-feedback sub-btn-wdt  pull-left">
                            <button  type="reset" id="submit_supplier" class="btn btn-danger btn-sm wdt-bg ">Reset</button>
                            <button name="submit_supplier" type="submit" id="submit_supplier" class="btn btn-success btn-sm wdt-bg float-right">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-md-8">
        <div class="float-right form-group input-form">
            <input type="text" id="myInput" class="form-control" onkeyup="mySearch()" placeholder="Search for names.." title="Type in a name">
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>#SL</th>
                        <th>Name</th>
                        <th>C Name</th>
                        <th>Phone No</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>



                    <tr ondblclick="#">
                        <td>4 <input type="hidden" name="editId" id="" value="4"></td>
                        <td>Uniliver Company</td>
                        <td>Sajidul Islam</td>
                        <td>0174354856</td>
                        <td>Mirpur 10 </td>

                        <td align="center">
                            <a href="#" class="btn btn-primary minimum-btn btn-xs"> <i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-danger minimum-btn btn-xs" onclick="confirm('Are you sure to do this?')"> <i class="far fa-trash-alt"></i></a>


                        </td>



                    </tr>


                </tbody>
            </table>
            <div id="not_found_error"></div>
        </div>
        <div>
        </div>
    </div>

