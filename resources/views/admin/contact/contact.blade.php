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
                    <th><i class="fa fa-bullhorn"></i> Name</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Subject</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Phone</th>
                    <th><i class="fa fa-envelope"></i> Email</th>
                    <th><i class=" fa fa-comment"></i> Message</th>
                  
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($contact as $c)
                  <tr>
                    <td>
                      <a href="basic_table.html#">{{$c['name']}}</a>
                    </td>
                    <td class="hidden-phone">{{$c['sujet']}}</td>
                    <td class="hidden-phone">{{$c['telephone']}}</td>
                    <td>{{$c['email']}} </td>
                    <td>{{$c['message']}}</td>
                    <td>
                    <form action="{{  url('/admin/deletecontact', $c['id']) }}" method="POST">
                          @csrf 
                          @method('delete')
                          <button type="submit" class="btn btn-theme04">Delete</button>
                      </form>
                      <a class="btn btn-info" href="#">Show</a>

                     
                    </td>
                  </tr>
                  
                </tbody>
                
               @endforeach
              </table>
              {!! $contact->links() !!}
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
   @endsection
    
</body>
</html>