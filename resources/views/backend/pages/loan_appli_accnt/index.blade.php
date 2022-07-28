
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
                <h4 class="page-title pull-left">Business Loan Accounts</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><span>Business Loan Accounts</span></li>
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
                                   
                                    <th width="10%">ASSOCIATE</th>
                                    <th width="10%">LOAN NO</th>
                                    <th width="10%">MEMBER NO</th>
                                    <th width="10%">MEMBER NAME</th>
                                    <th width="10%">BRANCH </th>
                                    <th width="10%">SCHEME </th>
                                    <th width="10%">EMI COLLECTION </th>
                                    <th width="10%">OPEN DATE </th>
                                    <th width="10%">LOAN AMT. </th>

                                    <th width="10%">Status </th>
                                 
                                    <th width="10%">Actions</th>


                                </tr>
                            </thead>
                            <tbody>
                             
                                <tr>
                                  <td></td> 
                                  <td></td> 
                                  <td></td>
                                  <td></td> 
                                  <td></td>
                                
                                  <td></td>
                                  <td></td> 
                                  <td></td> 
                                  <td></td> 

                                  <td></td> 

                                  <td>                                    
                                            <a class="btn btn-success text-white" href="">show</a>
                                            <!-- <a class="btn btn-primary text-white" href="">Cancel Loan</a>  -->
                                  </td>                                
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