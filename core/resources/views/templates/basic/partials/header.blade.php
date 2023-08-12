
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
    </div>
 </div>
