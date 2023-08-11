<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> {{ $general->sitename(__($pageTitle)) }}</title>

  {{-- @include('partials.seo') --}}

  <link rel="shortcut icon" type="image/png" href="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}">
  <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/animate.css">
  <script src="https://kit.fontawesome.com/c4f7856497.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/bootstarp/bootstrap.min.css">
  <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/super-classes.css">
  <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/style.css">
  <link rel="stylesheet" href="{{asset($activeTemplateTrue.'/')}}/css/mobile.css">
  <link href="{{ asset($activeTemplateTrue.'color/color.php') }}?color={{$general->base_color}}" rel="stylesheet" />
  @stack('style-lib')

  @stack('style')
</head>
  <body>
    @include($activeTemplate.'partials.header')
    @yield('content')
     @include($activeTemplate.'partials.footer')
     <a id="button"></a>
     <div id="modalWPWAF" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
              </div>
              <div class="modal-body service-model-content">
                 <figure class="mb-0">
                    <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-model-img1.html" alt="portfolio-model-img1" class="img-fluid">
                 </figure>
                 <h4>Application UI Design</h4>
                 <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                 <ul class="list-unstyled model-list mb-md-3 mb-2">
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                 </ul>
                 <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
           </div>
        </div>
     </div>
     <div id="modalWPWAF-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
              </div>
              <div class="modal-body service-model-content">
                 <figure class="mb-0">
                    <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-model-img1.html" alt="portfolio-model-img1" class="img-fluid">
                 </figure>
                 <h4>Application UI Design</h4>
                 <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                 <ul class="list-unstyled model-list mb-md-3 mb-2">
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                 </ul>
                 <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
           </div>
        </div>
     </div>
     <div id="modalporfolio2" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
              </div>
              <div class="modal-body service-model-content">
                 <figure class="mb-0">
                    <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-model-img2.html" alt="portfolio-model-img1" class="img-fluid">
                 </figure>
                 <h4>Furni furniture UI Design</h4>
                 <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                 <ul class="list-unstyled model-list mb-md-3 mb-2">
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                 </ul>
                 <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
           </div>
        </div>
     </div>
     <div id="modalporfolio2-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
              </div>
              <div class="modal-body service-model-content">
                 <figure class="mb-0">
                    <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-model-img2.html" alt="portfolio-model-img1" class="img-fluid">
                 </figure>
                 <h4>Furni furniture UI Design</h4>
                 <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                 <ul class="list-unstyled model-list mb-md-3 mb-2">
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                 </ul>
                 <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
           </div>
        </div>
     </div>
     <div id="modalporfolio3" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
              </div>
              <div class="modal-body service-model-content">
                 <figure class="mb-0">
                    <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-model-img3.html" alt="portfolio-model-img1" class="img-fluid">
                 </figure>
                 <h4>Mobile UI Design</h4>
                 <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                 <ul class="list-unstyled model-list mb-md-3 mb-2">
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                 </ul>
                 <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
           </div>
        </div>
     </div>
     <div id="modalporfolio3-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
              </div>
              <div class="modal-body service-model-content">
                 <figure class="mb-0">
                    <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-model-img3.html" alt="portfolio-model-img1" class="img-fluid">
                 </figure>
                 <h4>Mobile UI Design</h4>
                 <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                 <ul class="list-unstyled model-list mb-md-3 mb-2">
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                 </ul>
                 <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
           </div>
        </div>
     </div>
     <div id="modalporfolio4" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
              </div>
              <div class="modal-body service-model-content">
                 <figure class="mb-0">
                    <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-model-img4.html" alt="portfolio-model-img1" class="img-fluid">
                 </figure>
                 <h4>Businesscard UI Design</h4>
                 <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                 <ul class="list-unstyled model-list mb-md-3 mb-2">
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                 </ul>
                 <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
           </div>
        </div>
     </div>
     <div id="modalporfolio4-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
              </div>
              <div class="modal-body service-model-content">
                 <figure class="mb-0">
                    <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-model-img4.html" alt="portfolio-model-img1" class="img-fluid">
                 </figure>
                 <h4>Businesscard UI Design</h4>
                 <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                 <ul class="list-unstyled model-list mb-md-3 mb-2">
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                 </ul>
                 <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
           </div>
        </div>
     </div>
     <div id="modalporfolio5" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
              </div>
              <div class="modal-body service-model-content">
                 <figure class="mb-0">
                    <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-model-img5.png" alt="portfolio-model-img1" class="img-fluid">
                 </figure>
                 <h4>Real estate UI Design</h4>
                 <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                 <ul class="list-unstyled model-list mb-md-3 mb-2">
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                 </ul>
                 <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
           </div>
        </div>
     </div>
     <div id="modalporfolio5-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
              </div>
              <div class="modal-body service-model-content">
                 <figure class="mb-0">
                    <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-model-img5.html" alt="portfolio-model-img1" class="img-fluid">
                 </figure>
                 <h4>Real estate UI Design</h4>
                 <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                 <ul class="list-unstyled model-list mb-md-3 mb-2">
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                    <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                 </ul>
                 <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
           </div>
        </div>
     </div>

     <div id="blog-model-2" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
              </div>
              <div class="modal-body">
                 <div class="blog-box-item mb-0">
                    <div class="blog-img">
                       <figure class="mb-0">
                          <img src="{{asset($activeTemplateTrue.'/')}}/image/blog-model-img2.png" alt="blog-img" class="img-fluid">
                       </figure>
                    </div>
                    <div class="blog-content pl-0 pr-0">
                       <div class="blog-auteher-title">
                          <span>By Elina Parker</span>
                          <span class="float-lg-right">Mar 9, 2022</span>
                       </div>
                       <h4>Reprehenderit in vouta
                          velit esse cillum
                       </h4>
                       <div class="footer-social-icon mb-0">
                          <ul>
                             <li class="d-inline-block">
                                <a href="https://www.behance.net/"><i class="fab fa-behance d-flex align-items-center justify-content-center"></i></a>
                             </li>
                             <li class="d-inline-block">
                                <a href="https://dribbble.com/"><i class="fab fa-dribbble d-flex align-items-center justify-content-center"></i></a>
                             </li>
                             <li class="d-inline-block">
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                             </li>
                          </ul>
                       </div>
                       <p class="mb-md-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat, eget tincidunt eros diam quis nunc.</p>
                       <h4 class="comment-title">LEAVE A COMMENT</h4>
                       <form class="contact-form blog-model-form">
                          <div class="row">
                             <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-0">
                                   <input type="text" placeholder="Name" name="name">
                                </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-0">
                                   <input type="email" placeholder="Email">
                                   <small class="form-text text-muted"></small>
                                </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-0">
                                   <input type="tel" placeholder="Phone">
                                </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-0">
                                   <input type="text" placeholder="Subject">
                                </div>
                             </div>
                          </div>
                          <div class="row">
                             <div class="col-lg-12">
                                <div class=" form-group mb-0">
                                   <textarea placeholder="Message" rows="3" name="comments"></textarea>
                                </div>
                             </div>
                          </div>
                          <button type="submit" class="appointment-btn">Submit</button>
                       </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <div id="blog-model-3" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
              <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
              </div>
              <div class="modal-body">
                 <div class="blog-box-item mb-0">
                    <div class="blog-img">
                       <figure class="mb-0">
                          <img src="{{asset($activeTemplateTrue.'/')}}/image/blog-model-img1.png" alt="blog-img" class="img-fluid">
                       </figure>
                    </div>
                    <div class="blog-content pl-0 pr-0">
                       <div class="blog-auteher-title">
                          <span>By Elina Parker</span>
                          <span class="float-lg-right">Mar 10, 2022</span>
                       </div>
                       <h4>Soluta nobis ose aligen
                          optio cumue
                       </h4>
                       <div class="footer-social-icon mb-0">
                          <ul>
                             <li class="d-inline-block">
                                <a href="https://www.behance.net/"><i class="fab fa-behance d-flex align-items-center justify-content-center"></i></a>
                             </li>
                             <li class="d-inline-block">
                                <a href="https://dribbble.com/"><i class="fab fa-dribbble d-flex align-items-center justify-content-center"></i></a>
                             </li>
                             <li class="d-inline-block">
                                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                             </li>
                          </ul>
                       </div>
                       <p class="mb-md-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat, eget tincidunt eros diam quis nunc.</p>
                       <h4 class="comment-title">LEAVE A COMMENT</h4>
                       <form class="contact-form blog-model-form">
                          <div class="row">
                             <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-0">
                                   <input type="text" placeholder="Name" name="name">
                                </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-0">
                                   <input type="email" placeholder="Email">
                                   <small class="form-text text-muted"></small>
                                </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-0">
                                   <input type="tel" placeholder="Phone">
                                </div>
                             </div>
                             <div class="col-lg-6 col-md-6">
                                <div class="form-group mb-0">
                                   <input type="text" placeholder="Subject">
                                </div>
                             </div>
                          </div>
                          <div class="row">
                             <div class="col-lg-12">
                                <div class=" form-group mb-0">
                                   <textarea placeholder="Message" rows="3" name="comments"></textarea>
                                </div>
                             </div>
                          </div>
                          <button type="submit" class="appointment-btn">Submit</button>
                       </form>

                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>

    <script src="{{asset($activeTemplateTrue.'/')}}/js/wow.js"></script>
    <script>
       new WOW().init();
    </script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/jquery-3.6.0.min.js"> </script>
    {{-- <script src="../../ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script> --}}
    <script src="{{asset($activeTemplateTrue.'/')}}/js/popper.min.js"> </script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/bootstrap.min.js"> </script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/custom-script.js"> </script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/contact-form.js"></script>
    <script>
       filterSelection("all")
       function filterSelection(c) {
       var x, i;
       x = document.getElementsByClassName("filterDiv");
       if (c == "all") c = "";
       for (i = 0; i < x.length; i++) {
       w3RemoveClass(x[i], "show");
       if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
       }
       }

       function w3AddClass(element, name) {
       var i, arr1, arr2;
       arr1 = element.className.split(" ");
       arr2 = name.split(" ");
       for (i = 0; i < arr2.length; i++) {
       if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
       }
       }

       function w3RemoveClass(element, name) {
       var i, arr1, arr2;
       arr1 = element.className.split(" ");
       arr2 = name.split(" ");
       for (i = 0; i < arr2.length; i++) {
       while (arr1.indexOf(arr2[i]) > -1) {
       arr1.splice(arr1.indexOf(arr2[i]), 1);
       }
       }
       element.className = arr1.join(" ");
       }

       // Add active class to the current button (highlight it)
       var btnContainer = document.getElementById("myBtnContainer");
       var btns = btnContainer.getElementsByClassName("btn");
       for (var i = 0; i < btns.length; i++) {
       btns[i].addEventListener("click", function(){
       var current = document.getElementsByClassName("active");
       current[0].className = current[0].className.replace(" active", "");
       this.className += " active";
       });
       }
    </script>
    <script>
       var btn = $('#button');

       $(window).scroll(function() {
       if ($(window).scrollTop() > 300) {
       btn.addClass('show');
       } else {
       btn.removeClass('show');
       }
       });

       btn.on('click', function(e) {
       e.preventDefault();
       $('html, body').animate({scrollTop:0}, '300');
       });

    </script>
    <script>
       $(window).scroll(function(){

       if ($(window).scrollTop() >= 113) {

       $('header').addClass('fixed-header');
       $('.banner-main-con').addClass('banner-main-con2');

       }

       else {

       $('header').removeClass('fixed-header');
       $('.banner-main-con').removeClass('banner-main-con2');

       }

       });

    </script>
 <script>
document.querySelectorAll('.nav-item a').forEach(function(link, index){

link.addEventListener('click', function() {

if(this.classList.contains('is-active')) {

  this.classList.remove('is-active');

} else {

  const activeLink = document.querySelector('a.is-active'); // **

  if (activeLink) {                                         // **

      activeLink.classList.remove('is-active');             // **

  }                                                         // **

  this.classList.add('is-active');

}

});

});

document.querySelectorAll('#myBtnContainer button').forEach(function(link, index){

link.addEventListener('click', function() {

if(this.classList.contains('active_button')) {

  this.classList.remove('active_button');

} else {

  const activeLink = document.querySelector('#myBtnContainer button.active_button'); // **

  if (activeLink) {                                         // **

      activeLink.classList.remove('active_button');             // **

  }                                                         // **

  this.classList.add('active_button');

}

});

});
 </script>
   <script>
    function downloadImage() {
      source = '{{asset($activeTemplateTrue.'/')}}/image/cv-img.html';
    const fileName = 'test-image.html';
    var el = document.createElement("a");
    el.setAttribute("href", source);
    el.setAttribute("download", fileName);
    document.body.appendChild(el);
    el.click();
    el.remove();
    }
  </script>

   @stack('script-lib')

    @stack('script')

    @include('partials.notify')


    <script>
        (function ($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "{{route('home')}}/change/"+$(this).val() ;
            });

        })(jQuery)
    </script>

   </body>
 </html>
