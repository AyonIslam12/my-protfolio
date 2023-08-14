
@php
    $content = getContent('contact.content',true)->data_values;
@endphp
<section class="w-100 float-left form-main-con padding-top padding-bottom" id="Contact">
    <div class="container">
       <div class="form-main-inner-con position-relative">
          <div class="generic-title text-center">
             <h6>{{ __(@$content->title) }}</h6>
             <h2 class="mb-0">{{ __(@$content->heading) }}</h2>
          </div>
          <div class="row">
             <div class="col-lg-5 order-lg-0 order-2">
                <div class="contact-information position-relative wow slideInLeft" >
                   <ul class="list-unstyled">
                      <li>
                         <figure class="mb-0 d-flex align-items-center justify-content-center">
                            <img src="{{asset($activeTemplateTrue.'/')}}/image/location-icon.png" alt="location-icon" class="img-fluid">
                         </figure>
                         <div class="contact-information-content">
                            <h5>Address:</h5>
                            <p class="mb-0">{{ __(@$content->address) }}</p>
                         </div>
                      </li>
                      <li>
                         <figure class="mb-0 d-flex align-items-center justify-content-center">
                            <img src="{{asset($activeTemplateTrue.'/')}}/image/message-icon.png" alt="message-icon" class="img-fluid">
                         </figure>
                         <div class="contact-information-content">
                            <h5>Email:</h5>
                            <p class="mb-0">{{ __(@$content->email) }}</p>
                         </div>
                      </li>
                      <li class="mb-0">
                         <figure class="mb-0 d-flex align-items-center justify-content-center">
                            <img src="{{asset($activeTemplateTrue.'/')}}/image/phone-icon.png" alt="phone-icon" class="img-fluid">
                         </figure>
                         <div class="contact-information-content">
                            <h5>Phone:</h5>
                            <p class="mb-0">{{ __(@$content->mobile) }}</p>
                         </div>
                      </li>
                   </ul>
                </div>
             </div>
             <div class="col-lg-7">
                 <div id="form_result">
                 </div>

                <form id= "contactpage" action="{{ route('contact.submit') }}" method="POST" class="contact-form wow slideInRight text-lg-left text-center" >
                    @csrf
                   <div class="row">
                      <div class="col-lg-6 col-md-6">
                         <div class="form-group mb-0">
                            <input type="text"  placeholder="Name" name="name" id="name" autocomplete="off" required>
                         </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                         <div class="form-group mb-0">
                            <input type="email" id="emailHelp" name="email" placeholder="Email" autocomplete="off" required>
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
                            <input type="text" name="subject"  placeholder="Subject" id="subject" required>
                         </div>
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-lg-12">
                         <div class=" form-group mb-0">
                            <textarea  placeholder="Message" rows="3" name="message" id="comments" required></textarea>
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
