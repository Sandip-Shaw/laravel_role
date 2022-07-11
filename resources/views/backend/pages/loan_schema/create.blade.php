
@extends('backend.layouts.master')

@section('title')
Loan Schemes - Admin Panel
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
                <h4 class="page-title pull-left">New Deposit Loan Schemes</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="">Dashboard</a></li>
                    <!-- <li><a href="">All Blogs</a></li> -->
                    <li><span>New Schemes</span></li>
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
                    <h4 class="header-title"> Create Schemes </h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.loan_schema.store') }}" method="POST" id="form" data-parsley-validate>
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label  for="schema_name">Scheme Name<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="text" class="form-control" id="schema_name" name="schema_name" placeholder="Enter Scheme Name" required>
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="Schema_code">Scheme Code<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="text" class="form-control" id="schema_code" name="schema_code" placeholder="Enter Scheme Code" required>
                            </div>
                           
                        </div>

                        <div class="form-row">
                            
                            <div class="form-group col-md-6 ">
                                <label for="max_loan_amt">Maximum Loan Amount(INR)<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="text" class="form-control" id="max_loan_amt" name="max_loan_amt" placeholder="Enter Maximum Loan Amount(INR)" required>
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="max_loan_lim">Maximum Loan Limit % (if any)</label>
                                <input type="text" class="form-control" id="max_loan_lim" name="max_loan_lim" placeholder="Enter Maximum Loan Limit % ">
                            </div>
                            
                        </div>
                     

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="max_tanure">Max. Tenure<span style="color:red; font-size: 18px;line-height:1">*</span></label> 
                               
                                <select name="max_tanure" id="max_tanure" class="form-control" required>
                                    <option value="1 Months">1 Month</option>
                                    <option value="3 Months">3 Months</option>
                                    <option value="6 Months">6 Months</option>
                                    <option value="9 Months">9 Months</option>
                                    <option value="12 Months">12 Months</option>
                                    <option value="18 Months">18 Months</option>
                                    <option value="2 Years">2 Years</option>
                                    <option value="3 Years">3 Years</option>
                                  
                                   
                                </select>
                            </div>
                           
                            <div class="form-group col-md-6">
                                <label for="ann_rate_int">Annual Interest Rate (%)<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="text" class="form-control" id="ann_rate_int" name="ann_rate_int" placeholder="Enter Annual Interest Rate (%)" required>
                            </div>

                        </div>


                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="fore_closure_charge">Fore Closure Charges in INR(if any)</label>
                                <input type="text" class="form-control" id="fore_closure_charge" name="fore_closure_charge" placeholder="Enter Fore Closure Charges in INR">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="process_fee">Processing Fee (%)</label>
                                <input type="text" class="form-control" id="process_fee" name="process_fee" placeholder="Enter Processing Fee">
                            </div>
                           
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sec_deposit">Security Deposit<span style="color:red; font-size: 18px;line-height:1">*</span></label> 
                               
                                <select name="sec_deposit" id="sec_deposit" class="form-control" required>
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
                                <p> Active<span style="color:red; font-size: 18px;line-height:1">*</span></p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="active" value="yes">
                                    <label class="form-check-label" for="active">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="active" value="no">
                                    <label class="form-check-label" for="active">No</label>
                                </div>
                            </div>  
                            <div class="form-group col-md-6">
                                <p> Interest Type<span style="color:red; font-size: 18px;line-height:1">*</span></p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="int_type" value="Reducing EMI">
                                    <label class="form-check-label" for="int_type">Reducing EMI</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="int_type" value="Flat EMI">
                                    <label class="form-check-label" for="int_type">Flat EMI</label>
                                </div>
                            </div>   

                        </div>

                        <hr>
                        <h4 class="header-title"  style="text-align:center;">Charges Per EMI</h4>    

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sms_charges">Sms Charges %(if any)</label>
                                <input type="text" class="form-control" id="sms_charges" name="sms_charges" placeholder="Enter Sms Charges">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fuel_charge">Fuel Charges %(if any)</label>
                                <input type="text" class="form-control" id="fuel_charge" name="fuel_charge" placeholder="Enter Fuel Charge">
                            </div>
                           
                           
                        </div> 
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="stationary_charges">Stationary Charges %(if any)</label>
                                <input type="text" class="form-control" id="stationary_charges" name="stationary_charges" placeholder="Enter Stationary Charges">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="maintenance_charge">Maintenance Charges %(if any)</label>
                                <input type="text" class="form-control" id="maintenance_charge" name="maintenance_charge" placeholder="Enter Maintenance Charges">
                            </div>
                           
                           
                        </div> 
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="collection_charge">Collection Charges %(if any)</label>
                                <input type="text" class="form-control" id="collection_charge" name="collection_charge" placeholder="Enter Collection Charges">
                            </div>
   
                        </div> 
                        
                        <div style="text-align:center;">
                        <button type="submit" class="btn btn-primary  pr-4 pl-4">Save </button>
                        <a class="btn btn-danger" href="{{route('admin.loan_schema.index')}}">Cancel </a>
                        <button type="reset" class="btn btn-warning  pr-4 pl-4">Reset </button>
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



<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>

<script>
  $('#form').parsley();
</script>
@endsection
