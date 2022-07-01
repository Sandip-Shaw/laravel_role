
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
                    
                    <form action="{{ route('admin.loan_application.store') }}" method="POST" id="form" enctype="multipart/form-data">
                        @csrf


                        <div class="form-row">
                           
                            <div class="form-group col-md-6">
                                <label  for="application_date">Application Date<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="date" class="form-control" id="application_date" name="application_date" >
                           
                            </div>
                           
                           
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label  for="member">Member<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <select name="member" id="member" class="form-control" required>
                                    <option value="">Select Member</option>
                                    @foreach($members as $key=>$member)
                                    <option value="{{$member}}">{{$key}}</option>
                                   
                                   @endforeach
                             
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="member_name">Member Name</label>
                                <input type="text" class="form-control" id="member_name" name="member_name" disabled>
                            </div>
                            
                           
                        </div>


                        <div class="form-row">
                        <div class="form-group col-md-6">
                                <label  for="branch">Branch<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <select name="branch" id="branch" class="form-control" required>
                                    <option value="">Select Branch</option>
                                    @foreach($branches as $key=>$branch)
                                    <option value="{{$branch}}">{{$key}}</option>
                                   
                                   @endforeach
                             
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="associate">Associate/Advisor/Staff</label>
                                <select name="associate" id="associate" class="form-control" >
                                   
                             
                                </select>
                            </div>
 
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <label for="coapplicant_member1">Co-Applicant Member(if any)</label>
                                <select name="coapplicant_member1" id="coapplicant_member1" class="form-control" >
                                    <option value="">Select Co-Applicant Member</option>
                                    @foreach($members as $key=>$member)
                                    <option value="{{$member}}">{{$key}}</option>
                                   
                                   @endforeach
                             
                                </select>
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="guarantor_member1">Guarantor Member 1(if any)</label>
                                <select name="guarantor_member1" id="guarantor_member1" class="form-control" >
                                    <option value="">Select Guarantor Member 1</option>
                                    @foreach($members as $key=>$member)
                                    <option value="{{$member}}">{{$key}}</option>
                                   
                                   @endforeach
                             
                                </select>
                            </div>
    
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="coapplicant_member2">2nd Co-Applicant Member(if any)</label>
                                <select name="coapplicant_member2" id="coapplicant_member2" class="form-control" >
                                    <option value="">Select 2nd Co-Applicant Member</option>
                                    @foreach($members as $key=>$member)
                                    <option value="{{$member}}">{{$key}}</option>
                                   
                                @endforeach
                             
                                </select>
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="guarantor_member2">Guarantor Member 2(if any)</label>
                                <select name="guarantor_member2" id="guarantor_member2" class="form-control" >
                                <option value="">Select Guarantor Member 2</option>
                                @foreach($members as $key=>$member)
                                    <option value="{{$member}}">{{$key}}</option>
                                   
                                @endforeach
                             
                                </select>
                            </div>
       
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sec_type">Security Type</label>
                                <select name="sec_type" id="sec_type" class="form-control" >
                                    <option value="">Please Select</option>
                                    <option value="FD of Self">FD of Self</option>
                                    <option value="RD of Self">RD of Self</option>
                                    <option value="DD of Self">DD of Self</option>
                                    <option value="FD of Bank">FD of Bank</option>
                                    <option value="RD of Bank">RD of Bank</option>
                                    <option value="LIC">LIC</option>
                                    <option value="NSC">NSC</option>
                                    <option value="others">Others Govt. Security</option>
                             
                                </select>
                            </div>
    
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="loan_schema">Loan Scheme<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <select name="loan_schema" id="loan_schema" class="form-control" required>
                                <option value="">Select Loan Scheme</option>
                                @foreach($schemas as $key=>$schema)
                                    <option value="{{$schema}}">{{$key}}</option>
                                   
                                @endforeach
                             
                                </select>
                            </div>
    
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sec_value">Security Value (INR)<span style="color:red; font-size: 18px;line-height:1">*</span> </label>
                                <input type="text" class="form-control" id="sec_value" name="sec_value" placeholder="Security Value (INR)" required>
                            </div>
    
                        </div>

                        <div class="form-row">
                        <div class="form-group col-md-6">
                                <p> Tenure Type<span style="color:red; font-size: 18px;line-height:1">*</span></p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tenure_type" value="weeks">
                                    <label class="form-check-label" for="tenure_type">Weeks</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tenure_type" value="days">
                                    <label class="form-check-label" for="tenure_type">Days</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tenure_type" value="months">
                                    <label class="form-check-label" for="tenure_type">Months</label>
                                </div>
                            </div>  
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tenure_months">Tenure (MONTHS)<span style="color:red; font-size: 18px;line-height:1">*</span> </label>
                                <input type="text" class="form-control" id="tenure_months" name="tenure_months" placeholder="Tenure (MONTHS)" required>
                            </div>
    
                        </div>

                        <div class="form-row">
                        <div class="form-group col-md-6 ">
                                <label for="emi_collection">EMI Collection<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <select name="emi_collection" id="emi_collection" class="form-control" required>
                                    <option value="">Please Select </option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Qaurterly">Qaurterly</option>
                                    <option value="Half Yearly">Half Yearly</option>
                                    <option value="Yearly">Yearly</option>
                                   
                                </select>
                            </div>
                         </div>

                         <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="credit_period">Credit Period (EMI Grace Period) (Days) <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="text" class="form-control" id="credit_period" name="credit_period" placeholder="Enter Credit Period (EMI Grace Period) (Days)" required>
                            </div>
    
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="loan_requested">Amount of Loan Requested <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="text" class="form-control" id="loan_requested" name="loan_requested" placeholder="Amount of Loan Requested" required>
                            </div>
    
                        </div>

                       
                        
                        <button type="submit" class="btn btn-primary  pr-4 pl-4">Calculate </button>
                        <a class="btn btn-danger" href="{{route('admin.loan_application.index')}}">Cancel </a>
                        <button type="reset" class="btn btn-warning  pr-4 pl-4">Clear </button>

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