@extends('admin.dashboard')
@section('main_content')
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    Online Orders
                </h3>
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{Session('success')}}
                    </div>
            @endif
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
                        <h4><i class="icon-reorder"></i> All Online Orders </h4>
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
                                <th class="hidden-phone">Cuisine Id</th>
                                <th class="hidden-phone">cuisine Name</th>
                                <th class="hidden-phone">Name</th>
                                <th class="hidden-phone">Address</th>
                                <th class="hidden-phone">Phone NO.</th>
                                <th class="hidden-phone">quantity</th>
                                <th class="hidden-phone">Unique Price</th>
                                <th class="hidden-phone">Total Cost</th>
                                <th class="hidden-phone">created_at</th>
                                <th class="hidden-phone">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($online_orders as $online_order)
                                <tr class="odd gradeX">
                                    <td>{{$online_order->id}}</td>
                                    <td>{{$online_order->cuisine_list->id}}</td>
                                    <td>{{$online_order->cuisine_list->name}}</td>
                                    <td><a href="{{URL::to('admin/particular_order/'.$online_order->customer->id)}}">{{$online_order->customer->name}}</a></td>
                                    <td>{{$online_order->customer->address}}</td>
                                    <td>{{$online_order->customer->phone}}</td>
                                    <td>{{$online_order->quantity}}</td>
                                    <td>{{$online_order->cuisine_list->price}}</td>
                                    <td>
                                        @php
                                          echo  $totalCost=$online_order->cuisine_list->price * $online_order->quantity;
                                      @endphp
                                    </td>
                                    <td>{{$online_order->created_at}}</td>
                                    <td>
                                        <a href="{{URL::to('admin/delete_order/'.$online_order->id)}}"><button class="btn btn-danger">Completed</button></a>
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
