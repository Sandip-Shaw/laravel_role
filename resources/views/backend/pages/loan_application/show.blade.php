
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
                    <li><a href="{{ route('admin.loan_schema.index') }}"> Loan Application</a></li>
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
                 
                   

                    <div class="pull-right">
                    <a class="btn btn-default btn-xs" onclick="block_ui()" href="">
                        <i class="fa fa-pencil"></i></a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class=col-md-11>
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="table table-details">
                            <tbody>
                          
                                <tr>
                                    <td class="ft-600" style="width: 250px;">Schema Code </td>
                                    <td> 
                                   
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;"> Schema Name</td>
                                    <td> 
                                   
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Maximum Loan Amount(INR)</td>
                                    <td> 
                                   
                                    </td>
                                </tr>

                              

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Maximum Loan Limit % (if any)</td>
                                    <td> 
                                 
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Max. Tenure</td>
                                    <td> 
                               
                                    </td>
                                </tr>

                      

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Annual Interest Rate (%)</td>
                                    <td> 
                                  
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Fore Closure Charges in INR(if any)</td>
                                    <td> 
                                  
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Processing Fee (%)</td>
                                    <td> 
                                   
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Security Deposit</td>
                                    <td> 
                                  
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Active</td>
                                    <td> 
                                 
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Interest Type</td>
                                    <td> 
                              
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