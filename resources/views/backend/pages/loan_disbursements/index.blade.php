
@extends('backend.layouts.master')

@section('title')
Loan Disbursements - Admin Panel
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
                <h4 class="page-title pull-left">Business Loan Disbursements</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><span>Loan Disbursements</span></li>
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
                    <!-- <h4 class="header-title float-left">Employee's List</h4> -->
                    <!-- <p class="float-right mb-2">
                        <a class="btn btn-primary text-white" href="{{ route('admin.hr_management.create') }}">Create Employee</a>
                    </p> -->
                    <div class="clearfix"></div>
                    <div class="data-tables">
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                   
                                    <th width="15%">Application No.</th>
                                    <th width="10%">Member No.</th>
                                    <th width="10%">Member Name</th>
                                    <th width="20%">Branch</th>
                                    <th width="15%">Scheme </th>
                                    <th width="10%">Approved Amt. </th>
                                    <th width="10%">Status </th>
                                 
                                    <th width="10%">Actions</th>


                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($applications as $application)
                                <tr>
                                  <td>{{$application->loanApplication_id }}</td> 
                                  <td></td> 
                                  <td>{{$application->memberdetails->first_name}}</td>
                                  <td>{{$application->branchdetails->branch_name}}</td> 
                                  <td>{{$application->loanSchema->schema_name}}</td>
                                
                                  <td>{{$application->amt_approved}}</td> 
                                  <td>{{$application->status}}</td> 

                                  <td>                                    
                                            <a class="btn btn-success text-white" href="{{ route('admin.loan_disbursements.show',$application->loanApplication_id) }}">Disburse</a>
                                            <a class="btn btn-primary text-white" href="">Cancel Loan</a> 
                                  </td>                                
                                </tr>
                              @endforeach 
                            </tbody>
  
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
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