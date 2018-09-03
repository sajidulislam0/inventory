
<div class="site-buttons d-inline-block">
    <button onclick="goBack()" class="btn green font-size mb-3"><i class="fa fa-arrow-alt-circle-left"></i> Go Back</button>
</div>



<form method="post" action="#" enctype="form-data/multipart">    
    <input required id="amount" type="number" min="0" class="form-control" name="txtamount" placeholder="Enter Payment Here..." 
           onchange="document.getElementById('cash').min = this.value;"/>
    <input required id="cash" type="number" min="document.getElementById('amount').value" class="form-control" name="txtcash" placeholder="Enter Cash Here..." />
    <input type="submit" class="btn btn-primary pull-right" name="btnenroll" value="Done" />
</form>


<div class="row">
    <div class="col-md-12">
        <h3 class="mb-5">Add Products</h3>
        <form method="POST" action="#" id="product_entry">
            <div class="input-form">
                <div class="div-border">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="exampleInputname">Product Name:</label>
                            <input type="text" id="name" name="product_title" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputname">Supplier Name</label>
                            <select name="status" id="status" class="custom-select">
                                <option value="1" selected="">Uniliver</option>
                                <option value="0">ALL</option>
                                <option value="0">Others</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputname">Total Item</label>
                            <select name="status" id="status" class="custom-select">
                                <option selected="" disabled="">Product Quantity...</option>
                                <?php $i = 1;
                                while ($i <= 25) {
                                    echo ' <option value="' . $i . '">' . $i . '</option>';
                                    $i++;
                                } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputname">Stock management</label>
                            <select name="status" id="status" class="custom-select">
                                <option value="1">In stock</option>
                                <option value="0">Out of Stock</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="buy_price">Buy Price / Pics</label>
                            <input type="number" id="buy_price" name="buy_price"  class="form-control" placeholder="15 Taka" min="0">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="sell_price">Sell Price / Pics</label>
                            <input type="number" id="sell_price" name="sell_price"  class="form-control" placeholder="17 Taka">
                        </div>
                    </div>
                    <div class="form-group has-feedback sub-btn-wdt  pull-left">
                        <button name="submit_supplier" type="submit" id="submit_supplier" class="btn btn-success btn-sm wdt-bg">Save</button>
                        <button  type="reset" id="submit_supplier" class="btn btn-danger btn-sm wdt-bg float-right">Reset</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
<div class="row mt-5">
    <div class="col-md-12">
        <div class="float-right form-group input-form">
            <input type="text" id="myInput" class="form-control" onkeyup="mySearch()" placeholder="Search for names.." title="Type in a name">
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="myTable">
                <thead>
                    <tr>
                        <th>#SL</th>
                        <th>Supplier Name</th>
                        <th>Category Name</th>
                        <th>Sub categories</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ondblclick="#">
                        <td>4 <input type="hidden" name="editId" id="" value="4"></td>
                        <td>Uniliver Company</td>
                        <td>unilivercompany@gmail.com</td>
                        <td>0174354856</td>
                        <td>Mirpur 10 </td>
                        <td align="center"><a href="#" class="btn btn-primary minimum-btn btn-xs"> <i class="fas fa-edit"></i></a></td>
                    </tr>
                </tbody>
            </table>
            <div id="demo"></div>
        </div>
        <div>
        </div>
    </div>
</div>

