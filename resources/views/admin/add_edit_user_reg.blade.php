@extends('admin.master')

@section('admin_content')

<div class="section__content section__content--p30">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Credit Card</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Pay Invoice</h3>
                        </div>
                        <hr>
                        <form action="{{url('/')}}/admin/user_reg_save" method="post">
                             @csrf
                            <div class="row">

                                <div class="form-group col-md-4">
                                    <label  class="control-label mb-1">Name</label>
                                    <input  name="name" type="text" class="form-control" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label  class="control-label mb-1">Type(Customer Type)</label>
                                  <select name="type" id="" class="form-control">
                                    <option value="">Select Type</option>
                                    <option value="Broker">Broker</option>
                                    <option value="Customer">Customer</option>
                                  </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label  class="control-label mb-1">Email</label>
                                    <input  name="email" type="email" class="form-control" >
                                </div>
                              

                            </div>
                            <div class="row">

                            <div class="form-group col-md-4">
                                    <label  class="control-label mb-1">Password</label>
                                    <input  name="password" type="password" class="form-control" >
                                </div>


                            <div class="form-group col-md-4">
                                    <label  class="control-label mb-1">Contact No</label>
                                    <input  name="contact_no" type="number" class="form-control" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label  class="control-label mb-1">Whatsapp number</label>
                                    <input  name="whatsapp_no" type="number" class="form-control" >
                                </div>
                               
                            </div>
                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label  class="control-label mb-1">Address</label>
                                    <input  name="address" type="text" class="form-control" >
                                </div>

                            <div class="form-group col-md-4">
                                    <label  class="control-label mb-1">Pincode</label>
                                    <input  name="pincode" type="number" class="form-control" >
                                </div>
                                <div class="form-group col-md-4">
                                    <label  class="control-label mb-1">state</label>
                                    <input  name="state" type="text" class="form-control" >
                                </div>
                              
                            </div>

                            <div class="row">
                            <div class="form-group col-md-4">
                                    <label  class="control-label mb-1">District</label>
                                    <input  name="district" type="text" class="form-control" >
                                </div>

                            <div class="form-group col-md-4">
                                    <label  class="control-label mb-1">City</label>
                                    <input  name="city" type="text" class="form-control" >
                                </div>
                            </div>


                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    Submit
                                   
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

@endsection