
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
                    
                    <form action="{{ route('admin.loan_application.store') }}" method="POST" id="form" enctype="multipart/form-data" data-parsley-validate>
                        @csrf


                        <div class="form-row">
                           
                            <div class="form-group col-md-6">
                                <label  for="application_date">Application Date<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="date" class="form-control" id="application_date" name="application_date" required>
                               
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
                                <option value="">Select Associate</option>

                                @foreach($hrmanagements as $key=>$associate)
                                    <option value="{{$key}}">{{$associate}}</option>
                                   
                                   @endforeach
                             
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
                                    <option value="">Please select security type</option>
                                    <option value="Loan against cheque">Loan against cheque</option>
                                    <option value="Loan against gold">Loan against gold</option>
                                    <option value="Loan against silver">Loan against silver</option>
                                    <option value="Loan against deposit">Loan against deposit</option>
                                    <option value="Loan against vehical">Loan against vehical</option>
                                   
                                    <option value="Any other">Any other</option>
                             
                                </select>
                            </div>
    
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="loan_schema">Loan Scheme<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <select name="loan_schema" id="loan_scheme" class="form-control"  required>
                                <option value="">Select Loan Scheme</option>
                                @foreach($schemas as $key=>$schema)
                                    <option value="{{$schema}}">{{$key}}</option>
                                   
                                @endforeach
                              
                                </select>
                            </div>
                           <div id="schema_details">

                        </div>
    
                        </div>

                        <!-- <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sec_value">Security Value (INR)<span style="color:red; font-size: 18px;line-height:1">*</span> </label>
                                <input type="text" class="form-control" id="sec_value" name="sec_value" placeholder="Security Value (INR)" required>
                              
                            </div>
    
                        </div> -->

                        <div class="form-row">
                        <div class="form-group col-md-6">
                                <p > Tenure Type<span style="color:red; font-size: 18px;line-height:1">*</span></p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tenure_type" id="days" value="days">
                                    <label class="form-check-label" for="tenure_type">Days</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tenure_type" id="weeks" value="weeks">
                                    <label class="form-check-label" for="tenure_type">Weeks</label>
                                </div>
                                
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="tenure_type" id="months" value="months" checked>
                                    <label class="form-check-label" for="tenure_type">Months</label>
                                </div>
                           
                            </div>  
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="tenure_months" id="tenure_months_label">Tenure (Months)<span style="color:red; font-size: 18px;line-height:1">*</span> </label>
                                <input type="text" class="form-control" id="tenure_months" name="tenure_months" placeholder="Enter Tenure (Months)" data-parsley-max="12" required>
                              
                            </div>
    
                        </div>

                        <div class="form-row">
                        <div class="form-group col-md-6 ">
                                <label for="emi_collection">EMI Collection<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <select name="emi_collection" id="emi_collection" class="form-control" required>
                                    <option value="">Please Select </option>
                                    <option value="12">Monthly</option>
                                    <option value="4">Qaurterly</option>
                                    <option value="2">Half Yearly</option>
                                    <option value="1">Yearly</option>
                                   
                                </select>
                             
                            </div>
                         </div>

                         <div class="form-row" id="radio_btn">
                            
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

                       
                        
                        <button type="button" id="calculate" class="btn btn-primary  pr-4 pl-4">Calculate </button>
                        <a class="btn btn-danger" href="{{route('admin.loan_application.index')}}">Cancel </a>
                        <button type="reset" class="btn btn-warning  pr-4 pl-4">Clear </button>

                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>

<div id="application_value">
    
      
       
</div>


@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
//     $(document).ready(function() {
//          $('.select2').select2();
// //  $('#form').parsley();
//     })
$(document).ready(function() {
    let result = document.querySelector('#radio_btn');
        document.body.addEventListener('change', function (e) {
            let target = e.target;
            let message;
            const select=document.querySelector("#emi_collection");
            const emiCollects={
                days:[
                        {
                            label:"Please select",value:''
                        },
                        {
                            label:"Daily",value:1
                        }
                ],
                weeks:[
                        {
                            label:"Please select",value:''
                        },
                        {
                            label:"Weekly",value:7

                        },
                        {
                            label:"BI_weekly",value:14
                            
                        },
                        {
                            label:"4_weekly",value:28
                            
                        }
                ],
                months:[
                        {
                            label:"Please select",value:''
                        },
                        {
                            label:"Monthly",value:12

                        },
                        {
                            label:"Quaterly",value:4
                            
                        },
                        {
                            label:"Half_annualy",value:2
                            
                        },
                        {
                            label:"Annualy",value:1
                            
                        }

                ],

        
            }
                const options=[];
            switch (target.id) {
                case 'days':
                   document.querySelector('#tenure_months_label').textContent= "Tenure (Days)";
                   document.querySelector('#tenure_months').placeholder= "Enter Tenure (Days)";
                   select.innerHTML='';
                   emiCollects.days.forEach(element => {
                    const option= document.createElement("option")
                    option.setAttribute("value",element.value)
                    option.textContent= element.label
                    select.appendChild(option)
                   });
                    break;
                case 'weeks':
                    document.querySelector('#tenure_months_label').textContent= "Tenure (Weeks)";
                   document.querySelector('#tenure_months').placeholder= "Enter Tenure (Weeks)";
                   select.innerHTML='';
                   emiCollects.weeks.forEach(element => {
                    const option= document.createElement("option")
                    option.setAttribute("value",element.value)
                    option.textContent= element.label
                    select.appendChild(option)
                   });
                    break;
                case 'months':
                    document.querySelector('#tenure_months_label').textContent= "Tenure (Months)";
                    document.querySelector('#tenure_months').placeholder= "Enter Tenure (Months)";
                    select.innerHTML='';
                    emiCollects.months.forEach(element => {
                    const option= document.createElement("option")
                    option.setAttribute("value",element.value)
                    option.textContent= element.label
                    select.appendChild(option)
                   });
                    break;
            }
            result.textContent = message;

        });
    });

</script>
<script>
    $(document).ready(function(){
       
            $('#form').parsley();
        })
  
</script>

<script>
    var max_tanure=0;
    var max_loan_amt=0;
    var ann_rate_int=0;
    var sms_charges=0;
    var fuel_charge=0;
    var stationary_charges=0;
    var maintenance_charge=0;
    var collection_charge=0;
    var process_fee=0;

    $(document).ready(function(){
        $("#loan_scheme").change(function(){
            var id=$(this).find(":selected").val();

            $.ajax({
                type:"GET",
                url:"../scheme_details/"+id,
                success:function(res){        
                if(res){
                    const obj = JSON.parse(res);
                    //document.getElementById("schema_details").innerHTML = obj.schema_name;
                    //document.getElementById("schema_details").innerHTML = obj.schema_code;
                    $('#schema_details').empty();

                    max_tanure=obj.max_tanure;
                    max_loan_amt=obj.max_loan_amt;
                    ann_rate_int=obj.ann_rate_int;
                    sms_charges=obj.sms_charges;
                    fuel_charge=obj.fuel_charge;
                    stationary_charges=obj.stationary_charges;
                    maintenance_charge=obj.maintenance_charge;
                    collection_charge=obj.collection_charge;
                    process_fee=obj.process_fee;

                    trHTML = '<table><tr><td>' + 'Scheme Name' + '</td><td>' + obj.schema_name + '</td></tr> <tr><td>' + 'Scheme Code' + '</td><td>' + obj.schema_code + '</td></tr><tr><td>' +
                             'Maximum Loan Amount' + '</td><td>' + obj.max_loan_amt + '</td></tr><tr><td>' + 'Maximum Loan Limit' + '</td><td>' + obj.max_loan_lim + 
                            '</td></tr><tr><td>' + 'Maximum Tenure' + '</td><td>' + obj.max_tanure + '</td></tr><tr><td>' + 'Annual Rate Interest' + '</td><td>' + obj.ann_rate_int + 
                            '</td></tr><tr><td>' + 'Fore Closure Charge' + '</td><td>' + obj.fore_closure_charge + '</td></tr> <tr><td>' + 'Processing Fee' + '</td><td>' + obj.process_fee + 
                            '</td></tr> <tr><td>' + ' SMS Charges ' + '</td><td>' + obj.sms_charges + '</td></tr> <tr><td>' + 'Fuel Charges ' + '</td><td>' + obj.fuel_charge + 
                            '</td></tr> <tr><td>' + 'Stationary Charges ' + '</td><td>' + obj.stationary_charges + '</td></tr> <tr><td>' + 'Maintenance Charges ' + '</td><td>' + obj.maintenance_charge + 
                            '</td></tr><tr><td>' + 'Collection Charges' + '</td><td>' + obj.collection_charge + '</td></tr> </table>';
                    // obj.schema_name;
                    $('#schema_details').append(trHTML);
                    //console.log(obj.schema_name);
                }
            }
            })
        })
    })

</script>

<script>


$(document).ready(function(){
        $("#calculate").click(function(){
            var loan_requested =  $('#loan_requested').val();
           
            var amt_approved= Number(max_loan_amt) > Number(loan_requested) ? loan_requested : max_loan_amt;
  
            var interest= (ann_rate_int/100)*loan_requested;
            var emi_collection =  $('#emi_collection').val();
           
            var total_other_charges = (Number(sms_charges)+Number(fuel_charge)+Number(stationary_charges)+Number(maintenance_charge)+Number(collection_charge))*Number(emi_collection);
            var total_amount_recovered = Number(loan_requested)+Number(interest)+Number(total_other_charges);
           //console.log(total_other_charges);
            
            var emi_ammount = parseInt(total_amount_recovered/emi_collection);
            var processing_fee = (process_fee/100)*loan_requested;
          // console.log(processing_fee);
            $('#application_value').empty();
            

                trHTML = '<table><tr><td>' + 'Amount of loan requested' + '</td><td>' + loan_requested + '</td></tr><tr><td>' + 
                'Amount of Loan can be Approved' + '</td><td>' + max_loan_amt + '</td></tr> <tr><td>' + 'Loan Amount Approved (Principal Amount)' + '</td><td>' + amt_approved + 
                '</td></tr><tr><td>' + 'Interest Amount' + '</td><td>' + interest + '</td></tr> <tr><td>' + 'Other Charges' + '</td><td>' + total_other_charges + 
                '</td></tr><tr><td>' + 'Total Amount Recovered' + '</td><td>' + total_amount_recovered + '</td></tr> <tr><td>' + 'Loan Tenure' + '</td><td>' + max_tanure + 
                '</td></tr> <tr><td>' + 'EMI Amount' + '</td><td>' + emi_ammount + '</td></tr> <tr><td>' + 'No. of EMIs' + '</td><td>' + emi_collection +
                 '</td></tr> <tr><td>' + 'Processing Charges' + '</td><td>' + processing_fee + '</td></tr></table>' +
                 '<button type="submit" class="btn btn-primary">Apply for Loan</button>'+'<a href="" class="btn btn-danger">Cancel</a>';
                
                $('#application_value').append(trHTML);
          
            })
        })
  

</script>

<script>
    $(function(){
        $("#member").change(function(){
            var displaymember= $("#member option:selected").text();
            $("#member_name").val(displaymember);
        })
    })
</script>




<!-- <script type="text/javascript">
        function form_validation(){
            console.log('checked');
            var application_date = document.getElementById('application_date').value;
            var member   = document.getElementById('member').value;
            var branch = document.getElementById('branch').value;
            var loan_schema = document.getElementById('loan_schema').value;
            var sec_value = document.getElementById('sec_value').value;
            var tenure_type = document.getElementById('tenure_type').checked;
            var tenure_months = document.getElementById('tenure_months').value;
            var emi_collection = document.getElementById('emi_collection').value;
            var credit_period = document.getElementById('credit_period').value;
            var loan_requested = document.getElementById('loan_requested').value;
            var error=0;

            if(application_date == ""){ 
            document.getElementById('error_app_date').innerHTML ="Please fill the Application Date";
                  error=1;
                  console.log('checked');
            }
             else {
            document.getElementById('error_app_date').innerHTML ="";
            }
// for member
            if(member == ""){ 
            document.getElementById('error_member').innerHTML ="Please fill the Member";
                  error=1;
                 
            }
             else {
            document.getElementById('error_member').innerHTML ="";
            }
       
// for branch
            if(branch == ""){ 
            document.getElementById('error_branch').innerHTML ="Please fill the Branch";
                  error=1;
                 
            }
             else {
            document.getElementById('error_branch').innerHTML ="";
            }

            // for loan_schema
            if(loan_schema == ""){ 
            document.getElementById('error_loan_schema').innerHTML ="Please fill the Loan Schemes";
                  error=1;
                 
            }
             else {
            document.getElementById('error_loan_schema').innerHTML ="";
            }

             // for sec_value
             if(sec_value == ""){ 
            document.getElementById('error_sec_value').innerHTML ="Please fill the Security Value";
                  error=1;
                 
            }
             else {
            document.getElementById('error_sec_value').innerHTML ="";
            }

             // for tenure_type
             if(tenure_type == ""){ 
            document.getElementById('error_tenure_type').innerHTML ="Please fill the Tenure type";
                  error=1;
                 
            }
             else {
            document.getElementById('error_tenure_type').innerHTML ="";
            }

             // for tenure_months
             if(tenure_months == ""){ 
            document.getElementById('error_tenure_months').innerHTML ="Please fill the Tenure months";
                  error=1;
                 
            }
             else {
            document.getElementById('error_tenure_months').innerHTML ="";
            }

          // for emi_collection
          if(emi_collection == ""){ 
            document.getElementById('error_emi_collection').innerHTML ="Please fill the EMI collection";
                  error=1;
                 
            }
             else {
            document.getElementById('error_emi_collection').innerHTML ="";
            }
            
             // for credit_period
          if(credit_period == ""){ 
            document.getElementById('error_credit_period').innerHTML ="Please fill the Credit period";
                  error=1;
                 
            }
             else {
            document.getElementById('error_credit_period').innerHTML ="";
            }

              // for loan_requested
          if(loan_requested == ""){ 
            document.getElementById('error_loan_requested').innerHTML ="Please fill the requested loan";
                  error=1;
                 
            }
             else {
            document.getElementById('error_loan_requested').innerHTML ="";
            }


            if(error==1){

                return false;

                } else{
                return true;
            } 

        }
</script> -->
@endsection