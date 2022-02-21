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
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> ajouter un post</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf 
                <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Title en arabe </label>
                    <div class="col-lg-5">
                      <input class=" form-control" id="cname" name="title_ar" type="text" value="{{ old('title_ar') }}"  />
                    </div>
                  </div>
                  @error("title_ar")
                  <div>{{ $message }}</div>
                  @enderror
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Title en englais </label>
                    <div class="col-lg-5">
                      <input class=" form-control" id="cname" name="title_en" type="text" value="{{ old('title_en') }}"  />
                    </div>
                  </div>

             <!-- Le message d'erreur pour "title" -->
                @error("title_en")
               <div>{{ $message }}</div>
                 @enderror


                 <label for="picture" >Couverture</label><br/>
                 <input type="file" name="picture" id="picture" >

        <!-- Le message d'erreur pour "picture" -->
             @error("picture")
             <div>{{ $message }}</div>
             @enderror
             <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">content en arabe </label>
                    <div class="col-lg-5">
                      <textarea class="form-control " id="cemail" type="text" name="content_ar" required >{{ old('content_ar') }}</textarea>
                    </div>
         </div>
        <!-- Le message d'erreur pour "content" -->
        @error("content_ar")
        <div>{{ $message }}</div>
        @enderror
    
    <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">content en englais </label>
                    <div class="col-lg-5">
                      <textarea class="form-control " id="cemail" type="text" name="content_en"  >{{ old('content_en') }}</textarea>
                    </div>
     </div>
        <!-- Le message d'erreur pour "content" -->
        @error("content_en")
        <div>{{ $message }}</div>
        @enderror
                 
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Save</button>
                      <button class="btn btn-theme04" type="button">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>

   @endsection
</body>
</html>




                   
