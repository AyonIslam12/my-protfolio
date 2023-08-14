@php
    $social_icons = getContent('social_icon.element',false,'',1);
    $footer = getContent('footer.content',true)->data_values;
@endphp
<div class="w-100 float-left weight-footer-con position-relative">
    <div class="container">
       <div class="weight-footer-content text-center wow fadeInUp" >
          <figure class="">
             <img src="{{ getImage(imagePath()['logoIcon']['path'] .'/light_logo.png') }}" alt="footer-logo" class="img-fluid">
          </figure>
          <div class="footer-navbar">
             <ul class="list-unstyled">
                <li class="d-inline-block border-left-0 pl-0"><a href="{{route('home')}}">@lang('Home')</a></li>
                @foreach($pages as $k => $data)
                    <li class="d-inline-block pr-0">
                        <a  href="{{route('pages',[$data->slug])}}" >{{__($data->name)}}</a>
                    </li>
                @endforeach
                <li class="d-inline-block pr-0"><a href="{{ route('contact') }}">@lang('Contact')</a></li>
             </ul>
          </div>
          <div class="footer-social-icon">
             <ul class="mb-0">
                @foreach(@$social_icons as $icon)
                <li class="d-inline-block">
                   <a href="{{@$icon->data_values->url}}">@php echo $icon->data_values->social_icon @endphp</a>
                </li>
                @endforeach

             </ul>
          </div>
       </div>
       <div class="copy-right-content text-center">
          <p class="mb-0">{{__(@$footer->copy_right_text)}}</p>
       </div>
    </div>
</div>
