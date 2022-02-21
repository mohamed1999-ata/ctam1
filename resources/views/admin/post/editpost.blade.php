@extends('admin.index')

@section('contentt')
<div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> ajouter un post</h4>
            <div class="form-panel">
              <div class=" form">
@if (isset($post))
<form method="POST" action="{{ route('posts.update', $post) }}" class="cmxform form-horizontal style-form" enctype="multipart/form-data" >
	@method('PUT')
@else
<form method="POST" action="{{ route('posts.store') }}"  class="cmxform form-horizontal style-form" enctype="multipart/form-data" >
@endif
                @csrf 
                <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Title en arabe </label>
                    <div class="col-lg-5">
                      <input class=" form-control" id="cname" name="title_ar" type="text" value="{{ isset($post->title_ar) ? $post->title_ar : old('title_ar') }}"  />
                    </div>
                  </div>
                  @error("title_ar")
                  <div>{{ $message }}</div>
                  @enderror
                  <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Title en englais </label>
                    <div class="col-lg-5">
                      <input class=" form-control" id="cname" name="title_en" type="text" value="{{ isset($post->title_en) ? $post->title_en : old('title_en') }}"  />
                    </div>
                  </div>

             <!-- Le message d'erreur pour "title" -->
                @error("title_en")
               <div>{{ $message }}</div>
                 @enderror

	    
         <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">content en arabe </label>
                    <div class="col-lg-5">
                      <textarea class="form-control " id="cemail" type="text" name="content_ar" required >{{ isset($post->content_ar) ? $post->content_ar : old('content_ar') }}</textarea>
                    </div>
         </div>
        <!-- Le message d'erreur pour "content" -->
        @error("content_ar")
        <div>{{ $message }}</div>
        @enderror
    
    <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">content en englais </label>
                    <div class="col-lg-5">
                      <textarea class="form-control " id="cemail" type="text" name="content_en"  >{{ isset($post->content_en) ? $post->content_en : old('content_en') }}</textarea>
                    </div>
     </div>
        <!-- Le message d'erreur pour "content" -->
        @error("content_en")
        <div>{{ $message }}</div>
        @enderror

		@if(isset($post->picture))
		<p>
			<span>Couverture actuelle</span><br/>
			<img src="{{ asset('storage/'.$post->picture) }}" alt="image de couverture actuelle" style="max-height: 200px;" >
		</p>
		@endif
                 <label for="picture" >Couverture</label><br/>
                 <input type="file" name="picture" id="picture" >

        <!-- Le message d'erreur pour "picture" -->
             @error("picture")
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

			

