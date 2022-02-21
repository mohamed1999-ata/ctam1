@extends('admin.index')

@section('contentt')
 



<h1>{{__('messages.welcome')}} <br>{{ Auth::user()->name }} </h1>



        <div class="row mt">
              <!-- SERVER STATUS PANELS -->
              <div class="col-md-4 col-sm-4 mb">
                <div class="grey-panel pn donut-chart">
                  <div class="grey-header">
                    <h5>System Users</h5>
                    
                  </div>
                  <canvas id="serverstatus01" height="120" width="120">

                  
                  </canvas>
                  
                  <div class="row">
                      
                    <div class="col-sm-6 col-xs-6 goleft">
                        
                      <p>users  <i class="fa fa-user"></i><br/>number :</p>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                      <h2>{{\DB::table('users')->count()}}</h2>
                    </div>
                  </div>
                </div>
                <!-- /grey-panel -->
              </div>
	</div>







  
 


@endsection