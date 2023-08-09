@php
    $skills_element = getContent('skills.element',false,'',1);
    $skills_content = getContent('skills.content',true)->data_values;
@endphp

<section class="w-100 float-left skill-con padding-top padding-bottom position-relative" id="about-con">
    <figure class="mb-0 myskils">
       <img src="{{asset($activeTemplateTrue.'/')}}/image/myskills-left-img.png" alt="">
    </figure>
    <div class="container">
       <div class="skill-inner-con position-relative">
          <div class="row">
             <div class="col-lg-6 order-lg-0 order-2">
                <div class="skill-left-con text-center wow slideInLeft" >
                   <div class="row service-skill-sttaf-con">
                    @foreach ( $skills_element as $key =>  $skill)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 {{ $key == 1 ? 'pb-5': ''}}">
                        <div class="skill-left-item-con">
                           <div class="circle-wrap secondPercentage">
                              <div class="circle">
                                 <div class="mask full">
                                    <div class="fill"></div>
                                 </div>
                                 <div class="mask half">
                                    <div class="fill"></div>
                                 </div>
                                 <div class="inside-circle">
                                    <div class="service-skill-sttaf-item-con">
                                       <div class="service-skill-sttaf-item-title service-skill-sttaf-item1-con d-flex align-items-center justify-content-center">
                                          <h4 class="d-table-cell align-middle mb-0 text-center count">{{ @$skill->data_values->perchant }}</h4>
                                          <span class="static-txt2">%</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="service-skill-sttaf-item-heading">
                              <p class="mb-0">{{ __(@$skill->data_values->title) }}</p>
                           </div>
                        </div>
                     </div>
                    @endforeach

                   </div>
                </div>
             </div>
             <div class="col-lg-6 d-flex align-items-center">
                <div class="skill-right-con wow slideInRight" >
                   <h6>{{ __(@$skills_content->title) }}</h6>
                   <h3 class="text-light">{{ __(@$skills_content->heading) }}</h3>
                   <p class="text-justify">{{ __(@$skills_content->sub_heading) }}</p>

                   <div class="generic-btn download-bnt">
                      <a href="{{ getImage('assets/'.'Md.Mehedi-Hasan.pdf') }}"  target="_blank">Check My CV</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</section>
