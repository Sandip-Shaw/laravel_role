
@extends('backend.layouts.master')

@section('title')
Director Create - Admin Panel
@endsection

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

<style>
    .form-check-label {
        text-transform: capitalize;
    }
</style>
@endsection


@section('admin-content')



<!-- page title area start -->
<div class="page-title-area">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Director</h4>
                <ul class="breadcrumbs pull-left">
                    <li><a href="">Dashboard</a></li>
                    <!-- <li><a href="">All Blogs</a></li> -->
                    <li><span>Director</span></li>
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
                    <h4 class="header-title"> Create Director </h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{ route('admin.comp_director.store') }}" method="POST" id="form" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label  for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Directors Designation">
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="member">Member</label>
                                <!-- <input type="text" class="form-control" id="member" name="member" placeholder="Enter member"> -->
                                <select name="member" id="member" class="form-control" required>
                                    <option value="">Select Member</option>
                                    @foreach($members as $key=>$member)
                                    <option value="{{$member}}">{{$key}}</option>
                                   
                                   @endforeach
                                   
                                </select>
                            </div>
                           
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="director_name">Director Name<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="text" class="form-control" id="director_name" name="director_name" placeholder="Enter Directors Name" required>
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="din_no">DIN No.<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="text" class="form-control" id="din_no" name="din_no" placeholder="Enter DIN No." required>
                            </div>
                            
                        </div>
                     
                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="Appointment_Date">Appointment Date<span style="color:red; font-size: 18px;line-height:1">*</span></label>
                                <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Resignation Date">Resignation Date</label>
                                <input type="date" class="form-control" id="resignation_date" name="resignation_date" >
                            </div>
                           
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="col-sm-3 control-label">Select An Image</label>
                         
                                <input type="file" name="image" class="GalleryImage" id="image"  />  

                             </div>  
                             <div class="form-group col-md-6"> 
                                <p> Authorized Signatory<span style="color:red; font-size: 18px;line-height:1">*</span></p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="authorized_signatory" value="Yes">
                                    <label class="form-check-label" for="authorized_signatory">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="authorized_signatory" value="No">
                                    <label class="form-check-label" for="authorized_signatory">No</label>
                                </div>
                            </div>
                        </div>
                   

                                           
                        <div style="text-align:center;">
                        <button type="submit" class="btn btn-primary  pr-4 pl-4">Save </button>
                        <a class="btn btn-danger" href="{{route('admin.comp_director.index')}}">Cancel </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- data table end -->
        
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script src="jquery.js"></script>
<script src="parsley.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>

<script>
  $('#form').parsley();
</script>
@endsection