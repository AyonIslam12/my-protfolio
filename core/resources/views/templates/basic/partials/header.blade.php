
@php
    $banner = getContent('banner.content',true)->data_values;
@endphp
<div class="header-and-banner-con w-100 float-left position-relative">
    <div class="header-and-banner-inner-con">
       <header class="main-header">
          <!--navbar-start-->
          <div class="container pl-0 pr-0">
             <div class="header-con">
                <nav class="navbar navbar-expand-lg navbar-light p-0">
                   <a class="navbar-brand p-0" href="{{route('home')}}">
                   <img src="{{ getImage(imagePath()['logoIcon']['path'] .'/light_logo.png') }}" alt="logo-img" class="img-fluid">
                   </a>
                   <button class="navbar-toggler p-0 collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
                   <span class="navbar-toggler-icon"></span>
                   <span class="navbar-toggler-icon"></span>
                   </button>
                   <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                         <li class="nav-item active pl-0">
                            <a class="nav-link p-0 {{menuActiveWeb("home")}}" href="{{route('home')}}">@lang('Home')</a>
                         </li>
                        @foreach($pages as $k => $data)
                            @php
                                $route = str_replace('-','.',$data->slug);
                            @endphp
                         <li class="nav-item" >
                            <a  href="{{route('pages',[$data->slug])}}" class="nav-link p-0 {{menuActiveWeb( @$route)}}" >{{__($data->name)}}</a>
                         </li>
                        @endforeach

                      </ul>
                      <div class="d-inline-block contact">
                         <a href="#Contact">Contact</a>
                      </div>
                   </div>
                </nav>
             </div>
          </div>
          <!--navbar-end-->
       </header>
       @if (request()->route()->getName() == 'home')
       <section class="banner-main-con" id="home">
            <div class="container pl-0 pr-0">
            <div class="banner-con text-lg-left text-center">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 d-flex justify-content-center flex-column">
                        <div class="banner-left-con wow slideInLeft">
                        <div class="banner-heading">
                            <h2>{{@$banner->title}}</h2>
                            <ul class="dynamic-txts">
                                <li><h1>{{@$banner->name}}</h1></li>
                            </ul>
                            <p>{{@$banner->info}}</p>
                        </div>
                        <div class="banner-btn generic-btn d-inline-block">
                            <a href="{{ route('download.cv')}}">{{ __("Download CV") }}</a>
                        </div>
                        <a href="#Portfolio" class="See-btn">See My Work</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12">
                        <div class="banner-right-con position-relative wow slideInRight" id="banner-right-con">
                        <figure class="mb-0">
                            <img src="{{getImage('assets/images/frontend/banner/'.@$banner->background_image)}}" alt="banner-right-img" id="banner-right-img">
                        </figure>
                        <div class="cursor"></div>
                        <div class="cursor2"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--banner-end-->
            </div>
        </section>
        @endif
    </div>
 </div>
