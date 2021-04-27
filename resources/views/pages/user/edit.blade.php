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
                                            <span class="caption-subject bold uppercase"> User Management</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group">
                                                <a class="btn btn-sm green dropdown-toggle" href="javascript:;" data-toggle="dropdown"> BACK
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </div>
                                                <div class="portlet-body form">
                                        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                                                 @csrf
                                            <div class="form-group">
                                                    <label>Name</label>
                                                    <input value="{{$user->name}}" name="name" type="text" class="form-control" placeholder="username"> 
                                                     @error('name')
                                                     <div  class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                    <label>Email</label>
                                                    <input value="{{$user->email}}" name="email" type="text" class="form-control" placeholder="email"> 
                                                     @error('email')
                                                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                            <div class="form-group">
                                                    <label>Password</label>
                                                    <input name="password" type="password" class="form-control" placeholder="password">
                                                     @error('password')
                                                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                    @enderror 
                                            </div>
                                            <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input name="password_confirmation" type="password" class="form-control" placeholder="confirm password"> 
                                                     @error('confirm_password')
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
    