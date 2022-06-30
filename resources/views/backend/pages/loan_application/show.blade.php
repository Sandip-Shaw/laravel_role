
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
        
        <div class="col-md-8">
            <div class="box">
                <div class="box-body">
                    <!-- <h4 class="header-title float-left">Blogs List</h4> -->
                    <!-- <p class="float-right mb-2">
                        <a class="btn btn-primary text-white" href="{{ route('admin.company.create') }}">Create New Profile</a>
                    </p> -->
                 
                   

                    <!-- <div class="pull-right"> -->
                    <!-- <a class="btn btn-default btn-xs" onclick="block_ui()" href="">
                        <i class="fa fa-pencil"></i></a>
                    </div> -->
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
                                   
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Application Date</td>
                                    <td> 
                                    {{$applications->application_date}}
                                    </td>
                                </tr>

                              

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Loan Account No.</td>
                                    <td> 
                                 
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Deposit Loan Scheme</td>
                                    <td> 
                                    {{ $applications->loanSchema->schema_name }}
                                    </td>
                                </tr>

                      

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Amount Approved</td>
                                    <td> 
                                  
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Security Value</td>
                                    <td> 
                                  {{$applications->sec_value}}
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

        <div class="container">
          
          <div id="accordion">
              <div class="card">
              <div class="card-header">
                  <a class="card-link" data-toggle="collapse" href="#collapseOne">
               Deposit Loan Scheme Info
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
                          <td class="ft-200" style="width: 250px;">Max. Loan Limit</td>
                          <td> 
                          {{ $applications->loanSchema->max_loan_lim }}
                   
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Interest Rate</td>
                          <td> 
                          {{ $applications->loanSchema->ann_rate_int }}
                       
                          </td>
                      </tr>
                      <tr>
                          <td class="ft-200" style="width: 250px;">Interest Type</td>
                          <td> 
                          {{ $applications->loanSchema->int_type }}
                       
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
                          {{ $applications->loanSchema->process_fee }}
                      
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