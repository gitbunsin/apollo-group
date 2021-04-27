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
                                        <div class="caption font-dark">
                                            <i class="icon-settings font-dark"></i>
                                            <span class="caption-subject bold uppercase"> Managed Table</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-toolbar">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="btn-group">
                                                        <button id="sample_editable_1_new" class="btn sbold green"> <a href="{{ route('blog.create') }}"> Add New</a> 
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="btn-group pull-right">
                                                        <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-print"></i> Print </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th> IMAGE </th>
                                                    <th> TITTLE </th>
                                                    <th> DESCRIPTIONS </th>
                                                    <th> CREATE DATE </th>  
                                                    <th> Actions </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($blog as $blogs )
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                                    </td>

                                                    <td><img src="{{ Storage::url($blogs->url) }}" height="50" width="50" alt="" /></td>
                                                    <td>{{$blogs->title}}</td>
                                                    <td>
                                                       {{ Str::limit($blogs->description,50) }}
                                                    </td>
                                                    <td class="center"> {{date('d-m-Y', strtotime($blogs->created_at))}} </td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                <li>
                                                                    <a href="{{route('blog.edit',$blogs->id)}}">
                                                                        <i class="icon-docs"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a style="color:black" 
                                                                        href="{{ route('blog.destroy',$blogs->id) }}"
                                                                        onclick="event.preventDefault();
                                                                        document.getElementById('delete-form-{{ $blogs->id }}').submit();">
                                                                 <i class="icon-trash"></i> delete
                                                                       
                                                                    </a>
                                                                    <form id="delete-form-{{ $blogs->id }}" action="{{ route('blog.destroy',$blogs->id) }}" method="POST">
                                                                      @csrf
                                                        @method('DELETE')
                                                                    </form>
                                                                </li>
                                                               
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
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
    