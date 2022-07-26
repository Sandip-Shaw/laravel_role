
@extends('backend.layouts.master')

@section('title')
Loan Application - Admin Panel
@endsection

@section('styles')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection


@section('admin-content')

<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Business Loan Disbursement</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.loan_disbursements.index') }}">Business Loan Disbursementn</a></li>
                    <li><span>  {{$applications->loanApplication_id }} </span></li>
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
        
        <div class="col-md-7">
            <div class="box">
                <div class="box-body">
                   
                    <div class="clearfix"></div>
                        <div class="row">
                            <div class=col-md-12>
                             @include('backend.layouts.partials.messages')
                             <h4>Application No. - {{$applications->loanApplication_id }} </h4>
                             <hr>
                             <form action="" method="post"  >
                             <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="" >Loan Amount (A)</label>
                            
                                <div class="col-sm-6">
                                <input type="text" name="" id="principal_amount" value="{{$applications->amt_approved}}" class="form-control" readonly>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="" >Processing Fee(B)</label>
                            
                                <div class="col-sm-6">
                                <input type="text" name="" id="" value="{{$applications->processing_charges}}" class="form-control" readonly>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="" >Final Amount To Disburse (D = A - B - C - I) (if any)</label>
                            
                                <div class="col-sm-6">
                                <input type="text" name="" id="" value="{{($applications->amt_approved)-($applications->processing_charges)}}" class="form-control" readonly>

                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="" >Loan Disbursement Date <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                            
                                <div class="col-sm-6">
                                <input type="date" name="" id="" value="{{Carbon\Carbon::now()->format('Y-m-d')}}" class="form-control" >

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="" >First EMI Date <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                            
                                <div class="col-sm-6">
                                <input type="date" name="" id="" value="" class="form-control" >

                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                
                                <div class="col-sm-8 col-sm-offset-4 checkbox">
                                    <label for="">
                                        <input type="checkbox" name="" id="" value="" class="form-control" >Collect Processing Fee Separately
                                    </label><br>
                                    <span class="help-block">(Check this if you want to collect it separately)</span>
                                </div>
                            </div>
                            <div class="form-group row">
                
                                <div class="col-sm-8 col-sm-offset-4 checkbox">
                                    <label for="">
                                        <input type="checkbox" name="" id="" value="" class="form-control" >Collect Interest as EMI & Principal after tenure
                                    </label><br>
                                    <span class="help-block">(Check this if you want to collect interest as EMIs. EMI calculation will be as FLAT interest rate)</span>
                                </div>
                            </div>
                            <div class="form-group row">
                
                                <div class="col-sm-8 col-sm-offset-4 checkbox">
                                    <label for="">
                                        <input type="checkbox" name="" id="" value="" class="form-control" > Collect Interest as EMIs First & then after Principle as EMIs
                                    </label><br>
                                    <span class="help-block">(Check this if you want to first collect interest as EMIs and then after Principal as EMIs.)</span>
                                </div>
                            </div>
                            <hr>
                            <h4>Disbursement Amount :</h4>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="" >Net Amount to Release <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                            
                                <div class="col-sm-6">
                                <input type="text" name="" id="" value="{{($applications->amt_approved)-($applications->processing_charges)}}" class="form-control" readonly>

                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="" >Pay Mode <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                            
                                <div class="form-group col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="disburse_transaction" id="Cash" value="Cash">
                                    <label class="form-check-label" for="disburse_transaction">Cash</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="disburse_transaction" id="Cheque" value="Cheque">
                                    <label class="form-check-label" for="disburse_transaction">Cheque</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="disburse_transaction" id="online_tr" value="online_tr" >
                                    <label class="form-check-label" for="disburse_transaction">Online Tr. </label>
                                </div>
                                
                                </div>
                            </div>

                            <div class="form-row" id="radio_btn">
                            
                            </div>

                            <div id="application_details">

                            </div>

                            <div style="text-align:center;">
                                <button type="submit"  class="btn btn-primary  pr-4 pl-4">Disburse Loan </button>
                                <a class="btn btn-danger" href="">Cancel </a>
                               
                            </div>

                            </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <!-- data table end -->
        <div class="col-md-5">
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class=col-md-12>
                            <div class="container">
          
                                <div id="accordion">
                                    <div class="card" style="width:100%; color:blue;">
                                        <div class="card-header text-white" style="background-color: SandyBrown;">
                                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                            Other Loan Account Info
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                            <table id="dataTable" class="table table-details">
                                                <tbody>
                                                    <tr>
                                                        <td class="ft-200" style="width: 250px;">Application Date</td>
                                                        <td> 
                                                        {{$applications->application_date}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ft-200" style="width: 250px;">Application No.</td>
                                                        <td> 
                                                        {{$applications->loanApplication_id }}
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ft-200" style="width: 250px;">Member</td>
                                                        <td> 
                                                        {{$applications->memberdetails->first_name }}
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ft-200" style="width: 250px;">Scheme </td>
                                                        <td> 
                                                        {{$applications->loanSchema->schema_name }}
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ft-200" style="width: 250px;">Amount Requested</td>
                                                        <td> 
                                                        {{$applications->loan_requested }}
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ft-200" style="width: 250px;">Amount Approved</td>
                                                        <td> 
                                                        {{$applications->amt_approved }}
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ft-200" style="width: 250px;">EMI Payout</td>
                                                        <td> 
                                                        {{$applications->tenure_type }}
                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ft-200" style="width: 250px;">Interest Type</td>
                                                        <td> 
                                                        {{$applications->loanSchema->int_type }}

                                                        
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ft-200" style="width: 250px;">Status</td>
                                                        <td> 
                                                        {{$applications->status }}
                                                        
                                                        </td>
                                                    </tr>


                                                </tbody>
                                             </table>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                <div class="card" style="width:100%">
                    <div class="card-header" style="background-color: aqua;">
                        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                        EMI Info
                        </a>
                    </div>
                    <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                            <table id="dataTable" class="table table-details">
                                <thead class="bg-light text-capitalize">
                                    <tr>
                                    <th>Emi No.</th>
                                    <th>PRINCIPAL</th>
                                    <th>INTEREST</th>
                                    <th>OTHER CHRG.</th>
                                    <th>EMI</th>
                                    <th>EMI DATE</th>
                                    <th>DUE DATE</th>
                                    <th>BAL. PRINCIPAL</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <div id="total_interest">

                                    </div>
                                    <td></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        
      
                
        </div>
        
    </div>
</div>
@endsection


@section('scripts')
     <!-- Start datatable js -->
     <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
     <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
     <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script>
         /*================================
        datatable active
        ==================================*/
        // if ($('#dataTable').length) {
        //     $('#dataTable').DataTable({
        //         responsive: true
        //     });
        // }

     </script>
<script>
$(document).ready(function() {

let result = document.querySelector('#radio_btn');
    document.body.addEventListener('change', function (e) {
        let target = e.target;
        tenure=target.id;
    
        //console.log(target.id);

        let message;
       
        //const options=[];
        switch (target.id) {
            case 'Cash':
        //console.log(result);
              
               result.innerHTML='';
              
                break;
            case 'Cheque':
                result.innerHTML=` <div class="col-md-7">
                                    <div class="box">
                                    <div class="box-body">
                                    <div class="row">
                                    <div class=col-md-12>
                                    <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="" >Bank Name <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                            
                                    <div class="col-sm-8">
                                        <input type="text" name="" id="" value="" class="form-control" >

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="" >Cheque No. <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                            
                                    <div class="col-sm-8">
                                        <input type="text" name="" id="" value="" class="form-control" >

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="" >Cheque Date <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                            
                                    <div class="col-sm-8">
                                        <input type="date" name="" id="" value="" class="form-control" >

                                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                                `;
      //  console.log(result.innerHTML);
               
                break;
            case 'online_tr':
               
                result.innerHTML=`<div class="col-md-7">
                                    <div class="box">
                                    <div class="box-body">
                                    <div class="row">
                                    <div class=col-md-12>
                                    <div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="" >Transfer Date<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                            
                                    <div class="col-sm-8">
                                        <input type="date" name="" id="" value="" class="form-control" >

                                    </div>
                                </div><div class="form-group row">
                                    <label class="col-sm-4 col-form-label" for="" >UTR/ Transaction No. <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                            
                                    <div class="col-sm-8">
                                        <input type="text" name="" id="" value="" class="form-control" >

                                    </div>
                                </div>
                                <div class="form-group row">
                                <label class="col-sm-4 col-form-label" for="" >Transfer Mode  <span style="color:red; font-size: 18px;line-height:1">*</span></label>
                            
                                <div class="form-group col-sm-6">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="" id="" value="IMPS">
                                    <label class="form-check-label" for="">IMPS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="" id="" value="VPA">
                                    <label class="form-check-label" for="">VPA</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="" id="" value=" NEFT/RTGS" >
                                    <label class="form-check-label" for=""> NEFT/RTGS  </label>
                                </div>
                                
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>
                            `;
                
                break;
        }
      

    });
});

</script>
<script>
    var tenure_months=0;

      $(document).ready(function(){
    
         
          var id = {!! json_encode($applications->loanApplication_id) !!}; 
            $.ajax({
                type:"GET",
                url:"../application_details/"+id,
                success:function(res){  
                       
                if(res){
                  
                     const obj = JSON.parse(res);
                    // console.log(obj);   
                    document.getElementById("total_interest").innerHTML = "TOTAL INTEREST RECOVERABLE -"+ obj.interest_amount + "<br>"+"TOTAL OTHER CHARGES RECOVERABLE - "+ obj.other_charges;

                    tenure_months=obj.tenure_months;
                    interest_amount=obj.interest_amount;
                    other_charges=obj.other_charges;
                    var principal =  $('#principal_amount').val();
                    var principal_per_emi = Number(principal)/Number(tenure_months);
                    var interest_per_emi= Number(interest_amount)/Number(tenure_months);
                    var other_charges_per_emi =Number(other_charges)/Number(tenure_months); 
                    var per_emi=Number(principal_per_emi)+Number(interest_per_emi)+Number(other_charges_per_emi); 
                   console.log(principal_per_emi);   
                   console.log(interest_amount);   
                   console.log(interest_per_emi);   
                   console.log(other_charges_per_emi);   
                   console.log(per_emi);   


                //    trHTML=

                }
            }
            })

           
           // var no_emi_collection = $('#no_emi_collection').val();
         
                // console.log(principal);
                // console.log(principal_per_emi);
        })
  
</script>
<script>
    $(document).ready(function(){
        
        //console.log(tenure_months);
           

    })
</script>
@endsection