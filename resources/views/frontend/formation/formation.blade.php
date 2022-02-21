@extends('frontend.formation.home1')




    

@section('formation')

<div  class="container" >



<table>
<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> {{__('messages.forma')}} </h4>
                <hr>
               
                <thead>
                  <tr>
               
                    <th > {{__('messages.title')}}</th>
                    <th > {{__('messages.date_i')}}</th>
                   
                   
                   
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($formation as $u)
                  <tr>
                    <td>
                      <a href="{{  url('/formation' , $u )}}">{{$u['title']}}</a>
                    </td>
                   
                    <td >{{$u['date_debut']}}</td>
                    
                   
                    
                  </tr>
                  
                </tbody>
                
               @endforeach


</table>

</div>



  



@endsection 