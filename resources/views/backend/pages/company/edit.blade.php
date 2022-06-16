
@extends('backend.layouts.master')

@section('title')
Profile Edit - Admin Panel
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
                <h4 class="page-title pull-left">Company Profile</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="">Dashboard</a></li>
                    <!-- <li><a href="">All Blogs</a></li> -->
                    <li><span>Company Profile Edit</span></li>
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
                    <h4 class="header-title">Company's Profile </h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{route('admin.company.update', $profile->id)}}" method="POST" id="form">
                         @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Company Website</label>
                                <input type="text" class="form-control" id="company_website" name="company_website" placeholder="Enter Your Website" value="{{ $profile->company_website }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Company name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter Company Name" value="{{ $profile->company_name }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Short Name</label>
                                <input type="text" class="form-control" id="short_name" name="short_name" placeholder="Enter Short Name" value="{{ $profile->short_name }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Company Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ $profile->email }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Mobile Number</label>
                                <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter Mobile No." value="{{ $profile->mobile_no }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Landline Number</label>
                                <input type="text" class="form-control" id="landline_no" name="landline_no" placeholder="Enter Landline no." value="{{ $profile->landline_no }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12 col-sm-12">
                                <label for="name">About Company</label>
                                <textarea id="summernote" name="about_company" class="form-control" placeholder="Enter about company">{{ $profile->about_company }}</textarea> 
                                <!-- <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email"> -->
                            </div>
                        </div>

                        <h4 class="header-title">Company's Details </h4>

                        <div class="form-row">
                            <div class="form-group col-md-9 col-sm-12">
                                <label for="name">Address</label>
                                <textarea id="summernote" name="address" class="form-control" placeholder="Enter Address">{{ $profile->address }}</textarea> 
                                <!-- <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address"> -->
                            </div>
                            <div class="form-group col-md-3 col-sm-12">
                                <label for="name">City</label>
                                <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" value="{{ $profile->city }}">
                            </div>
                            
                           
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">State</label>
                                <input type="text" class="form-control" id="state" name="state" placeholder="Enter State" value="{{ $profile->state }}">
                            </div>
                        <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Pin code</label>
                                <input type="text" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode" value="{{ $profile->pincode}}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Country</label>
                                <input type="text" class="form-control" id="contry" name="contry" placeholder="Enter Country" value="{{ $profile->contry }}">
                            </div>
                        </div>

                        <h4 class="header-title">Business's Details </h4>

                        <div class="form-row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="category">Category</label> 
                                <!-- <input type="text" class="form-control" id="state" name="state" placeholder="Enter State"> -->
                                <select name="category" id="category" class="form-control">
                                    <option value="Limited By Shares" {{$profile->category=='Limited By Shares'?'selected':''}}>Limited By Shares</option>
                                    <option value="Limited By Guarentee"  {{$profile->category=='Limited By Guarentee'?'selected':''}}>Limited By Guarentee</option>
                                    <option value="Unlimited Company"  {{$profile->category=='Unlimited Company'?'selected':''}}>Unlimited Company</option>
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="category">Company Class</label> 
                                <!-- <input type="text" class="form-control" id="state" name="state" placeholder="Enter State"> -->
                                <select name="company_class" id="company_class" class="form-control">
                                   
                                    <option value="Public Limited Company" {{$profile->company_class=='Public Limited Company'?'selected':''}}>Public Limited Company</option>
                                    <option value="Association of Persons" {{$profile->company_class=='Association of Persons'?'selected':''}}>Association of Persons</option>
                                    <option value="Partnership Firm" {{$profile->company_class=='Partnership Firm'?'selected':''}}>Partnership Firm</option>
                              
                                   

                                </select>
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">CIN Number</label>
                                <input type="text" class="form-control" id="cin_no" name="cin_no" placeholder="Enter CIN NO." value="{{ $profile->cin_no }}" >
                            </div>

                        </div>


                        <div class="form-row">
                            
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">PAN Number</label>
                                <input type="text" class="form-control" id="pan_no" name="pan_no" placeholder="Enter PAN No." value="{{ $profile->pan_no }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">TAN Number</label>
                                <input type="text" class="form-control" id="tan_no" name="tan_no" placeholder="Enter TAN No." value="{{ $profile->tan_no }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">GST Number</label>
                                <input type="text" class="form-control" id="gst_no" name="gst_no" placeholder="Enter GST No." value="{{ $profile->gst_no }}">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Incorporation Date</label>
                                <input type="date" class="form-control" id="incorporation_date" name="incorporation_date" value="{{ $profile->incorporation_date }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Incorporation State</label>
                                <input type="text" class="form-control" id="incorporation_state" name="incorporation_state" placeholder="Enter Incorporation State" value="{{ $profile->incorporation_state }}">
                            </div>
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Incorporation Country</label>
                                <input type="text" class="form-control" id="incorporation_country" name="incorporation_country" placeholder="Enter Incorporation Country" value="{{ $profile->incorporation_country }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="name">Authorized Capital</label>
                                <input type="number" class="form-control" id="authorized_capital" name="authorized_capital" value="{{ $profile->authorized_capital }}">
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="name">Paid-up Capital</label>
                                <input type="number" class="form-control" id="paid_ip_capital" name="paid_ip_capital" value="{{ $profile->paid_ip_capital }}">
                            </div>
                           
                        </div>
                       
                        <div class="col-sm-offset-4 col-sm-8"> 
                            <button type="submit" class="btn btn-primary  pr-4 pl-4">Update </button>
                            <a class="btn btn-danger" href="{{route('admin.company.index')}}">Cancel </a>
                        </div>
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