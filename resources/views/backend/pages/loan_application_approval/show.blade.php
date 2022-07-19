
@extends('backend.layouts.master')

@section('title')
Loan Approval - Admin Panel
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
                <h4 class="page-title pull-left">Approval - Loan Application </h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><span>Approval's List</span></li>
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
                    <h4 class="header-title float-left">Approval's List</h4>
                    <!-- <p class="float-right mb-2">
                        <a class="btn btn-primary text-white" href="{{ route('admin.loan_application.create') }}">Create Loan Application</a>
                    </p> -->
                    <div class="clearfix"></div>
                    <div class="data-tables">
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                   
                                    <th width="15%">BRANCH</th>
                                    <th width="10%">MEMBER</th>
                                    <th width="10%">A/C TYPE</th>
                                    <th width="10%">APPLICATION NO.</th>
                                    <th width="10%">AMT. REQUESTED</th>
                                    <th width="10%">CALULATED APPROVAL</th>
                                    <th width="10%">APPROVED AMT.</th>
                                    <th width="10%">STATUS</th>
                                    <th width="10%">REMARKS</th>
                                   
                                    <th width="05%">Actions</th>


                                </tr>
                            </thead>
                            <tbody>
                                 
                                <tr>  
                                  <td>{{$applications->branchdetails->branch_name}}</td> 
                                  <td>{{$applications->memberdetails->first_name}}</td>
                                  <td></td> 
                                  <td>{{$applications->loanApplication_id}}</td>  
                                  <td>{{$applications->loan_requested}}</td> 
                                  <td>{{$applications->loanSchema->max_loan_amt}}</td> 
                                  <form action="{{url('admin/loan_approvalUpdate/'.$applications->loanApplication_id)}}" method="POST">
                                  @method('PUT')
                                     @csrf

                                  <td><input type="text" class="form-control" id="" name="amt_approved" value="{{$applications->amt_approved}}"></td> 
                                  <td>
                                    <select name="status" id="" class="form-control" >
                                        <option value="">Select Status</option>
                                        <option value="Approved">Approve</option>
                                        <option value="NotApproved">Not Approve</option>

                                    </select>
                                 </td> 
                                  <td><textarea id="summernote" name="remarks" class="form-control" >{{$applications->remarks}}</textarea></td> 

                                    <td> <button type="submit" class="btn btn-primary text-white">Done</button> </td>
                                </form>
                                </tr>
                                <tr>
                                    <td> No other data found for approval </td>
                                </tr>
                                
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