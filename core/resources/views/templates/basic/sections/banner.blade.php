@php
    $banner = getContent('banner.content',true)->data_values;
@endphp
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
