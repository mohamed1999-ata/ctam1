@extends('frontend.formation.home1')




    

@section('formation')

<div  class="container" >

@if ($message = Session::get('success'))

            <div class="alert alert-success">

           <p>{{ $message }}</p>
                @endif

    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> {{__('messages.inscr')}}</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            
            <form class="contact-form php-mail-form" role="form" action="{{ url('/inscription') }}" method="POST" enctype="multipart/form-data">
               @csrf 
              <div class="form-group">
                <input type="name" name="name" class="form-control" id="contact-name" placeholder="{{__('messages.name_')}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
             
              <div class="form-group">
                <input type="text" name="telephone" class="form-control" id="contact-subject" placeholder="{{__('messages.telephone_')}}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <input type="email" name="email" class="form-control" id="contact-email" placeholder="{{__('messages.email_')}}" data-rule="email" data-msg="Please enter a valid email">
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <input type="text" name="title_de_formation" class="form-control" id="contact-subject" value="{{$formation->title}}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>
             
              <div class="form-group">
                <input type="text" name="formation_id" class="form-control" id="contact-subject" value="{{$formation->id}}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                <div class="validate"></div>
              </div>
              <div class="loading"></div>
              <div class="error-message"></div>
              

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">{{__('messages.send')}}</button>
              </div>

            </form>
            
             
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">{{$formation['title']}}</h4>
            <p></p>
            <ul class="contact_details">
              {{$formation->descreption}}
            </ul>
            <!-- contact_details -->
          </div>
        </div>
        <!-- /row -->


        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>

</div>



  



@endsection 