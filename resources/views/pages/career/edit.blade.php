  @extends('layout.main')
 @section('content')
 <style>
.dataTables_filter {
    float: right !important;
}
.dataTables_paginate{
     float: right !important;
}
 </style>


<div class="row">
                            <div class="col-md-12">
                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                              
                       
                                       <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption font-red-sunglo">
                                            <i class="icon-settings font-red-sunglo"></i>
                                            <span class="caption-subject bold uppercase"> Career Management</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group">
                                                <a class="btn btn-sm green dropdown-toggle" href="javascript:;" data-toggle="dropdown"> BACK
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                       <div class="portlet-body form">
                                       <form action="{{ route('career.update',$career->id) }}" method="POST" enctype="multipart/form-data">
                                           @csrf
                                        @method('PUT')
                                            <div class="form-group">
                                                    <label>Title</label>
                                                    <input name="title" value="{{$career->title}}" type="text" class="form-control" placeholder="title"> 
                                                     @error('title')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                     @enderror
                                            </div>
                                            <div class="form-group">
                                                    <label>Description</label>
                                                   <textarea class="form-control" rows='4' name="description">
                                                            {{$career->description}}
                                                   </textarea>
                                                    @error('description')
                                                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                    <label>Job Type</label>
                                                    <input value="{{$career->job_type}}" name="job_type" type="text" class="form-control" placeholder="job type"> 
                                                     @error('job_type')
                                                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                    <label>Salary</label>
                                                    <input value="{{$career->salary}}" name="salary" type="text" class="form-control" placeholder="Salary"> 
                                                     @error('salary')
                                                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                             <div class="form-group">
                                                    <label>Location</label>
                                                    <input value="{{$career->location}}" name="location" type="text" class="form-control" placeholder="Location"> 
                                                     @error('location')
                                                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn blue">Submit</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        <!-----END page Content-------->
                    <!-- END PAGE TITLE-->
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
              
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
     @endsection
    