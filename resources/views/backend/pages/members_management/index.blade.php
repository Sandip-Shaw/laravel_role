
@extends('backend.layouts.master')

@section('title')
Member Management - Admin Panel
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
                <h4 class="page-title pull-left">Member Management</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><span>All Members</span></li>
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
                    <h4 class="header-title float-left">Member's List</h4>
                    <p class="float-right mb-2">
                        <a class="btn btn-primary text-white" href="{{ route('admin.members_management.create') }}">Create New Member</a>
                    </p>
                    <div class="clearfix"></div>
                    <div class="data-tables">
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="text-center">
                            <thead class="bg-light text-capitalize">
                                <tr>
                                   
                                    <th width="05%">Member No.</th>
                                    <th width="10%">Branch</th>
                                    <th width="10%">Name</th>
                                  
                                    <th width="10%">Senior Citizen</th>
                                    <th width="10%">Enroll Date</th>
                                    <th width="10%">Aadhar No.</th>
                                    <th width="10%">Pan No.</th>
                                   
                                    <th width="05%">KYC Status</th>
                                    <th width="10%">Mobile No.</th>
                                    <th width="05%">Status</th>
                                    <th width="05%">Actions</th>


                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($member as $members)
                               <tr>
                                    <td>{{ $loop->index+1000 }}</td>

                                    <td>{{ $members->branchdet->branch_name }}</td>
                                   

                                    <td>{{ $members->first_name }} {{ $members->middle_name }} {{ $members->last_name }}</td>
                                   
                                    <td>
                                        @php
                                        $birthday = $members->dob;
                                        $age = Carbon\Carbon::parse($birthday)->diff(Carbon\Carbon::now())->format('%y years');
                                        if($age>=60){
                                            echo "Yes";
                                        }else{
                                            echo "No";
                                        }
                                         @endphp    
                                    </td>
                                    <td>{{ $members->emr_date }} </td>
                                    <td>{{ $members->adhar_no }} </td>
                                    <td>{{ $members->pan_no }} </td>

                                    <td>
                                         @php
                                            if($members->kyc_status==0){
                                                echo "Pending" ;
                                                }elseif($members->kyc_status==-1){
                                                echo  "Failed";
                                                }else{
                                                echo  "Full KYC";
                                            }
                                            @endphp 
                                    </td>
                                    <td>{{ $members->mobile }} </td>
                               
                                    <td>{{ $members->status }} </td>
 
                                    <td>
                                     
                                            <a class="btn btn-success text-white" href="{{ route('admin.members_management.edit',$members->member_id) }}">Edit</a>
                                            <a class="btn btn-primary text-white" href="{{ route('admin.members_management.show',$members->member_id) }}">Show</a> 
                                        
                                     
                                      
                                     
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