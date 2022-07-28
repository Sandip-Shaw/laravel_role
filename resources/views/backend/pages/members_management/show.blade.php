
@extends('backend.layouts.master')

@section('title')
Member - Admin Panel
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
                <h4 class="page-title pull-left">Member's Management</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('admin.members_management.index') }}">Members</a></li>

                    <li><span>{{$member->first_name}}</span></li>
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
                    <a class="btn btn-default btn-xs" onclick="block_ui()" href="{{ route('admin.members_management.edit',$member->member_id) }}">
                        <i class="fa fa-pencil"></i></a>
                    </div>
                 
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class=col-md-11>
                        @include('backend.layouts.partials.messages')
                        <table id="dataTable" class="table table-details">
                            <tbody>
             
                                <tr>
                                    <td class="ft-600" style="width: 250px;"> Status</td>
                                    <td> 
                                    {{$member->status}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;"> Branch</td>
                                    <td> 
                                    {{$member->branchdet->branch_name}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Associate/Advisor/Staff</td>
                                    <td> 
                                    {{$member->associatedet->name}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Enrollment Date</td>
                                    <td> 
                                    {{$member->emr_date}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Name </td>
                                    <td> 
                                    {{$member->first_name}}
                                    {{$member->middle_name}}
                                    {{$member->last_name}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">DOB</td>
                                    <td> 
                                    {{$member->dob}}
                                    </td>
                                </tr>

                      

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Age</td>
                                    <td> 
                                  
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Senior Citizen</td>
                                    <td> 
                                    {{$member->senior_citizen}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Gender</td>
                                    <td> 
                                    {{$member->gender}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Father Name</td>
                                    <td> 
                                    {{$member->father_name}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Mother Name</td>
                                    <td> 
                                    {{$member->mother_name}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Marital Status</td>
                                    <td> 
                                    {{$member->marital_status}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Qualification</td>
                                    <td> 
                                    {{$member->qualification}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Husband / Wife Name</td>
                                    <td> 
                                    {{$member->husbandWife_name}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Occupation</td>
                                    <td> 
                                    {{$member->occupation}}
                                    </td>
                                </tr>

                                <tr>
                                    <td class="ft-600" style="width: 250px;">Monthly Income</td>
                                    <td> 
                                    {{$member->monthly_income}}
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
                  Member KYC Info
                    </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                    <table id="dataTable" class="table table-details">
                    <tbody>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Aadhar Number</td>
                            <td> 
                            {{$member->adhar_no}}
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Voter Id Number</td>
                            <td> 
                            {{$member->voter_no}}
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Pan Number</td>
                            <td> 
                            {{$member->pan_no}}
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Ration Card Number</td>
                            <td> 
                            {{$member->ration_no}}
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Meter Number</td>
                            <td> 
                            {{$member->meter_no}}
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">CL Number</td>
                            <td> 
                            {{$member->cl_no}}
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">CL Relation</td>
                            <td> 
                            {{$member->cl_relation}}
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">DL Number</td>
                            <td> 
                            {{$member->dl_no}}
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Passport Number</td>
                            <td> 
                            {{$member->passport_no}}
                            </td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
                </div>
                </div>
                <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                   Nominee Info
                </a>
                </div>
                <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    <table id="dataTable" class="table table-details">
                    <tbody>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Nominee Name</td>
                            <td> 
                            {{$member->nominee_name}}
                            
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Nominee Relation</td>
                            <td> 
                            {{$member->nominee_relation}}
                            
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Nominee Phone Number</td>
                            <td> 
                            {{$member->nominee_mobile}}
                            
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Nominee Date of Birth</td>
                            <td> 
                            {{$member->nominee_dob}}
                            
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Nominee Aadhar Number</td>
                            <td> 
                            {{$member->nominee_adhar}}
                            
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Nominee Voter Id Number</td>
                            <td> 
                            {{$member->nominee_voter}}
                            
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Nominee Pan Number</td>
                            <td> 
                            {{$member->nominee_pan}}
                            
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Nominee Ration Card Number</td>
                            <td> 
                            {{$member->nominee_ration}}
                            
                            </td>
                        </tr>
                        <tr>
                            <td class="ft-200" style="width: 250px;">Nominee Address</td>
                            <td> 
                            {{$member->nominee_address}}
                            
                            </td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
                </div>
                </div>
                <div class="card">
                <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                   Member KYC Status
                    </a>
                </div>
                <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    <table id="dataTable" class="table table-details">
                    <tbody>
                        <tr>
                            <td class="ft-200" style="width: 250px;">KYC Status</td>
                            <td> 
                            {{$member->kyc_status}}
                            
                            </td>
                        </tr>
                    
                        </tbody>
                    </table>
                    <form action="{{route('admin.members_management.update', $member->member_id)}}" method="POST">
                    @csrf
                    @method('PUT')
                            <label for="kyc_status">KYC Status:</label><br>
                            {!!Form::select('kyc_status', array('1' => 'Full KYC', '0' => 'Pending', '-1'=>'Failed'),$member->kyc_status)!!}
                            <input type="submit" value="Submit">
                    </form>
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