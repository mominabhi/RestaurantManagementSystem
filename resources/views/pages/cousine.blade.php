@extends('index')
@section('wrap')
    <div class="wrap">
        <section class="col-1-3">
            <div class="wrap-col">
                <div class="box">
                    <div>
                        <h2>Did You <span>Know</span></h2>
                        <figure><img src="{{asset('asset/images/page2_img1.jpg')}}" alt=""></figure>
                        <p class="pad_bot1">Neque porro quisquam est, qui dolor- em ipsum qudolor sitamet consectetur
                            adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
                        <a href="#" class="button1">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-1-3">
            <div class="wrap-col">
                <div class="box">
                    <div>
                        <h2 class="letter_spacing">Types<span> of Cuisine</span></h2>
                        <ul class="list1 pad_bot1">
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Consectetur adipisicing elit sed</a></li>
                            <li><a href="#">Eiusmod tempor incididunt labore</a></li>
                            <li><a href="#">Ut enim ad minim veniam</a></li>
                            <li><a href="#">Quis nostrud exercation ullamco </a></li>
                            <li><a href="#">Laboris nisi ut aliquip</a></li>
                            <li><a href="#">Commodo consequat aute </a></li>
                            <li><a href="#">Irure dolor in reprehenderit</a></li>
                            <li><a href="#">Voluptate velit esse cillum dolore</a></li>
                        </ul>
                        <a href="#" class="button1">Proposal for You</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-1-3">
            <div class="wrap-col">
                <div class="box">
                    <div>
                        <h2>Dish <span>of the Day</span></h2>
                        <figure><img src="{{asset('asset/images/page2_img2.jpg')}}" alt=""></figure>
                        <p class="pad_bot1">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum deleniti atque corrupti quos.</p>
                        <a href="#" class="button1">Read More</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('wrapper')
    <div class="wrapper">
        <section>
        <h2>Banquet’s Specials</h2>
        <div class="wrapper">
            <div class="col-1-3"><div class="wrap-col">
                    <div class="wrapper pad_bot1">
                        <figure class="pad_bot1"><img src="{{asset('asset/images/page2_img3.jpg')}}" alt=""></figure>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                    </div>
                </div></div>
            <div class="col-1-3"><div class="wrap-col mag-1">
                    <div class="wrapper pad_bot1">
                        <figure class="pad_bot1"><img src="{{asset('asset/images/page2_img4.jpg')}}" alt=""></figure>
                        Labore et dolore magna aliqua. Ut <br>
                        enim minim veniam quis nostrud exer-<br>citation ullamco.
                    </div>
                </div></div>
            <div class="col-1-3"><div class="wrap-col mag-1">
                    <div class="wrapper pad_bot1">
                        <figure class="pad_bot1"><img src="{{asset('asset/images/page2_img5.jpg')}}" alt=""></figure>
                        Labore et dolore magna aliqua. Ut enim minim veniam quis nostrud exer- citation ullamco.
                    </div>
                </div></div>
        </div>
        </section>
    </div>
    <div class="card ">
        <div class="card-header">
            <h4>jujfgjgf</h4>
        </div>
    </div>
    @endsection
