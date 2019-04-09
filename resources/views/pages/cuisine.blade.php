@extends('index')
@include('pages.links')
@section('wrap')
    <div class="wrap">
        <br>
        @if(Session::has('success'))
            <div class="alert alert-danger">
                {{Session('success')}}
            </div>
        @endif
        @foreach( $cuisines as $cuisine)
            <section class="col-1-3">
                <div class="wrap-col">
                    <div class="box">
                        <div>
                            @php
                            Session::put('cuisine_id_lulu',$cuisine->id);
                            @endphp
                            <h2>{{$cuisine->name}}</h2>
                            <figure><img src="{{asset($cuisine->image)}}" alt=""></figure>
                            <p class="pad_bot1">Price:{{$cuisine->price}} ৳</p>
                          <a href="{{URL::to('cuisine_detail/'.$cuisine->id)}}" class="button1">See Detail</a>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection
@section('wrapper')
    <div class="wrapper">
        <section>
            <h2>Banquet’s Specials</h2>
            <div class="wrapper">
                <div class="col-1-3">
                    <div class="wrap-col">
                        <div class="wrapper pad_bot1">
                            <figure class="pad_bot1"><img src="{{asset('asset/images/page2_img3.jpg')}}" alt="">
                            </figure>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                        </div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="wrap-col mag-1">
                        <div class="wrapper pad_bot1">
                            <figure class="pad_bot1"><img src="{{asset('asset/images/page2_img4.jpg')}}" alt="">
                            </figure>
                            Labore et dolore magna aliqua. Ut <br>
                            enim minim veniam quis nostrud exer-<br>citation ullamco.
                        </div>
                    </div>
                </div>
                <div class="col-1-3">
                    <div class="wrap-col mag-1">
                        <div class="wrapper pad_bot1">
                            <figure class="pad_bot1"><img src="{{asset('asset/images/page2_img5.jpg')}}" alt="">
                            </figure>
                            Labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exer- citation ullamco.
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

