@extends('admin.dashboard')
@section('main_content')
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    Data Table
                </h3>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session('success')}}
                    </div>
                    @endif
                <div class="breadcrumb">
                    <form action="#" class="hidden-phone">
                        <div class="input-append search-input-area">
                            <input class="" type="text">
                            <button class="btn" type="button"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN ADVANCED TABLE widget-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget red">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> All Cuisine List Table</h4>
                        <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                    </div>
                    <div class="widget-body">
                        <table class="table table-striped table-bordered" id="sample_1">
                            <thead>
                            <tr>
                                <th class="hidden-phone">#</th>
                                <th class="hidden-phone">Name</th>
                                <th class="hidden-phone">Price</th>
                                <th class="hidden-phone">Food Type</th>
                                <th class="hidden-phone">Description</th>
                                <th class="hidden-phone">Image</th>
                                <th class="hidden-phone">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cuisines as $cuisine)
                                <tr class="odd gradeX">
                                    <td>{{$cuisine->id}}</td>
                                    <td>{{$cuisine->name}}</td>
                                    <td>{{$cuisine->price}}</td>
                                    <td>{{$cuisine->type}}</td>
                                    <td>{{$cuisine->description}}</td>
                                    <td>
                                        <img src="{{asset($cuisine->image)}}" style="width: 50px; height: 50px">
                                    </td>
                                    <td>
                                       <a href="{{URL::to('admin/edit_cuisine/'.$cuisine->id)}}"><button class="btn btn-primary">Edit</button></a>
                                       <a href="{{URL::to('admin/delete_cuisine/'.$cuisine->id)}}"><button class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- END EXAMPLE TABLE widget-->
            </div>
        </div>
        <!-- END ADVANCED TABLE widget-->
    </div>
    <!-- END PAGE CONTAINER-->
@endsection
