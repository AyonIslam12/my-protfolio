@php
    $expertice_element = getContent('expertise.element',false,'',1);
    $expertice_content = getContent('expertise.content',true)->data_values;
@endphp
<section class="w-100 float-left service-con padding-top padding-bottom position-relative" id="service-con" >
    <div class="container">
       <div class="service-inner-con position-relative">
          <div class="generic-title text-center">
             <h6>{{ @$expertice_content->title }}</h6>
             <h2 class="mb-0">{{ @$expertice_content->heading }}</h2>
          </div>
          <div class="service-box wow fadeInUp">
             <div class="row">
                @foreach ($expertice_element ?? [] as  $item)
                    <div class="col-lg-6 col-md-6 pb-3">
                        <div class="service-box-item">
                        <figure class="mb-0">
                            <img src="{{getImage('assets/images/frontend/expertise/'.@$item->data_values->img)}}" alt="service-icon" class="img-fluid">
                        </figure>
                        <div class="service-box-item-content">
                            <h4>{{ @$item->data_values->title }}</h4>
                            <p>{{shortDescription(strip_tags(@$item->data_values->details,200))}}</p>
                            <a href="javascript:void(0)" class="detailsBtnE" data-title ="{{ @$item->data_values->title }}" data-img="{{getImage('assets/images/frontend/expertise/'.@$item->data_values->details_img)}}" data-details ="{{ $item->data_values->details }}">{{ __("Read More") }}</a>
                        </div>
                        </div>
                    </div>
                @endforeach
             </div>

          </div>
       </div>
    </div>
 </section>
 <div id="detailsModelE" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
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
        $('.detailsBtnE').on('click', function() {
            var modal = $('#detailsModelE');
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
