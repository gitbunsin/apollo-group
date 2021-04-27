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
                                            <span class="caption-subject bold uppercase"> NEWS AND EVENTS Management</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group">
                                                <a class="btn btn-sm green dropdown-toggle" href="javascript:;" data-toggle="dropdown"> BACK
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                       
                                                <div class="portlet-body form">
                                       
                                <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                            <div class="form-group">
                                                    <label>Ttittle</label>
                                                    <input value="{{$blog->title}}" name="title" type="text" class="form-control" placeholder="title"> 
                                                    @error('title')
                                                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                    <label>Description</label>
                                                   <textarea name="description" class="form-control" rows='6' placeholder="description">{{$blog->description}}</textarea>
                                                    @error('description')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                    <label>Image URL</label>
                                                    <input name="url" type="file" class="form-control" placeholder="password">
                                                    @error('url')
                                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                 <img src="{{ Storage::url($blog->url) }}" height="100" width="100" alt="" />
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
    