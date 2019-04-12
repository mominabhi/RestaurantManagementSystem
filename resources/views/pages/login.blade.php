@extends('index')
@include('pages.links')
@section('wrap')
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <ul>
                <li><div class="alert-danger" style="text-align: center">{{$error}}</div></li>
            </ul>
         @endforeach
        @endif
    <div class="wrap">
        <br>
        <div class="col-md-6">
            <div class="wrap-col">
                <div class="box">
                    <div>
                        <h3 class="text-center" style="color: whitesmoke">User Login</h3>
                        <form method="POST" action="{{route('user.customer_login')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="quantity">User Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity">User Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                                <input type="submit" class="button1 btn-block" value="For Order">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="wrap-col">
                <div class="box">
                    <div>
                        <h3 class="text-center" style="color: whitesmoke">User Registration</h3>
                        <form method="POST" action="{{route('user.customer_registration')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="quantity">User Name:</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity">User Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity">User Password:</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Confirm Password:</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Phone Number:</label>
                                <input type="number" name="phone" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Address:</label>
                                <textarea class="form-control" name="address"></textarea>
                            </div>
                            <input type="submit" class="button1 btn-block" value="User Registration">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


