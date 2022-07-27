
@extends('backend.layouts.master')

@section('title')
Edit Loan Schemes - Admin Panel
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
                <h4 class="page-title pull-left">Edit Deposit Loan Scheme</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="">Dashboard</a></li>
                    <!-- <li><a href="">All Blogs</a></li> -->
                    <li><span>Edit Scheme</span></li>
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
                    <h4 class="header-title"> Edit Schemes </h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.loan_schema.update',$schemas->loanSchema_id) }}" method="POST" id="form">
                    @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label  for="schema_name">Scheme Name</label>
                                <input type="text" class="form-control" id="schema_name" value="{{$schemas->schema_name}}" name="schema_name" placeholder="Enter Scheme Name">
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="Schema_code">Scheme Code</label>
                                <input type="text" class="form-control" id="schema_code" name="schema_code" value="{{$schemas->schema_code}}" placeholder="Enter Scheme Code">
                            </div>
                           
                        </div>

                        <div class="form-row">
                            
                            <div class="form-group col-md-6 ">
                                <label for="max_loan_amt">Maximum Loan Amount(INR)</label>
                                <input type="text" class="form-control" id="max_loan_amt" name="max_loan_amt" value="{{$schemas->max_loan_amt}}" placeholder="Enter Maximum Loan Amount(INR)">
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="max_loan_lim">Maximum Loan Limit % (if any)</label>
                                <input type="text" class="form-control" id="max_loan_lim" name="max_loan_lim" value="{{$schemas->max_loan_lim}}" placeholder="Enter Maximum Loan Limit % ">
                            </div>
                            
                        </div>
                     

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="max_tanure">Max. Tenure</label> 
                               
                                <select name="max_tanure" id="max_tanure" class="form-control" >
                                    <option value="1 Months"{{$schemas->max_tanure=='1 Months'?'selected':''}}>1 Month</option>
                                    <option value="3 Months"{{$schemas->max_tanure=='3 Months'?'selected':''}}>3 Months</option>
                                    <option value="6 Months"{{$schemas->max_tanure=='6 Months'?'selected':''}}>6 Months</option>
                                    <option value="9 Months"{{$schemas->max_tanure=='9 Months'?'selected':''}}>9 Months</option>
                                    <option value="12 Months"{{$schemas->max_tanure=='12 Months'?'selected':''}}>12 Months</option>
                                    <option value="18 Months"{{$schemas->max_tanure=='18 Months'?'selected':''}}>18 Months</option>
                                    <option value="2 Years"{{$schemas->max_tanure=='2 Years'?'selected':''}}>2 Years</option>
                                    <option value="3 Years"{{$schemas->max_tanure=='3 Years'?'selected':''}}>3 Years</option>
                                  
                                   
                                </select>
                            </div>
                           
                            <div class="form-group col-md-6">
                                <label for="ann_rate_int">Annual Interest Rate (%)</label>
                                <input type="text" class="form-control" id="ann_rate_int" name="ann_rate_int" value="{{$schemas->ann_rate_int}}" placeholder="Enter Annual Interest Rate (%)">
                            </div>

                        </div>


                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="fore_closure_charge">Fore Closure Charges in INR(if any)</label>
                                <input type="text" class="form-control" id="fore_closure_charge" name="fore_closure_charge" value="{{$schemas->fore_closure_charge}}" placeholder="Enter Fore Closure Charges in INR">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="process_fee">Processing Fee (%)</label>
                                <input type="text" class="form-control" id="process_fee" name="process_fee" value="{{$schemas->process_fee}}" placeholder="Enter Processing Fee">
                            </div>
                           
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sec_deposit">Security Deposit</label> 
                               
                                <select name="sec_deposit" id="sec_deposit" class="form-control" >
                                    <option value="">Please Select</option>
                                    <option value="FD of Self"{{$schemas->sec_deposit=='FD of Self'?'selected':''}}>FD of Self</option>
                                    <option value="RD of Self"{{$schemas->sec_deposit=='RD of Self'?'selected':''}}>RD of Self</option>
                                    <option value="DD of Self"{{$schemas->sec_deposit=='DD of Self'?'selected':''}}>DD of Self</option>
                                    <option value="FD of Bank"{{$schemas->sec_deposit=='FD of Bank'?'selected':''}}>FD of Bank</option>
                                    <option value="RD of Bank"{{$schemas->sec_deposit=='RD of Bank'?'selected':''}}>RD of Bank</option>
                                    <option value="LIC"{{$schemas->sec_deposit=='LIC'?'selected':''}}>LIC</option>
                                    <option value="NSC"{{$schemas->sec_deposit=='NSC'?'selected':''}}>NSC</option>
                                    <option value="Others Govt. Security"{{$schemas->sec_deposit=='Others Govt. Security'?'selected':''}}>Others Govt. Security</option>
                                  
                                   
                                </select>
                            </div>
                            

                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <p> Active</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="active" value="yes"  <?php if($schemas->active=="yes") {echo "checked";} ?>>
                                    <label class="form-check-label" for="active">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="active" value="no"  <?php if($schemas->active=="no") {echo "checked";} ?>>
                                    <label class="form-check-label" for="active">No</label>
                                </div>
                            </div>  
                            <div class="form-group col-md-6">
                                <p> Interest Type</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="int_type" value="Reducing EMI"  <?php if($schemas->int_type=="Reducing EMI") {echo "checked";} ?>>
                                    <label class="form-check-label" for="int_type">Reducing EMI</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="int_type" value="Flat EMI"  <?php if($schemas->int_type=="Flat EMI") {echo "checked";} ?>>
                                    <label class="form-check-label" for="int_type">Flat EMI</label>
                                </div>
                            </div>   

                        </div>

                        <hr>
                        <h4 class="header-title"  style="text-align:center;">Charges Per EMI</h4>    

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sms_charges">Sms Charges (if any)</label>
                                <input type="text" class="form-control" id="sms_charges" name="sms_charges" value="{{$schemas->sms_charges}}" placeholder="Enter Sms Charges">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fuel_charge">Fuel Charges (if any)</label>
                                <input type="text" class="form-control" id="fuel_charge" name="fuel_charge" value="{{$schemas->fuel_charge}}" placeholder="Enter Fuel Charge">
                            </div>
                           
                           
                        </div> 
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="stationary_charges">Stationary Charges (if any)</label>
                                <input type="text" class="form-control" id="stationary_charges" name="stationary_charges" value="{{$schemas->stationary_charges}}" placeholder="Enter Stationary Charges">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="maintenance_charge">Maintenance Charges (if any)</label>
                                <input type="text" class="form-control" id="maintenance_charge" name="maintenance_charge" value="{{$schemas->maintenance_charge}}" placeholder="Enter Maintenance Charges">
                            </div>
                           
                           
                        </div> 
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="collection_charge">Collection Charges (if any)</label>
                                <input type="text" class="form-control" id="collection_charge" name="collection_charge" value="{{$schemas->collection_charge}}" placeholder="Enter Collection Charges">
                            </div>
   
                        </div> 
                        
                        <div style="text-align:center;">                 
                        
                        <button type="submit" class="btn btn-primary  pr-4 pl-4">Update </button>
                        <a class="btn btn-danger" href="{{route('admin.loan_schema.index')}}">Cancel </a>
                        <!-- <button type="reset" class="btn btn-warning  pr-4 pl-4">Reset </button> -->
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
