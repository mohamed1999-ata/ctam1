
<header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="admin" class="logo"><b>{{__('messages.interface')}}<span>{{__('messages.admin')}}</span></b></a>
      <!--logo end-->
      
      <div class="top-menu">
     

      @guest
            @if (Route::has('login'))
             
             @endif
             @else
             <ul class="nav pull-right top-menu">
                <li> <a class="btn btn-info" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       {{__('messages.logout')}}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
                                  
             </ul>
           
            @endguest
            <ul class="nav pull-right top-menu">
                <li> <a class="btn btn-info" href="{{ url('/') }}">
                {{__('messages.home')}}
                                    </a>
                                  
             </ul>
       
      </div>
    </header>
  