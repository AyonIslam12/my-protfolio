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

    <script src="{{asset($activeTemplateTrue.'/')}}/js/wow.js"></script>
    <script>
       new WOW().init();
    </script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/jquery-3.6.0.min.js"> </script>
    {{-- <script src="../../ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script> --}}
    <script src="{{asset($activeTemplateTrue.'/')}}/js/popper.min.js"> </script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/bootstrap.min.js"> </script>
    <script src="{{asset($activeTemplateTrue.'/')}}/js/custom-script.js"> </script>
    {{-- <script src="{{asset($activeTemplateTrue.'/')}}/js/contact-form.js"></script> --}}
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
    //    var btnContainer = document.getElementById("myBtnContainer");
    //    var btns = btnContainer.getElementsByClassName("btn");
    //    for (var i = 0; i < btns.length; i++) {
    //    btns[i].addEventListener("click", function(){
    //    var current = document.getElementsByClassName("active");
    //    current[0].className = current[0].className.replace(" active", "");
    //    this.className += " active";
    //    });
    //    }
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
