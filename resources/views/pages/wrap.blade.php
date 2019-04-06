@extends('index')
@section('wrap')
    <div class="wrap">
        <section class="col-1-3">
            <div class="wrap-col">
                <div class="box">
                    <div>
                        <h2>Welcome <span>to Us!</span></h2>
                        <figure><img src="{{asset('asset/images/page1_img1.jpg')}}" alt=""></figure>
                        <p class="pad_bot1">This <a
                                    href="http://blog.templatemonster.com/2011/08/01/free-website-template-jquery-slider-typography-restaurant/"
                                    class="list_1">Deliccio Template</a> goes with two packages – with PSD source files
                            and without them. PSD source is available for free for the registered members.</p>
                        <a href="#" class="button1">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-1-3">
            <div class="wrap-col">
                <div class="box">
                    <div>
                        <h2>About <span>Us</span></h2>
                        <figure><img src="{{asset('asset/images/page1_img2.jpg')}}" alt=""></figure>
                        <p class="pad_bot1">This is one of <a
                                    href="http://blog.templatemonster.com/free-website-templates/" target="_blank">free
                                website templates</a> created by TemplateMonster.com team. This website template is
                            optimized for 1024x768 screen res.</p>
                        <a href="#" class="button1">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-1-3">
            <div class="wrap-col">
                <div class="box">
                    <div>
                        <h2>Our <span>Services</span></h2>
                        <figure><img src="{{asset('asset/images/page1_img3.jpg')}}" alt=""></figure>
                        <ul class="list1 pad_bot1">
                            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="#">Consectetur adipisicing elit sed</a></li>
                            <li><a href="#">Eiusmod tempor incididunt labore</a></li>
                            <li><a href="#">Ut enim ad minim veniam</a></li>
                        </ul>
                        <a href="#" class="button1">Read More</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
