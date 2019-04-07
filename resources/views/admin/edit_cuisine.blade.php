@extends('admin/dashboard')
@section('main_content')
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title">
                Add Food Item
            </h3>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach( $errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
    <!-- END PAGE TITLE-->
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN VALIDATION STATES-->
            <div class="widget green">
                <div class="widget-title">
                    <h4><i class="icon-reorder"></i>Add Cuisine</h4>
                    <div class="tools">
                        <a href="javascript:;" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>
                    </div>
                </div>
                <div class="widget-body form">
                    <!-- BEGIN FORM-->
                    <form class="cmxform form-horizontal" method="post" action="{{route('admin.cuisine_update')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input value="{{$cuisine->id}}" type="hidden" name="id">
                        <div class="control-group ">
                            <label for="name" class="control-label">Name</label>
                            <div class="controls">
                                <input class="span6 "  name="name" type="text"  value="{{$cuisine->name}}"/>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label for="price" class="control-label">Price</label>
                            <div class="controls">
                                <input class="span6 " name="price" type="number" value="{{$cuisine->price}}" />
                            </div>
                        </div>
                        <div class="control-group ">
                            <label for="type" class="control-label">Cuisine Type</label>
                            <div class="controls">
                                <select class="span6" name="type">
                                    <option>Barger</option>
                                    <option>Pizza</option>
                                    <option>Nuduls</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label for="description" class="control-label">Description</label>
                            <div class="controls">
                                <textarea class="span6" name="description">{{$cuisine->description}}</textarea>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label for="image" class="control-label">Image</label>
                            <div class="controls">
                                <input class="span6" name="image" type="file" value="{{$cuisine->image}}"/>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="submit" class="btn btn-success" value="Save">
                            <button class="btn" type="button">Cancel</button>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END VALIDATION STATES-->
        </div>
    </div>
@endsection
