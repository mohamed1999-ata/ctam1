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
                <h4><i class="fa fa-angle-right"></i> List de Post </h4>
                <button style="position:righth ;"><a href="/admin/addpost">add post</a></button>
                <hr>
              
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Title</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> content</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> image</th>
                   
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                  <tr>
                    <td>
                    
{{$post['title']}}
                    </td>
                    <td class="hidden-phone"><article>{{$post['content']}}</article></td>
                    <td> <img src="{{ asset('storage/'.$post['picture']) }}" alt="Image de couverture" style="max-width: 70px;"></td>
                    <td>
                    
                    <form action="{{  url('/admin/posts', $post['id']) }}" method="POST">
                          @csrf 
                          @method('delete')
                          <button type="submit" class="btn btn-primary ">delete</button>
                      </form>
                   
                      </td>
                      <td>
                        <button class="btn btn-info"><a href="{{ url('admin/edit', $post) }}"  >Modifier</a></button>
                    </td>      
                        
                    <!-----      btn 2
                        <div class="btn-group">
                     <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit-modal">
                   <i class="fa fa-edit"></I>
                    </button>
                 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#delete-modal">
                       <i class="fa fa-trash"></i>
                   </button>
                   </div>
                   ----->

                              
                 
                  
                    </td>
                  </tr>
                  
                </tbody>
                
               @endforeach
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>


       




<!------ start modal --->
@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>

$(document).ready(function () {

$.ajaxSetup({
    headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});

$('body').on('click', '#submit', function (event) {
    event.preventDefault()
    var id = $("#color_id").val();
    var name = $("#name").val();
   
    $.ajax({
      url: 'color/' + id,
      type: "POST",
      data: {
        id: id,
        name: name,
      },
      dataType: 'json',
      success: function (data) {
          
          $('#companydata').trigger("reset");
          $('#practice_modal').modal('hide');
          window.location.reload(true);
      }
  });
});

$('body').on('click', '#editCompany', function (event) {

    event.preventDefault();
    var id = $(this).data('id');
    console.log(id)
    $.get('color/' + id + '/edit', function (data) {
         $('#userCrudModal').html("Edit category");
         $('#submit').val("Edit category");
         $('#practice_modal').modal('show');
         $('#color_id').val(data.data.id);
         $('#name').val(data.data.name);
     })
});

}); 
</script>
@endpush 


<!------ end modal --->   
        
   @endsection
  
</body>
</html>