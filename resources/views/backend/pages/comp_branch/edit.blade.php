
@extends('backend.layouts.master')

@section('title')
Branch Edit - Admin Panel
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
                <h4 class="page-title pull-left">Company Branch</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="">Dashboard</a></li>
                    <!-- <li><a href="">All Blogs</a></li> -->
                    <li><span>Company Branch Edit</span></li>
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
                    <h4 class="header-title"> Edit Company's Branch </h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{route('admin.comp_branch.update', $branch->id)}}" method="POST" id="form">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label  for="branch_name">Branch Name</label>
                                <input type="text" class="form-control" id="branch_name" name="branch_name"  value="{{ $branch->branch_name }}" >
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="branch_code">Branch Code</label>
                                <input type="text" class="form-control" id="branch_code" name="branch_code" value="{{ $branch->branch_code }}" >
                            </div>
                           
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="open_date">Opening Date</label>
                                <input type="date" class="form-control" id="open_date" name="open_date" value="{{ $branch->open_date }}">
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="ifsc_code">IFSC Code</label>
                                <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" value="{{ $branch->ifsc_code }}">
                            </div>
                            
                        </div>
                     

                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="address">Address</label>
                                <textarea id="summernote" name="address" class="form-control" >{{ $branch->address }}</textarea> 
                               
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="name">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="{{ $branch->city }}">
                            </div>
                        
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="state">State</label> 
                               
                                <select name="state" id="state" class="form-control" >
                                    <option value="Andhra Pradesh" {{$branch->state=='Andhra Pradesh'?'selected':''}}>Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh" {{$branch->state=='Arunachal Pradesh'?'selected':''}} >Arunachal Pradesh</option>
                                    <option value="Assam" {{$branch->state=='Assam'?'selected':''}} >Assam</option>
                                    <option value="Bihar"{{$branch->state=='Bihar'?'selected':''}} >Bihar</option>
                                    <option value="Chhattisgarh" {{$branch->state=='Chhattisgarh'?'selected':''}} >Chhattisgarh</option>
                                    <option value="Goa" {{$branch->state=='Goa'?'selected':''}} >Goa</option>
                                    <option value="Gujarat" {{$branch->state=='Gujarat'?'selected':''}} >Gujarat</option>
                                    <option value="Haryana" {{$branch->state=='Haryana'?'selected':''}} >Haryana</option>
                                    <option value="Himachal Pradesh" {{$branch->state=='Himachal Pradesh'?'selected':''}} >Himachal Pradesh</option>
                                    <option value="Jharkhand" {{$branch->state=='Jharkhand'?'selected':''}} >Jharkhand</option>
                                    <option value="Karnataka" {{$branch->state=='Karnataka'?'selected':''}} >Karnataka</option>
                                    <option value="Kerala" {{$branch->state=='Kerala'?'selected':''}} >Kerala</option>
                                    <option value="Madhya Pradesh" {{$branch->state=='Madhya Pradesh'?'selected':''}} >Madhya Pradesh</option>
                                    <option value="Maharashtra" {{$branch->state=='Maharashtra'?'selected':''}} >Maharashtra</option>
                                    <option value="Manipur" {{$branch->state=='Manipur'?'selected':''}} >Manipur</option>
                                    <option value="Meghalaya" {{$branch->state=='Meghalaya'?'selected':''}}>Meghalaya</option>
                                    <option value="Mizoram" {{$branch->state=='Mizoram'?'selected':''}} >Mizoram</option>
                                    <option value="Nagaland" {{$branch->state=='Nagaland'?'selected':''}} >Nagaland</option>
                                    <option value="Odisha" {{$branch->state=='Odisha'?'selected':''}} >Odisha</option>
                                    <option value="Punjab" {{$branch->state=='Punjab'?'selected':''}} >Punjab</option>
                                    <option value="Rajasthan" {{$branch->state=='Rajasthan'?'selected':''}} >Rajasthan</option>
                                    <option value="Sikkim" {{$branch->state=='Sikkim'?'selected':''}} >Sikkim</option>
                                    <option value="Tamil Nadu" {{$branch->state=='Tamil Nadu'?'selected':''}} >Tamil Nadu</option>
                                    <option value="Telangana" {{$branch->state=='Telangana'?'selected':''}} >Telangana</option>
                                    <option value="Tripura" {{$branch->state=='Tripura'?'selected':''}} >Tripura</option>
                                    <option value="Uttar Pradesh" {{$branch->state=='Uttar Pradesh'?'selected':''}} >Uttar Pradesh</option>
                                    <option value="Uttarakhand" {{$branch->state=='Uttarakhand'?'selected':''}} >Uttarakhand</option>
                                    <option value="West Bengal" {{$branch->state=='West Bengal'?'selected':''}} >West Bengal</option>
                                    <option value="Others" {{$branch->state=='Others'?'selected':''}} >Others</option>
                                   
                                </select>
                            </div>
                           
                            <div class="form-group col-md-6">
                                <label for="pincode">Pin Code</label>
                                <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode" value="{{ $branch->pincode }}">
                            </div>

                        </div>


                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="country">Country</label>
                                <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" value="{{ $branch->country }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="members">Total Member</label>
                                <input type="text" class="form-control" id="members" name="members" placeholder="Enter Total Members" value="{{ $branch->members }}">
                            </div>
                           
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ $branch->email }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contact_no">Contact Number</label>
                                <input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Enter Contact Number" value="{{ $branch->contact_no }}">
                            </div>
                           
                        </div>

                                           
                        
                        <button type="submit" class="btn btn-primary  pr-4 pl-4">Update </button>
                        <a class="btn btn-danger" href="{{route('admin.comp_branch.index')}}">Cancel </a>
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