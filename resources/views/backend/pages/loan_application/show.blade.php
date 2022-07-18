
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
                <h4 class="page-title pull-left">Loan Application</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.loan_application.index') }}"> Loan Application</a></li>
                    <li><span>  </span></li>
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
        
        <div class="col-md-6">
            <div class="box">
                <div class="box-body">
                   
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class=col-md-11>
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="table table-details">
                            <tbody>
                          
                                <tr>
                                    <td class="ft-600" style="width: 250px;">Member </td>
                                    <td> 
                                    {{ $applications->memberdetails->first_name }} {{ $applications->memberdetails->middle_name }}{{ $applications->memberdetails->last_name }}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;"> Application No.</td>
                                    <td> 
                                    {{$applications->loanApplication_id}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Application Date</td>
                                    <td> 
                                    {{$applications->application_date}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Other Loan Scheme</td>
                                    <td> 
                                    {{ $applications->loanSchema->schema_name }}
                                    </td>
                                </tr>

                      

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Amount Approved</td>
                                    <td> 
                                    {{$applications->amt_approved}}
                                    </td>
                                </tr>

                               
                                <tr>
                                    <td class="ft-600" style="width: 250px;">Status</td>
                                    <td> 
                                    {{$applications->status}}
                                    </td>
                                </tr>

                            </tbody>
                            
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->
        <div class="col-md-6">
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class=col-md-12>
                            <table class="table">
                            <thead class="thead-light">
                                <tr>
                                
                                    <th scope="col">Status</th>
                                    <th scope="col">Remark</th>
                                    <th scope="col">Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                
                                    <td>{{$applications->status}}</td>
                                    <td></td>
                                    <td>{{$applications->updated_at}}</td>
                                </tr>
                                
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
          
          <div id="accordion">
              <div class="card" style="width:50%">
              <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#collapseOne">
                  Other Loan Scheme Info
                  </a>
              </div>
              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                  <div class="card-body">
                  <table id="dataTable" class="table table-details">
                  <tbody>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Scheme Name</td>
                          <td> 
                          {{ $applications->loanSchema->schema_name }}
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Scheme Code</td>
                          <td> 
                          {{ $applications->loanSchema->schema_code }}
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Max. Loan Amount</td>
                          <td> 
                          {{ $applications->loanSchema->max_loan_amt }}
                         
                          </td>
                      </tr>
                      
                      <tr>
                          <td class="ft-200" style="width: 250px;">Interest Rate</td>
                          <td> 
                         
                          {{ $applications->loanSchema->ann_rate_int }}%
                          </td>
                      </tr>
                     
                      <tr>
                          <td class="ft-200" style="width: 250px;">Fore Closure Charges</td>
                          <td> 
                          {{ $applications->loanSchema->fore_closure_charge }}
                       
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Processing Fee</td>
                          <td> 
                          {{ $applications->loanSchema->process_fee }}%
                      
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Sms Charges per EMI</td>
                          <td> 
                         
                          INR {{ $applications->loanSchema->sms_charges }}
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Fuel Charges per EMI</td>
                          <td> 
                         
                          INR{{ $applications->loanSchema->fuel_charge }}
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Stationary Charges per EMI</td>
                          <td> 
                          INR {{ $applications->loanSchema->stationary_charges }}
                      
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Maintenance Charges per EMI</td>
                          <td> 
                          INR {{ $applications->loanSchema->maintenance_charge }}
                      
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Collection Charges per EMI</td>
                          <td> 
                          INR  {{ $applications->loanSchema->collection_charge }}
                      
                          </td>
                      </tr>
                      
                     
                     
                  </tbody>
                  </table>
                  </div>
              </div>
              </div>
            </div>
      
            <div class="card" style="width:50%">
              <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                  Other Loan Application Info
                  </a>
              </div>
              <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                  <div class="card-body">
                  <table id="dataTable" class="table table-details">
                  <tbody>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Branch</td>
                          <td> 
                          {{$applications->branchdetails->branch_name}}
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Amount Requested</td>
                          <td> 
                          {{$applications->loan_requested}}
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Max. Amount can be Approved</td>
                          <td> 
                       
                          {{ $applications->loanSchema->max_loan_amt }}
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Loan Amount</td>
                          <td> 
                          {{$applications->amt_approved}}
                   
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Amount Approved</td>
                          <td> 
                          {{$applications->amt_approved}}
                       
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Interest Amount</td>
                          <td> 
                          {{$applications->interest_amount}}
                       
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Other Charges</td>
                          <td> 
                          {{$applications->other_charges}}
                       
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Annual Interest Rate</td>
                          <td> 
                        
                          {{ $applications->loanSchema->ann_rate_int }}%
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Interest Type</td>
                          <td> 
                          {{ $applications->loanSchema->int_type }}
                      
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Credit Period</td>
                          <td> 
                     
                          {{$applications->credit_period}}Days
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Security Type</td>
                          <td> 
                          {{$applications->sec_type}}
                      
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Total Amount to Recover</td>
                          <td> 
                          {{$applications->total_amount_coll}}
                     
                      
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">EMI Payout</td>
                          <td> 
                     
                      
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">EMI Amount</td>
                          <td> 
                          {{$applications->emi_amount_total}}
                     
                      
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">No. of EMIs</td>
                          <td> 
                          {{$applications->no_of_emis}}
                     
                      
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Processing Fee</td>
                          <td> 
                          {{$applications->processing_charges}}
                     
                      
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Tenure of Loan</td>
                          <td> 
                     
                          {{$applications->tenure_months}}
                      
                          </td>
                      </tr>
                     
                  </tbody>
                  </table>
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
     
     <script>
         /*================================
        datatable active
        ==================================*/
        if ($('#dataTable').length) {
            $('#dataTable').DataTable({
                responsive: true
            });
        }

     </script>
@endsection