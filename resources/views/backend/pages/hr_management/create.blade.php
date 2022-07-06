
@extends('backend.layouts.master')

@section('title')
HR Management Create - Admin Panel
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
                <h4 class="page-title pull-left">Hr Management</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="">Dashboard</a></li>
                    <!-- <li><a href="">All Blogs</a></li> -->
                    <li><span>Hr Management</span></li>
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
                    <h4 class="header-title"> Create Employees </h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.hr_management.store') }}" method="POST" id="form" enctype="multipart/form-data" data-parsley-validate>
                        @csrf

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="branch">Branch <span style="color:red; font-size: 18px;line-height:1">*</span></label> 
                               
                                <select name="branch" id="branch" class="form-control" required>
                                    <option value="">Choose Branch</option>
                                    @foreach($branches as $key=>$branch)
                                    <option value="{{$branch}}">{{$key}}</option>
                                   
                                   @endforeach
                                   
                                   
                                </select>
                            </div>
                           
                            <div class="form-group col-md-6">
                                <label for="dateofjoining">Joining Date <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="date" class="form-control" id="dateofjoining" name="dateofjoining" required>
                            </div>

                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label  for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Employee Designation">
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="dob">Date Of Birth <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="date" class="form-control" id="dob" name="dob" required>
                            </div>
                           
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Employee Name <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Employee Name" required>
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="emp_code">Employee Code <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="text" class="form-control" id="emp_code" name="emp_code" placeholder="Enter Employee Code" required>
                            </div>
                            
                        </div>
                     
                        <div class="form-row">
                            
                           
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mobile">Mobile Number <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile no." data-parsley-maxlength="10" required>
                            </div>
                           
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="address">Address <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <textarea id="summernote" name="address" class="form-control" placeholder="Enter Address" required></textarea> 
                               
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="fathername">Father's Name</label>
                                <input type="text" class="form-control" id="fathername" name="fathername" placeholder="Enter Father's Name">
                            </div>
                        
                        </div>

                        <div class="form-row">
                            
                            <div class="form-group col-md-6 ">
                                <label for="pan_no">PAN Number</label>
                                <input type="text" class="form-control" id="pan_no" name="pan_no" placeholder="Enter PAN No." >
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="adhar_no">Adhar Number</label>
                                <input type="text" class="form-control" id="adhar_no" name="adhar_no" placeholder="Enter Adhar No." data-parsley-maxlength="12">
                            </div>
                        </div>

                        <div class="form-row">
                            
                            <div class="form-group col-md-6 ">
                                <label for="blood_group">Blood Group</label>
                                <input type="text" class="form-control" id="blood_group" name="blood_group" placeholder="Enter Blood Group">
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="monthlysalary">Monthly Salary</label>
                                <input type="text" class="form-control" id="monthlysalary" name="monthlysalary" placeholder="Enter Monthly Salary">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="col-sm-3 control-label">Employee Image</label>
                         
                                <input type="file" name="image" class="GalleryImage" id="image" required />  

                             </div>  
                            
                        </div>
                   

                                           
                        <div style="text-align:center;">
                        <button type="submit"  class="btn btn-primary  pr-4 pl-4">Save </button>
                        <a class="btn btn-danger" href="{{route('admin.hr_management.index')}}">Cancel </a>
                        <button type="reset" class="btn btn-warning  pr-4 pl-4">Clear </button>
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