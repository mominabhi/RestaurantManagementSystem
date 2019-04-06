@extends('index')

@section('slider')
<div class="slider_bg">
    <div class="slider">
        <ul class="items">
            <li>
                <img src="{{asset('asset/images/img1.jpg')}}" alt="">
                <div class="banner">
                    <strong>Italian<span>Fettuccine</span></strong>
                    <b>Dish of the Day</b>
                    <p>
											<span>Lorem ipsum dolamet consectetur<br>
											adipisicing elit, sed do eiusmod tempor aliqua enim ad minim veniam, quis nosinci- didunt ut labore et dolore.</span>
                    </p>
                </div>
            </li>
            <li>
                <img src="{{asset('asset/images/img2.jpg')}}" alt="">
                <div class="banner">
                    <strong>succulent<span>meat</span></strong>
                    <b>Dish of the Day</b>
                    <p>
											<span>Lorem ipsum dolamet consectetur <br>
											adipisicing elit, sed do eiusmod tempor aliqua enim ad minim veniam, quis nosinci- didunt ut labore et dolore.</span>
                    </p>
                </div>
            </li>
            <li>
                <img src="{{asset('asset/images/img3.jpg')}}" alt="">
                <div class="banner">
                    <strong>French-Style<span>Tartlet</span></strong>
                    <b>Dish of the Day</b>
                    <p>
											<span>Lorem ipsum dolamet consectetur <br>
											adipisicing elit, sed do eiusmod tempor aliqua enim ad minim veniam, quis nosinci- didunt ut labore et dolore.</span>
                    </p>
                </div>
            </li>
        </ul>
    </div>
    <div class="slider-response">
        <div class="rslides_container">
            <ul class="rslides" id="slidez">
                <li><img src="{{asset('asset/images/img1.jpg')}}" alt=""></li>
                <li><img src="{{asset('asset/images/img2.jpg')}}" alt=""></li>
                <li><img src="{{asset('asset/images/img3.jpg')}}" alt=""></li>
            </ul>
        </div>
    </div>
</div>
@endsection
