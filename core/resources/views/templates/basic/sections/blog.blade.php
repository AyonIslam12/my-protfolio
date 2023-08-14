@php
    $content = @getContent('blog.content',true)->data_values;
    $elements = @getContent('blog.element',false,3,1);
@endphp
<section class="w-100 float-left blog-con padding-top padding-bottom position-relative" id="blog">
    <div class="container">
       <div class="blog-inner-con position-relative">
          <div class="generic-title text-center">
            <h6>{{ __(@$content->title) }}</h6>
            <h2 class="text-light">{{ __(@$content->heading) }}</h2>
          </div>
          <div class="blog-box wow fadeInUp" >
             <div class="row">
                @foreach ($elements ?? [] as $item)
                <div class="col-lg-4">
                    <div class="blog-box-item">
                       <div class="blog-img">
                          <a href="javascript:void(0)" class="detailsBtnB" data-title ="{{ @$item->data_values->title }}" data-img="{{getImage('assets/images/frontend/blog/'.@$item->data_values->blog_image)}}" data-details ="{{ $item->data_values->description_nic }}">
                             <figure class="mb-0">
                                <img src="{{getImage('assets/images/frontend/blog/'.@$item->data_values->blog_image)}}" alt="blog-img" class="img-fluid">
                             </figure>
                          </a>
                       </div>
                       <div class="blog-content">
                          <div class="blog-auteher-title">
                              <span>{{ __("Md. Mehedi Hasan") }}</span>
                             <span class="float-lg-right">{{ __(diffForHumans(@$item->created_at)) }}</span>
                          </div>
                          <a href="javascript:void(0)" class="detailsBtnB" data-title ="{{ @$item->data_values->title }}" data-img="{{getImage('assets/images/frontend/blog/'.@$item->data_values->blog_image)}}" data-details ="{{ $item->data_values->description_nic }}">
                             <h5>{{ __(@$item->data_values->title) }}</h5>
                          </a>
                          <p>{{shortDescription(strip_tags(@$item->data_values->description_nic,200))}}</p>
                          <a href="javascript:void(0)" class="detailsBtnB" data-title ="{{ @$item->data_values->title }}" data-img="{{getImage('assets/images/frontend/blog/'.@$item->data_values->blog_image)}}" data-details ="{{ $item->data_values->description_nic }}">Read More</a>
                       </div>
                    </div>
                 </div>
                @endforeach

             </div>
          </div>
       </div>
    </div>
 </section>
 <div id="detailsModelB" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
          </div>
          <div class="modal-body service-model-content">
             <figure class="mb-0">
                <img src="" alt="details-image" class="img-thumbnail _image rounded">
             </figure>
             <h4 class="_title">--</h4>
             <p class="mb-md-4 mb-2 _details text-justify" >--</p>
          </div>
       </div>
    </div>
 </div>
 @push('script')
 <script>
     (function ($) {
         "use strict";
        $('.detailsBtnB').on('click', function() {
            var modal = $('#detailsModelB');
            var title = $(this).data('title');
            $('._title').text(title);
            var image = $(this).data('img');
            $('._image').attr('src',image);
            var details = $(this).data('details');
            $('._details').html(details);
            modal.modal('show');
        });
    })(jQuery);
    </script>
@endpush
