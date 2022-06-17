
@extends('backend.layouts.master')

@section('title')
Branches - Admin Panel
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
                <h4 class="page-title pull-left">Company Branch</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><span>Company Branch</span></li>
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
                
                   

                   
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class=col-md-11>
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="table table-details">
                            <tbody>
                      @foreach($company as $branch)
                                <tr>
                                    <td class="ft-600" style="width: 250px;"> Branch Name</td>
                                    <td> 
                                 {{$branch->branch_name}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;"> Branch Code</td>
                                    <td> 
                                 
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Opening Date</td>
                                    <td> 
                                 
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">IFSC Code</td>
                                    <td> 
                                
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Address </td>
                                    <td> 
                                  
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">City</td>
                                    <td> 
                               
                                    </td>
                                </tr>

                      

                                <tr>
                                    <td class="ft-600" style="width: 250px;">State</td>
                                    <td> 
                               
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Pincode</td>
                                    <td> 
                                 
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Country</td>
                                    <td> 
                             
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Contact Number</td>
                                    <td> 
                                  
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Members</td>
                                    <td> 
                                 
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Email</td>
                                    <td> 
                                
                                    </td>
                                </tr>

                               
                         @endforeach  
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