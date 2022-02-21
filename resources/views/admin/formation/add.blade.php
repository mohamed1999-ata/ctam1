@extends('admin.index')


@section('contentt')

<div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i> ajouter un formation</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="POST" action="{{ route('formations.store') }}" enctype="multipart/form-data">
                @csrf 
                <div class="form-group ">
                    <label for="cname" class="control-label col-lg-2">Title </label>
                    <div class="col-lg-5">
                      <input class=" form-control" id="cname" name="title" minlength="2" type="text" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="cemail" class="control-label col-lg-2">Descreption </label>
                    <div class="col-lg-5">
                      <textarea class="form-control " id="cemail" type="text" name="descreption" required ></textarea>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">date_debut </label>
                    <div class="col-lg-3">
                      <input class=" form-control" id="curl" type="date" name="date_debut" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="curl" class="control-label col-lg-2">date_fin </label>
                    <div class="col-lg-3">
                      <input class=" form-control" id="curl" type="date" name="date_fin" />
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
