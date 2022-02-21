


   @extends('frontend.body.home1')




    

 @section('contact')

 <!--main content start-->
 <section id="main-content">
      <section class="wrapper">
      
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-4 col-sm-4">
            <h4 class="title">Contact Form</h4>
            <div id="message"></div>



            <div>
            <form action="{{ url('/addcontact') }}"  method="POST"  enctype="multipart/form-data" >
             @csrf 

              <div class="form-group">
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars"  require>
                <div class="validate"></div>
              </div>
              @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
               @enderror
              <div class="form-group">
                <input type="text" name="sujeut" class="form-control" id="contact-email" placeholder="Your subject" data-rule="email" data-msg="Please enter a valid email" require>
                <div class="validate"></div>
              </div>
              @error('sujet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              <div class="form-group">
                <input type="text" name="telephone" class="form-control" id="contact-subject" placeholder="Your Phone Number" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" require>
                <div class="validate"></div>
              </div>
              @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              <div class="form-group">
                <input type="email" name="email" class="form-control" id="contact-subject" placeholder="Your Email Adress " data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" require>
                <div class="validate"></div>
              </div>
              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              <div class="form-group">
                <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message" rows="5" data-rule="required" data-msg="Please write something for us" require ></textarea>
                <div class="validate"></div>
              </div>
              @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

              <div class="loading"></div>
             

              <div class="form-send">
                <button type="submit" class="btn  btn-primary">Send Message</button>
              </div>

            </form>
            </div>
           
            @if ($message = Session::get('success'))

         <div class="alert alert-success">

          <p>{{ $message }}</p>

         </div>

            @endif
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Contact Details</h4>
            <p> التونسي للتحكيم والوساطة خدمات أخرى من استشارات قانونية وجبائية،التدقيق المالي والاجتماعي والقانوني، التكوين كنشاط ثانوي</p>
            <ul class="contact_details">
              <li><i class="fa fa-envelope-o"></i> info@Arbitrationctam.org</li>
              <li><i class="fa fa-phone-square"></i> +216 71 766 022</li>
              <li><i class="fa fa-home"></i> Rue Mohamed Ben Taieb 2080 Ariana, Tunisie.</li>
            </ul>
            <!-- contact_details -->
          </div>
        </div>
        <!-- /row -->


        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>






  




   
    @endsection
    

      

  
