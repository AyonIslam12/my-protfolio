@php
    $content = getContent('testimonial.content',true)->data_values;
    $elements = getContent('testimonial.element',false,'',1);
@endphp
<section class="w-100 float-left padding-top padding-bottom tastimonials-con position-relative text-lg-left text-center" id="testimonials">
    <div class="container">
        <div class="generic-title text-center">
            <h6>{{ __(@$content->title) }}</h6>
            <h2 class="text-light">{{ __(@$content->heading) }}</h2>
         </div>
       <div class="row">
          <div class="col-lg-5">
             <div class="tastimonials-left-con wow slideInLeft" >
                <figure class="mb-0">
                   <img src="{{asset($activeTemplateTrue.'/')}}/image/tastimonials-img.png" alt="tastimonials-img" class="img-fluid">
                </figure>
             </div>
          </div>
          <div class="col-lg-7">
             <div id="carouselExampleControls" class="carousel slide wow slideInRight" data-ride="carousel" >
                <div class="carousel-inner">
                    @foreach ( $elements as $key=> $item)
                    <div class="carousel-item {{ $key == 0 ?'active':'' }}">
                       <div class="testimonials-content">
                          <figure class="mb-0">
                             <img src="{{asset($activeTemplateTrue.'/')}}/image/comma-icon.png" alt="comma-icon" class="img-fluid">
                          </figure>
                          <div class="testimonials-inner-content">
                             <p>{{ __(@$item->data_values->quote) }}</p>
                             <span class="d-block auther-name">{{ __(@$item->data_values->author_name) }}</span>
                             <span class="d-block">{{ __(@$item->data_values->designation) }}</span>
                          </div>
                       </div>
                    </div>

                 @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <i class="fas fa-arrow-left d-flex align-items-center justify-content-center"></i>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i>
                <span class="sr-only">Next</span>
                </a>
             </div>
          </div>
       </div>
    </div>
 </section>
