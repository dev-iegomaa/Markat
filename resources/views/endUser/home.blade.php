@extends('endUser.assets.master')

@section('title')
    Digimedia
@endsection

@section('content')
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h6>Digital Media Agency</h6>
                                        <h2>We Boost Your Website Traffic</h2>
                                        <p>{{$slider->paragraph}}</p>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="border-first-button"><a href="#contact">Contact Us</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{asset('endUserAssets/assets/images/slider-dec.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="about" class="about section overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                                <img src="{{asset('endUserAssets/assets/images/about-dec.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="about-right-content">
                                <div class="section-heading">
                                    <h6>About Us</h6>
                                    <h4>Who is DigiMedia <em>Agency</em></h4>
                                    <div class="line-dec"></div>
                                </div>
                                <p>{{$about->paragraph}}</p>
                                <div class="row">
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="progress" data-percentage="90">
                                            <span class="progress-left">
                                              <span class="progress-bar"></span>
                                            </span>
                                                <span class="progress-right">
                                              <span class="progress-bar"></span>
                                            </span>
                                                <div class="progress-value">
                                                    <div>
                                                        90%<br>
                                                        <span>Coding</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="progress" data-percentage="80">
                                        <span class="progress-left">
                                          <span class="progress-bar"></span>
                                        </span>
                                                <span class="progress-right">
                                              <span class="progress-bar"></span>
                                            </span>
                                                <div class="progress-value">
                                                    <div>
                                                        80%<br>
                                                        <span>Photoshop</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                                            <div class="progress" data-percentage="80">
                                            <span class="progress-left">
                                              <span class="progress-bar"></span>
                                            </span>
                                                <span class="progress-right">
                                              <span class="progress-bar"></span>
                                            </span>
                                                <div class="progress-value">
                                                    <div>
                                                        80%<br>
                                                        <span>Animation</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="border-first-button mt-4 text-center"><a href="#contact">Contact Us</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="services" class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6>Our Services</h6>
                        <h4>What Our Agency <em>Provides</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="naccs">
                        <div class="grid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="menu">
                                        <div class="first-thumb active">
                                            <div class="thumb">
                                                <span class="icon"><img src="{{asset('endUserAssets/assets/images/service-icon-01.png')}}" alt=""></span>
                                                Apartments
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="{{asset('endUserAssets/assets/images/service-icon-02.png')}}" alt=""></span>
                                                Food &amp; Life
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="{{asset('endUserAssets/assets/images/service-icon-03.png')}}" alt=""></span>
                                                Cars
                                            </div>
                                        </div>
                                        <div>
                                            <div class="thumb">
                                                <span class="icon"><img src="{{asset('endUserAssets/assets/images/service-icon-04.png')}}" alt=""></span>
                                                Shopping
                                            </div>
                                        </div>
                                        <div class="last-thumb">
                                            <div class="thumb">
                                                <span class="icon"><img src="{{asset('endUserAssets/assets/images/service-icon-01.png')}}" alt=""></span>
                                                Traveling
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <ul class="nacc">
                                        <li class="active">
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>SEO Analysis &amp; Daily Reports</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                    dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{asset('endUserAssets/assets/images/services-image.jpg')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Healthy Food &amp; Life</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                    dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{asset('endUserAssets/assets/images/services-image-02.jpg')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Car Re-search &amp; Transport</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                    dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{asset('endUserAssets/assets/images/services-image-03.jpg')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Online Shopping &amp; Tracking ID</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                    dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{asset('endUserAssets/assets/images/services-image-04.jpg')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <div class="thumb">
                                                    <div class="row">
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="left-text">
                                                                <h4>Enjoy &amp; Travel</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt ut labore et dolore kengan darwin doerski token.
                                                                    dover lipsum lorem and the others.</p>
                                                                <div class="ticks-list"><span><i class="fa fa-check"></i> Optimized Template</span> <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span>
                                                                    <span><i class="fa fa-check"></i> Data Info</span> <span><i class="fa fa-check"></i> SEO Analysis</span> <span><i class="fa fa-check"></i> Optimized Template</span></div>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedr do eiusmod deis tempor incididunt.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 align-self-center">
                                                            <div class="right-image">
                                                                <img src="{{asset('endUserAssets/assets/images/services-image.jpg')}}" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border-first-button mt-4 text-center position-relative" style="z-index: 1;"><a href="#contact">Contact Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6>Our Portofolio</h6>
                        <h4>See Our Recent <em>Projects</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
            <div class="row">
                <div class="col-lg-12">
                    <div class="loop owl-carousel">
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{asset('endUserAssets/assets/images/portfolio-01.jpg')}}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{asset('endUserAssets/assets/images/portfolio-01.jpg')}}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{asset('endUserAssets/assets/images/portfolio-02.jpg')}}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{asset('endUserAssets/assets/images/portfolio-03.jpg')}}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{asset('endUserAssets/assets/images/portfolio-04.jpg')}}" alt="">
                                    </div>
                                    <div class="down-content">
                                        <h4>Website Builder</h4>
                                        <span>Marketing</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border-first-button mt-4 text-center position-relative" style="z-index: 1;"><a href="#contact">Contact Us</a></div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h6>Contact Us</h6>
                        <h4>Get In Touch With Us <em>Now</em></h4>
                        <div class="line-dec"></div>
                    </div>
                </div>
                <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
                    <form id="contact" action="{{route('endUser.contact')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-dec">
                                    <img src="{{asset('endUserAssets/assets/images/contact-dec.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div id="map">
                                    <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="636px" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="fill-form">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="{{asset('endUserAssets/assets/images/phone-icon.png')}}" alt="">
                                                    <a href="tel:0100200340">{{$setting->phone}}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="{{asset('endUserAssets/assets/images/email-icon.png')}}" alt="">
                                                    <a href="mailto:our@email.com">{{$setting->email}}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="info-post">
                                                <div class="icon">
                                                    <img src="{{asset('endUserAssets/assets/images/location-icon.png')}}" alt="">
                                                    <a href="#">123 Rio de Janeiro</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset>
                                                <input class="@error('name') is-invalid @enderror form-control" type="text" name="name" value="{{old('name')}}" id="name" placeholder="Your Name" autocomplete="on" required>
                                            </fieldset>
                                            @error('name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <fieldset>
                                                <input class="@error('phone') is-invalid @enderror form-control" type="text" name="phone" value="{{old('phone')}}" id="phone" placeholder="Your Phone" autocomplete="on" required>
                                            </fieldset>
                                            @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <fieldset>
                                                <input class="@error('email') is-invalid @enderror form-control" type="text" name="email" value="{{old('email')}}" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required>
                                            </fieldset>
                                            @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                            <fieldset>
                                                <input class="@error('address') is-invalid @enderror form-control" type="text" name="address" value="{{old('address')}}" id="address" placeholder="Your Address" required>
                                            </fieldset>
                                            @error('address')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <fieldset style="height: 100% !important;">
                                                <textarea class="@error('message') is-invalid @enderror form-control" name="message" style="height: 88% !important; max-height: none;" type="text" id="message" placeholder="Message" required>{{old('message')}}</textarea>
                                            </fieldset>
                                            @error('message')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12 mt-4">
                                            <fieldset>
                                                {!! NoCaptcha::renderJs() !!}
                                                {!! NoCaptcha::display() !!}
                                            </fieldset>
                                        </div>
                                        <div class="col-lg-12">
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
