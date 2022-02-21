@extends('admin.index')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
</head>
<body>
@section("contentt")
@if ($message = Session::get('success'))

<div class="alert alert-success">

  <p>{{ $message }}</p>

</div>

@endif
<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
             
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Registration List </h4>
                <hr>
              
                <thead>
                  <tr>
                    <th class="hidden-phone">  id_user </th>
                    <th class="hidden-phone">  id_formation </th>
                    <th class="hidden-phone">  name </th>
                    <th class="hidden-phone">  telephone </th>
                    <th class="hidden-phone">  email </th>
                    <th class="hidden-phone">  titre de formation  </th>
                   <th class="hidden-phone">     date d'inscrption </th>
                   <th class="hidden-phone">     status </th>

                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($inscreption as $inscri)
                  <tr>
                    <td> {{$inscri['users_id']}}</td>
                    <td class="hidden-phone">{{$inscri['formation_id']}}</td>
                    <td class="hidden-phone"> {{$inscri['name']}} </td>
                    <td class="hidden-phone"> {{$inscri['telephone']}} </td>
                    <td class="hidden-phone"> {{$inscri['email']}}</td>
                    <td class="hidden-phone" >{{ $inscri->title_de_formation}}</td>
                    <td class="hidden-phone"> {{$inscri['date_inscreption']}} </td>
                    <td>
                      @if($inscri->status == 1) 
        <form action="{{ route('completedUpdate', $inscri) }}" method="POST">
            {{ csrf_field() }}                          
            <button type="submit" class="btn btn-success" name="changeStatus" value="0">accepted</button>
        </form>                    
    @else
        <form action="{{ route('completedUpdate', $inscri) }}" method="POST">
            {{ csrf_field() }}                              
            <button type="submit" class="btn btn-default" name="changeStatus" value="1">loading</button>
        </form>                                                 
    @endif
</td>
             <td>
                    
             <form action="{{  route('inscreptions.destroy', $inscri->id) }}" method="POST">
                          @csrf 
                          @method('delete')
                          <button type="submit" class="btn btn-theme04">Delete</button>
                      </form>

                    </td>      
                        
               
                

                              
                 
                  
                    </td>
                  </tr>
                  
                </tbody>
                
               @endforeach
              </table>
              {!! $inscreption->links() !!}
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>


       





        
   @endsection
  
</body>
</html>