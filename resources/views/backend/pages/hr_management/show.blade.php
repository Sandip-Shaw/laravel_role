
@extends('backend.layouts.master')

@section('title')
Hr Management - Admin Panel
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
                <h4 class="page-title pull-left">Hr Management</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.hr_management.index') }}">Employee List</a></li>

                    <li><span>  {{$hrmanagement->emp_code}}</span></li>
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
                                    <td class="ft-600" style="width: 250px;"> Employee Code</td>
                                    <td> 
                               {{$hrmanagement->emp_code}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Employee Name</td>
                                    <td> 
                                    {{$hrmanagement->name}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Designation</td>
                                    <td> 
                                    {{$hrmanagement->designation}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Branch</td>
                                    <td> 
                                    {{$hrmanagement->branchdetails->branch_name}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Date of Birth </td>
                                    <td> 
                                    {{$hrmanagement->dob}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Date of Joining</td>
                                    <td> 
                                    {{$hrmanagement->dateofjoining}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Email</td>
                                    <td> 
                                    {{$hrmanagement->email}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ft-600" style="width: 250px;">Mobile Number</td>
                                    <td> 
                                    {{$hrmanagement->mobile}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ft-600" style="width: 250px;">Address</td>
                                    <td> 
                                    {{$hrmanagement->address}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ft-600" style="width: 250px;">Father's Name</td>
                                    <td> 
                                    {{$hrmanagement->fathername}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ft-600" style="width: 250px;">Aadhar Number</td>
                                    <td> 
                                    {{$hrmanagement->adhar_no}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ft-600" style="width: 250px;">Pan Number</td>
                                    <td> 
                                    {{$hrmanagement->pan_no}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ft-600" style="width: 250px;">Blood Group</td>
                                    <td> 
                                    {{$hrmanagement->blood_group}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ft-600" style="width: 250px;">Monthly Salary</td>
                                    <td> 
                                    {{$hrmanagement->monthlysalary}}
                                    </td>
                                </tr>
                               

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Image</td>
                                    <td> 
                                    @if(isset($hrmanagement))
                                    <img src="{{asset('/images/employeeImage/'.$hrmanagement->image)}}" width="60%" class="img-thumbnail" height="250">
                                    @endif
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