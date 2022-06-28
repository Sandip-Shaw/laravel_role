
@extends('backend.layouts.master')

@section('title')
Loan Application Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }

    .switch {
	position: relative;
	display: block;
	vertical-align: top;
	width: 100px;
	height: 30px;
	padding: 3px;
	margin: 0 10px 10px 0;
	background: linear-gradient(to bottom, #eeeeee, #FFFFFF 25px);
	background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF 25px);
	border-radius: 18px;
	box-shadow: inset 0 -1px white, inset 0 1px 1px rgba(0, 0, 0, 0.05);
	cursor: pointer;
	box-sizing:content-box;
}
.switch-input {
	position: absolute;
	top: 0;
	left: 0;
	opacity: 0;
	box-sizing:content-box;
}
.switch-label {
	position: relative;
	display: block;
	height: inherit;
	font-size: 10px;
	text-transform: uppercase;
	background: #eceeef;
	border-radius: inherit;
	box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
	box-sizing:content-box;
}
.switch-label:before, .switch-label:after {
	position: absolute;
	top: 50%;
	margin-top: -.5em;
	line-height: 1;
	-webkit-transition: inherit;
	-moz-transition: inherit;
	-o-transition: inherit;
	transition: inherit;
	box-sizing:content-box;
}
.switch-label:before {
	content: attr(data-off);
	right: 11px;
	color: #aaaaaa;
	text-shadow: 0 1px rgba(255, 255, 255, 0.5);
}
.switch-label:after {
	content: attr(data-on);
	left: 11px;
	color: #FFFFFF;
	text-shadow: 0 1px rgba(0, 0, 0, 0.2);
	opacity: 0;
}
.switch-input:checked ~ .switch-label {
	background: #E1B42B;
	box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
}
.switch-input:checked ~ .switch-label:before {
	opacity: 0;
}
.switch-input:checked ~ .switch-label:after {
	opacity: 1;
}
.switch-handle {
	position: absolute;
	top: 4px;
	left: 4px;
	width: 28px;
	height: 28px;
	background: linear-gradient(to bottom, #FFFFFF 40%, #f0f0f0);
	background-image: -webkit-linear-gradient(top, #FFFFFF 40%, #f0f0f0);
	border-radius: 100%;
	box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
}
.switch-handle:before {
	content: "";
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -6px 0 0 -6px;
	width: 12px;
	height: 12px;
	background: linear-gradient(to bottom, #eeeeee, #FFFFFF);
	background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF);
	border-radius: 6px;
	box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);
}
.switch-input:checked ~ .switch-handle {
	left: 74px;
	box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
}
 
/* Transition
========================== */
.switch-label, .switch-handle {
	transition: All 0.3s ease;
	-webkit-transition: All 0.3s ease;
	-moz-transition: All 0.3s ease;
	-o-transition: All 0.3s ease;
}
</style>
@endsection


@section('admin-content')



<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">New Deposit Loan Application</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="">Dashboard</a></li>
                    <!-- <li><a href="">All Blogs</a></li> -->
                    <li><span>New Applicant</span></li>
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
                    <h3 class="header-title"> Create New Applicants </h3>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="" method="POST" id="form" enctype="multipart/form-data">
                        @csrf


                        <div class="form-row">
                           
                            <div class="form-group col-md-6">
                                <label  for="application_date">Application Date</label>
                                <input type="date" class="form-control" id="application_date" name="application_date" >
                           
                            </div>
                           
                           
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label  for="branch">Branch</label>
                                <select name="branch" id="branch" class="form-control" required>
                                   
                             
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label  for="member">Member</label>
                                <select name="member" id="member" class="form-control" required>
                                   
                             
                                </select>
                            </div>
                           
                        </div>

                        <h4 class="header-title">Member's Information</h4>

                        <div class="form-row">
                        <div class="form-group col-md-6"> 
                                <p> Title</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" value="Mr.">
                                    <label class="form-check-label" for="title">Mr.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" value="Mrs.">
                                    <label class="form-check-label" for="title">Mrs.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" value="Ms.">
                                    <label class="form-check-label" for="title">Ms.</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="title" value="Md.">
                                    <label class="form-check-label" for="title">Md.</label>
                                </div>
                            </div>
                             <div class="form-group col-md-6"> 
                                <p> Gender</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="male">
                                    <label class="form-check-label" for="gender">Male</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="female">
                                    <label class="form-check-label" for="gender">Female</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" required>
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
                                <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Enter Father Name">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="mother_name">Mother Name</label>
                                <input type="text" class="form-control" id="mother_name" name="mother_name" placeholder="Enter Mother Name">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="husbandWife_name">Husband/Wife Name</label>
                                <input type="text" class="form-control" id="husbandWife_name" name="husbandWife_name" placeholder="Enter Husband/Wife Name">
                            </div>
                            
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="mobile">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile Number" required>
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

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
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
                               
                                <select name="state" id="state" class="form-control" required>
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
                                <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" required>
                            </div>

                        </div>

                        <h4 class="header-title">Member's Permanent Address</h4>  
                        <div class="form-row">
                       
                   
                            <div class="form-group col-md-4 ">
                                <label for="address">Address</label>
                                <textarea id="summernote" name="p_address" class="form-control" placeholder="Enter Address"></textarea> 
                               
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="dist">City/District</label>
                                <input type="text" class="form-control" id="dist" name="p_dist" placeholder="Enter City/District">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="state">State</label> 
                               
                                <select name="p_state" id="state" class="form-control" >
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
                                <input type="text" class="form-control" id="pincode" name="p_pincode" placeholder="Enter Pincode">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="p_country" placeholder="Enter Country">
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
                        <h4 class="header-title">Member's KYC </h4>
                        
                        <div class="form-row">
                            <div class="form-group col-md-4 ">
                                <label for="adhar_no">Aadhar Number</label>
                                <input type="text" class="form-control" id="adhar_no" name="adhar_no" placeholder="Enter Aadhar Number">
                            </div>
                            
                            <div class="form-group col-md-4 ">
                                <label for="voter_no">Voter Id No.</label>
                                <input type="text" class="form-control" id="voter_no" name="voter_no" placeholder="Enter Voter Id No.">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="pan_no">Pan No.</label>
                                <input type="text" class="form-control" id="pan_no" name="pan_no" placeholder="Enter Pan No.">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4 ">
                                <label for="ration_no">Ration Card Number</label>
                                <input type="text" class="form-control" id="ration_no" name="ration_no" placeholder="Enter Ration Card Number">
                            </div>
                            
                            <div class="form-group col-md-4 ">
                                <label for="meter_no">Meter No.</label>
                                <input type="text" class="form-control" id="meter_no" name="meter_no" placeholder="Enter Meter No.">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="cl_no">CL No.</label>
                                <input type="text" class="form-control" id="cl_no" name="cl_no" placeholder="Enter CL No.">
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4 ">
                                <label for="cl_relation">CL Relation</label>
                                <input type="text" class="form-control" id="cl_relation" name="cl_relation" placeholder="Enter CL Relation">
                            </div>
                            
                            <div class="form-group col-md-4 ">
                                <label for="dl_no">DL No.</label>
                                <input type="text" class="form-control" id="dl_no" name="dl_no" placeholder="Enter DL No.">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="passport_no">Passport No.</label>
                                <input type="text" class="form-control" id="passport_no" name="passport_no" placeholder="Enter Password No.">
                            </div>

                        </div>
                        
                        <h4 class="header-title">Member's KYC Document</h4>  
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="col-sm-3 control-label">Photo</label>
                         
                                <input type="file" name="image_photo" class="GalleryImage" id="image_photo" required />  

                             </div>
                             <div class="form-group col-md-6">
                                <label class="col-sm-3 control-label">Id Proof</label>
                         
                                <input type="file" name="image_idproof" class="GalleryImage" id="image_idproof" required />  

                             </div>  
                             
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="col-sm-3 control-label">Address Proof</label>
                         
                                <input type="file" name="image_address" class="GalleryImage" id="image_address" required />  

                             </div>
                             <div class="form-group col-md-6">
                                <label class="col-sm-3 control-label">Pan Card</label>
                         
                                <input type="file" name="image_pan" class="GalleryImage" id="image_pan" required />  

                             </div>  
                             
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="col-sm-3 control-label">Signature</label>
                         
                                <input type="file" name="image_signature" class="GalleryImage" id="image_signature" required />  

                             </div>
                             
                        </div>

                        <h4 class="header-title">Nominee Information</h4>
                        
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label  for="nominee_name">Nominee Name</label>
                                <input type="text" class="form-control" id="nominee_name" name="nominee_name" placeholder="Enter Nominee Name">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="nominee_relation">Nominee Relation</label>
                                <input type="text" class="form-control" id="nominee_relation" name="nominee_relation" placeholder="Enter Nominee Relation">
                            </div>
                            <div class="form-group col-md-4">
                                <label  for="nominee_mobile">Nominee Mobile No.</label>
                                <input type="text" class="form-control" id="nominee_mobile" name="nominee_mobile" placeholder="Enter Nominee Mobile Number">
                            </div>
                           
                        </div>

                        <div class="form-row">
                            
                            <div class="form-group col-md-4 ">
                                <label for="nominee_dob">Nominee DOB</label>
                                <input type="date" class="form-control" id="nominee_dob" name="nominee_dob">
                            </div>
                            <div class="form-group col-md-4">
                                <label  for="nominee_adhar">Nominee Aadhar No.</label>
                                <input type="text" class="form-control" id="nominee_adhar" name="nominee_adhar" placeholder="Enter Nominee Aadhar No.">
                            </div>
                            <div class="form-group col-md-4">
                                <label  for="nominee_voter">Nominee Voter ID No.</label>
                                <input type="text" class="form-control" id="nominee_voter" name="nominee_voter" placeholder="Enter Nominee Voter ID No.">
                            </div>
                           
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label  for="nominee_pan">Nominee Pan No.</label>
                                <input type="text" class="form-control" id="nominee_pan" name="nominee_pan" placeholder="Enter Nominee Pan No.">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="nominee_ration">Nominee Ration Card No.</label>
                                <input type="text" class="form-control" id="nominee_ration" name="nominee_ration" placeholder="Enter Nominee Ration Card No.">
                            </div>
                            <div class="form-group col-md-4 ">
                                <label for="nominee_address">Nominee Address</label>
                                <textarea id="summernote" name="nominee_address" class="form-control" placeholder="Enter Nominee Address"></textarea> 
                               
                            </div>
                           
                        </div>

                        <h4 class="header-title">Extra Settings</h4>
                        <label  for="sms">SMS</label>
                        <div class="form-group row">
                      
                            <label class="switch">
                                <input class="switch-input" type="checkbox" />
                                <span class="switch-label" data-on="On" data-off="Off"></span> 
                                <span class="switch-handle"></span> 
                            </label>  
                        </div>

                       
                        
                        <button type="submit" class="btn btn-primary  pr-4 pl-4">Add Member </button>
                        <a class="btn btn-danger" href="{{route('admin.members_management.index')}}">Cancel </a>
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
        $('#form').parsley();
    })
</script>

<script>
 
</script>
@endsection