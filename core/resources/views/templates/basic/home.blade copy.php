@extends($activeTemplate.'layouts.frontend')

@section('content')
      <!-- service section -->
      <section class="w-100 float-left service-con padding-top padding-bottom position-relative" id="service-con" >
        <div class="container">
           <div class="service-inner-con position-relative">
              <div class="generic-title text-center">
                 <h6>My Expertise</h6>
                 <h2 class="mb-0">Provide Wide Range of<br>
                    Digital Services
                 </h2>
              </div>
              <div class="service-box wow fadeInUp">
                 <div class="row">
                    <div class="col-lg-6 col-md-6">
                       <div class="service-box-item">
                          <figure class="mb-0">
                             <img src="{{asset($activeTemplateTrue.'/')}}/image/service-icon1.png" alt="service-icon" class="img-fluid">
                          </figure>
                          <div class="service-box-item-content">
                             <h4>Ui/Ux Design</h4>
                             <p>Dolor repellendus temporibus autem
                                quibusdam officiis debitis rerum neces
                                aibus minima veniam.
                             </p>
                             <a href="#" data-toggle="modal" data-target="#Ui-Design">Read More</a>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                       <div class="service-box-item">
                          <figure class="mb-0">
                             <img src="{{asset($activeTemplateTrue.'/')}}/image/service-icon2.png" alt="service-icon" class="img-fluid">
                          </figure>
                          <div class="service-box-item-content">
                             <h4>Web Design</h4>
                             <p>Dolor repellendus temporibus autem
                                quibusdam officiis debitis rerum neces
                                aibus minima veniam.
                             </p>
                             <a href="#" data-toggle="modal" data-target="#web-design">Read More</a>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="row mb-0">
                    <div class="col-lg-6 col-md-6">
                       <div class="service-box-item">
                          <figure class="mb-0">
                             <img src="{{asset($activeTemplateTrue.'/')}}/image/service-icon3.png" alt="service-icon" class="img-fluid">
                          </figure>
                          <div class="service-box-item-content">
                             <h4>Web Development</h4>
                             <p>Dolor repellendus temporibus autem
                                quibusdam officiis debitis rerum neces
                                aibus minima veniam.
                             </p>
                             <a href="#" data-toggle="modal" data-target="#web-development">Read More</a>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                       <div class="service-box-item mb-0">
                          <figure class="mb-0">
                             <img src="{{asset($activeTemplateTrue.'/')}}/image/service-icon4.png" alt="service-icon" class="img-fluid">
                          </figure>
                          <div class="service-box-item-content">
                             <h4>App Development</h4>
                             <p>Dolor repellendus temporibus autem
                                quibusdam officiis debitis rerum neces
                                aibus minima veniam.
                             </p>
                             <a href="#" data-toggle="modal" data-target="#app-development">Read More</a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- service section -->
     <!-- skill section -->
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
                          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                             <div class="skill-left-item-con">
                                <div class="circle-wrap firstPercentage">
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
                                               <h4 class="d-table-cell align-middle mb-0 text-center count">75</h4>
                                               <span class="static-txt2">%</span>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="service-skill-sttaf-item-heading">
                                   <p class="mb-0">Graphic Design</p>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
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
                                            <div class="service-skill-sttaf-item-title service-skill-sttaf-item2-con text-center d-flex align-items-center justify-content-center">
                                               <h4 class=" mb-0 text-center count">95</h4>
                                               <span class=" static-txt2">%</span>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="service-skill-sttaf-item-heading">
                                   <p class="mb-0">Web Designing</p>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="row service-skill-sttaf-con">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                             <div class="skill-left-item-con">
                                <div class="circle-wrap thirdPercentage">
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
                                               <h4 class="d-table-cell align-middle mb-0 text-center count">85</h4>
                                               <span class="static-txt2">%</span>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="service-skill-sttaf-item-heading">
                                   <p class="mb-0">Branding Design</p>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
                             <div class="skill-left-item-con">
                                <div class="circle-wrap fourPercentage">
                                   <div class="circle">
                                      <div class="mask full">
                                         <div class="fill"></div>
                                      </div>
                                      <div class="mask half">
                                         <div class="fill"></div>
                                      </div>
                                      <div class="inside-circle">
                                         <div class="service-skill-sttaf-item-con">
                                            <div class="service-skill-sttaf-item-title service-skill-sttaf-item2-con text-center d-flex align-items-center justify-content-center">
                                               <h4 class=" mb-0 text-center count">80</h4>
                                               <span class=" static-txt2">%</span>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="service-skill-sttaf-item-heading">
                                   <p class="mb-0">Web Development</p>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6 d-flex align-items-center">
                    <div class="skill-right-con wow slideInRight" >
                       <h6>My Skills</h6>
                       <h2>Beautiful & Unique
                          Digital Experiences
                       </h2>
                       <p>Nostrum exercitationem ullam corporis suscipit laborioa
                          nisi ut aliquid exrea commodi consequatur magni dolores
                          aos qui ratione voluptatem nesciunt.
                       </p>
                       <p>Quia voluptas sit aspernatur aut odit aut fugit, sed ruiano
                          consequntar magni dolores.
                       </p>
                       <div class="generic-btn download-bnt">
                          <a href="#" id="downloadImg" onclick="downloadImage()">Download CV</a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- skill section -->
     <!-- portfolio section -->
     <section class="w-100 float-left portfolio-con padding-top" id="Portfolio">
        <div class="container">
           <div class="generic-title text-center">
              <h6 class="text-white">Creative Works</h6>
              <h2 class="mb-0 text-white">Check My Portfolio</h2>
           </div>
           <div id="myBtnContainer" class="text-center">
              <button class=" active active_button" onclick="filterSelection('all')"> All </button>
              <button class="" onclick="filterSelection('cars')">Products </button>
              <button class="" onclick="filterSelection('animals')">Web App</button>
              <button class="" onclick="filterSelection('fruits')"> Inetraction </button>
              <button class="" onclick="filterSelection('colors')">Brand Identity</button>
           </div>
        </div>
     </section>
     <!-- portfolio section -->
     <!-- portfolio section -->
     <section class="w-100 float-left portfolio-body-con position-relative">
        <div class="container">
           <div class="portfolio-img-con position-relative w-100 float-left wow fadeInUp" >
              <div class="filterDiv cars position-relative">
                 <a href="#" data-toggle="modal" data-target="#modalWPWAF">
                    <div class="portfolio-img position-relative">
                       <figure>
                          <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-img1.png" alt="portfolio-img1" class="img-fluid">
                       </figure>
                    </div>
                 </a>
                    <div class="portfolio-img-content text-left">
                       <div class="portfolio-img-title d-inline-block">
                          <h4>Application UI Design</h4>
                          <p>Dolar repellendus temporibus...</p>
                       </div>
                    <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modalWPWAF-icon">
                     <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i>
                 </a>
                 </div>

              </div>
              <div class="filterDiv colors fruits position-relative">
                 <a href="#" data-toggle="modal" data-target="#modalporfolio2">
                    <div class="portfolio-img position-relative">
                       <figure>
                          <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-img2.png" alt="portfolio-img1" class="img-fluid">
                       </figure>
                    </div>
                 </a>
                    <div class="portfolio-img-content text-left">
                       <div class="portfolio-img-title d-inline-block">
                          <h4 >Furni furniture UI Design</h4>
                          <p >Dolar repellendus temporibus...</p>
                       </div>
                    <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modalporfolio2-icon">
                    <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i>
                    </a>
                 </div>

              </div>
              <div class="filterDiv cars position-relative">
                 <a href="#" data-toggle="modal" data-target="#modalporfolio3">
                    <div class="portfolio-img position-relative">
                       <figure>
                          <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-img3.png" alt="portfolio-img1" class="img-fluid">
                       </figure>
                    </div>
                 </a>
                    <div class="portfolio-img-content text-left">
                       <div class="portfolio-img-title d-inline-block">
                          <h4 >Mobile UI Design</h4>
                          <p >Dolar repellendus temporibus...</p>
                       </div>
                 <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modalporfolio3-icon"><i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i></a>
                 </div>

              </div>
              <div class="filterDiv colors position-relative">
                 <a href="#" data-toggle="modal" data-target="#modalporfolio4">
                    <div class="portfolio-img position-relative">
                       <figure>
                          <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-img4.png" alt="portfolio-img1" class="img-fluid">
                       </figure>
                    </div>
                 </a>
                    <div class="portfolio-img-content text-left">
                       <div class="portfolio-img-title d-inline-block">
                          <h4 >Businesscard UI Design</h4>
                          <p >Dolar repellendus temporibus...</p>
                       </div>
                 <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modalporfolio4-icon"><i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i></a>
                 </div>

              </div>
              <div class="filterDiv cars animals position-relative">
                 <a href="#" data-toggle="modal" data-target="#modalporfolio5">
                    <div class="portfolio-img position-relative">
                       <figure>
                          <img src="{{asset($activeTemplateTrue.'/')}}/image/portfolio-img5.png" alt="portfolio-img1" class="img-fluid">
                       </figure>
                    </div>
                 </a>
                    <div class="portfolio-img-content text-left">
                       <div class="portfolio-img-title d-inline-block">
                          <h4 >Real estate UI Design</h4>
                          <p >Dolar repellendus temporibus...</p>
                       </div>
                 <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modalporfolio5-icon"><i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i></a>
                 </div>

              </div>
           </div>
        </div>
     </section>
     <!-- portfolio section -->
     <!-- tastimonials section -->
     <section class="w-100 float-left padding-top padding-bottom tastimonials-con position-relative text-lg-left text-center" id="testimonials">
        <div class="container">
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
                       <div class="carousel-item active">
                          <div class="testimonials-content">
                             <h6>Testimonials</h6>
                             <h2>Happy Clients Feedback</h2>
                             <figure class="mb-0">
                                <img src="{{asset($activeTemplateTrue.'/')}}/image/comma-icon.png" alt="comma-icon" class="img-fluid">
                             </figure>
                             <div class="testimonials-inner-content">
                                <p>Quisruam est, qui dolorem ipsum quia dolor sit amet, consecteaur
                                   aeci velit, sed quia non numquam eius modi tempora incidunt ut lao
                                   magnam aliquam quaerat voluptatem reprehenderit in voluptate
                                   cillum dolore eu fugiat nulla pariatur maxime...
                                </p>
                                <span class="d-block auther-name">Kevin Andrew</span>
                                <span class="d-block">CEO  of the company</span>
                             </div>
                          </div>
                       </div>
                       <div class="carousel-item">
                          <div class="testimonials-content">
                             <h6>Testimonials</h6>
                             <h2>Happy Clients Feedback</h2>
                             <figure class="mb-0">
                                <img src="{{asset($activeTemplateTrue.'/')}}/image/comma-icon.png" alt="comma-icon" class="img-fluid">
                             </figure>
                             <div class="testimonials-inner-content">
                                <p>Quisruam est, qui dolorem ipsum quia dolor sit amet, consecteaur
                                   aeci velit, sed quia non numquam eius modi tempora incidunt ut lao
                                   magnam aliquam quaerat voluptatem reprehenderit in voluptate
                                   cillum dolore eu fugiat nulla pariatur maxime...
                                </p>
                                <span class="d-block auther-name">Kevin Andrew</span>
                                <span class="d-block">CEO  of the company</span>
                             </div>
                          </div>
                       </div>
                       <div class="carousel-item">
                          <div class="testimonials-content">
                             <h6>Testimonials</h6>
                             <h2>Happy Clients Feedback</h2>
                             <figure class="mb-0">
                                <img src="{{asset($activeTemplateTrue.'/')}}/image/comma-icon.png" alt="comma-icon" class="img-fluid">
                             </figure>
                             <div class="testimonials-inner-content">
                                <p>Quisruam est, qui dolorem ipsum quia dolor sit amet, consecteaur
                                   aeci velit, sed quia non numquam eius modi tempora incidunt ut lao
                                   magnam aliquam quaerat voluptatem reprehenderit in voluptate
                                   cillum dolore eu fugiat nulla pariatur maxime...
                                </p>
                                <span class="d-block auther-name">Kevin Andrew</span>
                                <span class="d-block">CEO  of the company</span>
                             </div>
                          </div>
                       </div>
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
     <!-- tastimonials section -->
     <!-- blog section -->
     <section class="w-100 float-left blog-con padding-top padding-bottom position-relative" id="blog">
        <div class="container">
           <div class="blog-inner-con position-relative">
              <div class="generic-title text-center">
                 <h6>Latest News</h6>
                 <h2 class="mb-0">Blog & Articles</h2>
              </div>
              <div class="blog-box wow fadeInUp" >
                 <div class="row">
                    <div class="col-lg-4">
                       <div class="blog-box-item">
                          <div class="blog-img">
                             <a href="#" data-toggle="modal" data-target="#blog-model-1">
                                <figure class="mb-0">
                                   <img src="{{asset($activeTemplateTrue.'/')}}/image/blog-img-1.png" alt="blog-img" class="img-fluid">
                                </figure>
                             </a>
                          </div>
                          <div class="blog-content">
                             <div class="blog-auteher-title">
                                <span>By David William</span>
                                <span class="float-lg-right">Mar 8, 2022</span>
                             </div>
                             <a href="#" data-toggle="modal" data-target="#blog-model-1">
                                <h4>Quis autem vea eum
                                   iure reprehenderit
                                </h4>
                             </a>
                             <p>Dolor repellendus temporibus autem
                                quibusdam officiis debitis rerum nece
                                aibus minima veniam.
                             </p>
                             <a href="#" data-toggle="modal" data-target="#blog-model-1">Read More</a>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="blog-box-item">
                          <div class="blog-img">
                             <a href="#" data-toggle="modal" data-target="#blog-model-2">
                                <figure class="mb-0">
                                   <img src="{{asset($activeTemplateTrue.'/')}}/image/blog-img-2.png" alt="blog-img" class="img-fluid">
                                </figure>
                             </a>
                          </div>
                          <div class="blog-content">
                             <div class="blog-auteher-title">
                                <span>By John Doe</span>
                                <span class="float-lg-right">Mar 9, 2022</span>
                             </div>
                             <a href="#" data-toggle="modal" data-target="#blog-model-2">
                                <h4>Reprehenderit in vouta
                                   velit esse cillum
                                </h4>
                             </a>
                             <p>Dolor repellendus temporibus autem
                                quibusdam officiis debitis rerum nece
                                aibus minima veniam.
                             </p>
                             <a href="#" data-toggle="modal" data-target="#blog-model-2">Read More</a>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-4">
                       <div class="blog-box-item mb-0">
                          <div class="blog-img">
                             <a href="#" data-toggle="modal" data-target="#blog-model-3">
                                <figure class="mb-0">
                                   <img src="{{asset($activeTemplateTrue.'/')}}/image/blog-img-3.png" alt="blog-img" class="img-fluid">
                                </figure>
                             </a>
                          </div>
                          <div class="blog-content">
                             <div class="blog-auteher-title">
                                <span>By Elina Parker</span>
                                <span class="float-lg-right">Mar 10, 2022</span>
                             </div>
                             <a href="#" data-toggle="modal" data-target="#blog-model-3">
                                <h4>Soluta nobis ose aligen
                                optio cumue
                             </h4>
                             </a>
                             <p>Dolor repellendus temporibus autem
                                quibusdam officiis debitis rerum nece
                                aibus minima veniam.
                             </p>
                             <a href="#" data-toggle="modal" data-target="#blog-model-3">Read More</a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- blog section -->
     <!-- form section -->
     <section class="w-100 float-left form-main-con padding-top padding-bottom" id="Contact">
        <div class="container">
           <div class="form-main-inner-con position-relative">
              <div class="generic-title text-center">
                 <h6>Get in Touch</h6>
                 <h2 class="mb-0">Any Questions? Feel Free<br>
                    to Contact
                 </h2>
              </div>
              <div class="row">
                 <div class="col-lg-4 order-lg-0 order-2">
                    <div class="contact-information position-relative wow slideInLeft" >
                       <ul class="list-unstyled">
                          <li>
                             <figure class="mb-0 d-flex align-items-center justify-content-center">
                                <img src="{{asset($activeTemplateTrue.'/')}}/image/location-icon.png" alt="location-icon" class="img-fluid">
                             </figure>
                             <div class="contact-information-content">
                                <h5>Address:</h5>
                                <p class="mb-0">121 King Street Melbourne,
                                   3000, Australia
                                </p>
                             </div>
                          </li>
                          <li>
                             <figure class="mb-0 d-flex align-items-center justify-content-center">
                                <img src="{{asset($activeTemplateTrue.'/')}}/image/message-icon.png" alt="message-icon" class="img-fluid">
                             </figure>
                             <div class="contact-information-content">
                                <h5>Email:</h5>
                                <p class="mb-0">Info@folioflix.com</p>
                                <p class="mb-0">folioflix@gmail.com</p>
                             </div>
                          </li>
                          <li class="mb-0">
                             <figure class="mb-0 d-flex align-items-center justify-content-center">
                                <img src="{{asset($activeTemplateTrue.'/')}}/image/phone-icon.png" alt="phone-icon" class="img-fluid">
                             </figure>
                             <div class="contact-information-content">
                                <h5>Phone:</h5>
                                <p class="mb-0">+61 3 8376 6284</p>
                                <p class="mb-0">+800 2345 6789</p>
                             </div>
                          </li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-lg-8">
                     <div id="form_result">

                     </div>

                    <form id= "contactpage" method="POST" class="contact-form wow slideInRight text-lg-left text-center" >
                       <div class="row">
                          <div class="col-lg-6 col-md-6">
                             <div class="form-group mb-0">
                                <input type="text"  placeholder="Name"      name="name" id="name" autocomplete="off" required>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                             <div class="form-group mb-0">
                                <input type="email" id="emailHelp" name="emailHelp" placeholder="Email" autocomplete="off" required>
                                <small class="form-text text-muted"></small>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                             <div class="form-group mb-0">
                                <input type="tel"  placeholder="Phone" name="phone" id="phone" required>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-6">
                             <div class="form-group mb-0">
                                <input type="text" name="subject"  placeholder="Subject" id="subject">
                             </div>
                          </div>
                       </div>
                       <div class="row">
                          <div class="col-lg-12">
                             <div class=" form-group mb-0">
                                <textarea  placeholder="Message" rows="3" name="comments" id="comments"></textarea>
                             </div>
                          </div>
                       </div>
                       <button type="submit" id="submit" class="appointment-btn">Submit</button>
                    </form>

                 </div>
              </div>
           </div>
        </div>
     </section>
@endsection
