@extends('admin.index')


@section('contentt')

<div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> edit post</h4>
            <div class="form-panel">
              
         @if (isset($formation))
         <div class=" form">
              <form method="POST" action="{{ route('formations.update', $formation) }}"  class="cmxform form-horizontal style-form" enctype="multipart/form-data" >
	      @method('PUT')
          @else
          <div class=" form">
               <form method="POST" action="{{ route('formations.store') }}"   class="cmxform form-horizontal style-form" enctype="multipart/form-data" >
          @endif
                @csrf 
                <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Title </label>
                    <div class="col-lg-5">
                      <input class=" form-control" id="cname" name="title" value="{{ isset($formation->title) ? $formation->title : old('title') }}" />
                    </div>
                  </div>
              
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Descreption </label>
                    <div class="col-lg-5">
                      <textarea class="form-control " id="cemail" type="text" name="descreption" > {{ isset($formation->descreption) ? $formation->descreption : old('descreption') }}</textarea>
                    </div>
                  </div>
                
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">date_debut </label>
                    <div class="col-lg-3">
                      <input class=" form-control" id="curl" type="date" name="date_debut"  value="{{ isset($formation->date_debut) ? $formation->date_debut : old('date_debut') }}"/>
                    </div>
                  </div>
             
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">date_fin </label>
                    <div class="col-lg-3">
                      <input class=" form-control" id="curl" type="date" name="date_fin"  value="{{ isset($formation->date_fin) ? $formation->date_fin : old('date_fin') }}"/>
                    </div>
                  </div>
               
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
