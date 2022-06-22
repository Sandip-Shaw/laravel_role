
@extends('backend.layouts.master')

@section('title')
Members Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection


@section('admin-content')



<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Members Management</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="">Dashboard</a></li>
                    <!-- <li><a href="">All Blogs</a></li> -->
                    <li><span>Members</span></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-6 clearfix">
            @include('backend.layouts.partials.logout')
        </div>
    </div>
</div>
<!-- page title area end -->

<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="header-title"> Create Members </h3>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="" method="POST" id="form" enctype="multipart/form-data">
                        @csrf


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label  for="associate">Associate/Advisor/Staff</label>
                                <select name="state" id="state" class="form-control" >
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                   
                               
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label  for="group">Group</label>
                                <select name="state" id="state" class="form-control" >
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                   
                               
                                </select>
                            </div>
                           
                           
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label  for="associate">Branch</label>
                                <select name="state" id="state" class="form-control" >
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                   
                               
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="emr_date">Enrollment Date</label>
                                <input type="date" class="form-control" id="emr_date" name="emr_date" >
                            </div>
                           
                           
                        </div>

                        <h4 class="header-title">Member's Information</h4>

                        <div class="form-row">
                        <div class="form-group col-md-6"> 
                                <p> Title</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" value="Mr.">
                                    <label class="form-check-label" for="authorized_signatory">Mr.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" value="Mrs.">
                                    <label class="form-check-label" for="authorized_signatory">Mrs.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" value="Ms.">
                                    <label class="form-check-label" for="authorized_signatory">Ms.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" value="Md.">
                                    <label class="form-check-label" for="authorized_signatory">Md.</label>
                                </div>
                            </div>
                             <div class="form-group col-md-6"> 
                                <p> Gender</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="authorized_signatory" value="male">
                                    <label class="form-check-label" for="authorized_signatory">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="authorized_signatory" value="female">
                                    <label class="form-check-label" for="authorized_signatory">Female</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter Middle Name">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name">
                            </div>
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="qualification">Qualification</label>
                                <input type="text" class="form-control" id="qualification" name="qualification" placeholder="Enter Qualification">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="occupation">Occupation</label>
                                <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Enter Occupation">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="monthly_income">Monthly Income</label>
                                <input type="text" class="form-control" id="monthly_income" name="monthly_income" placeholder="Enter Monthly Income">
                            </div>
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="father_name">Father Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter Father Name">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="mother_name">Mother Name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Enter Mother Name">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="husbandWife_name">Husband/Wife Name</label>
                                <input type="text" class="form-control" id="husbandWife_name" name="husbandWife_name" placeholder="Enter Husband/Wife Name">
                            </div>
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="marital_status">Marital Status</label>
                                <select name="marital_status" id="marital_status" class="form-control" >
                                    <option value="">Select Marital Status</option>
                                    <option value="Married">Married</option>
                                    <option value="Seperated">Seperated</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Unmarried">Unmarried</option>
                                    <option value="Untagged">Untagged</option>
                                  
                                </select>
                            </div>
                            
                        </div>
                     
                        <h4 class="header-title">Member's Correspondence Address</h4>     

                        <div class="form-row">
                       
                   
                            <div class="form-group col-md-4 ">
                                <label for="address">Address</label>
                                <textarea id="summernote" name="address" class="form-control" placeholder="Enter Address"></textarea> 
                               
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="ward">Ward</label>
                                <input type="text" class="form-control" id="ward" name="ward" placeholder="Enter Ward">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="area">Area</label>
                                <input type="text" class="form-control" id="area" name="area" placeholder="Enter Area">
                            </div>
                        
                        </div>

                    <div class="form-row">
                       
                       <div class="form-group col-md-4 ">
                           <label for="landmark">Landmark</label>
                           <input type="text" class="form-control" id="landmark" name="landmark" placeholder="Enter Landmark">
                       </div>
                       <div class="form-group col-md-4 ">
                           <label for="dist">City/District</label>
                           <input type="text" class="form-control" id="dist" name="dist" placeholder="Enter City/District">
                       </div>
                       <div class="form-group col-md-4">
                                <label for="state">State</label> 
                               
                                <select name="state" id="state" class="form-control" >
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                    <option value="Others">Others</option>
                                   
                                </select>
                            </div>
                   
                   </div>


                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="pincode">Pin Code</label>
                                <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country">
                            </div>

                        </div>

                        <h4 class="header-title">Member's Permanent Address</h4>  
                        <div class="form-row">
                       
                   
                            <div class="form-group col-md-4 ">
                                <label for="address">Address</label>
                                <textarea id="summernote" name="address" class="form-control" placeholder="Enter Address"></textarea> 
                               
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="dist">City/District</label>
                                <input type="text" class="form-control" id="dist" name="dist" placeholder="Enter City/District">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="state">State</label> 
                               
                                <select name="state" id="state" class="form-control" >
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="West Bengal">West Bengal</option>
                                    <option value="Others">Others</option>
                                   
                                </select>
                            </div>
                           
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label for="pincode">Pin Code</label>
                                <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country">
                            </div>

                        </div>
                        <h4 class="header-title">Member's Address GPS Location - 
                        <a href="" class="btn btn-primary pr-4 pl-4">Get Current Location </a></h4>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label  for="latitude">Location Latitude</label>
                                <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Enter Latitude ">
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="longitude">Location Longitude</label>
                                <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Enter Longitude">
                            </div>
                           
                        </div>
                        <h4 class="header-title">Member's KYC</h4>  
                   

                                           
                        
                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save </button>
                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script src="jquery.js"></script>
<script src="parsley.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>

<script>
  $('#form').parsley();
</script>
@endsection