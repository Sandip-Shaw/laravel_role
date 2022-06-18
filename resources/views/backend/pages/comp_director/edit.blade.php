
@extends('backend.layouts.master')

@section('title')
Director Edit - Admin Panel
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
                    <li><span>Edit Director Profile</span></li>
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
                    <h4 class="header-title"> Edit Director Profile </h4>
                    @include('backend.layouts.partials.messages')
                    
                    <form action="{{route('admin.comp_director.update', $director->id)}}" method="POST" id="form" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label  for="designation">Designation</label>
                                <input type="text" class="form-control" id="designation" name="designation" value="{{ $director->designation }}">
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="member">Member</label>
                                <input type="text" class="form-control" id="member" name="member" value="{{ $director->member }}">
                            </div>
                           
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="director_name">Director Name</label>
                                <input type="text" class="form-control" id="director_name" name="director_name" value="{{ $director->director_name }}">
                            </div>
                            <div class="form-group col-md-6 ">
                                <label for="din_no">DIN No.</label>
                                <input type="text" class="form-control" id="din_no" name="din_no" value="{{ $director->din_no }}">
                            </div>
                            
                        </div>
                     
                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label for="Appointment_Date">Appointment Date</label>
                                <input type="date" class="form-control" id="appointment_date" name="appointment_date" value="{{ $director->appointment_date }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="Resignation Date">Resignation Date</label>
                                <input type="date" class="form-control" id="resignation_date" name="resignation_date" value="{{ $director->resignation_date }}">
                            </div>
                           
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="col-sm-3 control-label">Select An Image</label>
                         
                                <input type="file" name="image" class="GalleryImage" id="image" required />  
                                @if(isset($director))
                                    <img src="{{asset('/images/directorImage/'.$director->image)}}" width="500">
                                @endif
                             </div>  
                             <div class="form-group col-md-6"> 
                                <p> Authorized Signatory</p>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="authorized_signatory" value="Yes" <?php if($director->authorized_signatory=="Yes") {echo "checked";} ?>>
                                    <label class="form-check-label" for="authorized_signatory">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="authorized_signatory" value="No" <?php if($director->authorized_signatory=="No") {echo "checked";} ?>>
                                    <label class="form-check-label" for="authorized_signatory">No</label>
                                </div>
                            </div>
                        </div>
                   

                                           
                        
                        <button type="submit" class="btn btn-primary  pr-4 pl-4">Update </button>
                        <a class="btn btn-danger" href="{{route('admin.comp_director.index')}}">Cancel </a>
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