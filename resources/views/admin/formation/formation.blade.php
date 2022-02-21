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
          
    
<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> List de contact </h4>
                <hr>
               
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> title</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> descreptio</th>
                    <th class="hidden-phone"><i class="fa fa-envelope"></i> date_debut</th>
                    <th class="hidden-phone"><i class="fa fa-envelope"></i> date_fin</th>
                   
                    <th></th>
                    
                  </tr>
                </thead>
                <tbody>
                @foreach($formation as $u)
                  <tr>
                    <td>
                      {{$u['title']}}
                    </td>
                    <td class="hidden-phone">{{$u['descreption']}}</td>
                    <td class="hidden-phone">{{$u['date_debut']}}</td>
                    <td class="hidden-phone">{{$u['date_fin']}}</td>
                    <td>
                      <form action="{{  route('formations.destroy', $u->id) }}" method="POST">
                          @csrf 
                          @method('delete')
                          <button type="submit" class="btn btn-theme04">Delete</button>
                      </form>

                      <button  class="btn btn-theme" > <a href="{{  route('formations.edit' , $u->id )}}">modifier</a> </button>
                    </td>
                  </tr>
                  
                </tbody>
                
               @endforeach
              </table>
              {!! $formation->links() !!}
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>


     
   @endsection


   
</body>
</html>