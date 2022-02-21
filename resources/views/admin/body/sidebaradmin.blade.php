
<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
         
          <li class="mt">
            <a class="active" href="/admin">
              <i class="fa fa-dashboard"></i>
              
              <span>{{__('messages.dash')}}</span>
              </a>
          </li>
          <!-- profil -->
          
            <h5 class="centered">
            @guest
            @if (Route::has('login'))
            
            
             @endif
             @else
             <p class="centered">
            <a href="admin/profil">
              <img src="{{ asset('Auth::user()->photo') }}" class="img-circle" width="80"></a>
            </p>
            {{ Auth::user()->name }} <br>
              en ligne 
            @endguest
            </h5>
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li class="nav-item active">
                    <a class="nav-link"
                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> {{ $properties['native'] }}
                        <span class="sr-only">(current)</span></a>
                </li>
         @endforeach
         <li class="sub-menu">
          <a href="users">
              <i class="fa fa-user"></i>
              <span> {{__('messages.users')}}</span>
              </a>
              <ul class="sub" >
              <li><a href="/admin/users">user list</a></li>
              <li><a href="{{ route('users.create') }}">add user</a></li>
          
              </ul>
            
          </li>
          <li class="sub-menu">
          <a href="/admin/contacts">
              <i class="fa fa-envelope"></i>
              <span>{{__('messages.contacts')}}</span>
              </a>
            
          </li>
        
          <li class="sub-menu">
            <a href="/posts">
              <i class="fa fa-book"></i>
              <span> {{__('messages.article')}}</span>
              </a>
              <ul class="sub" >
              <li><a href="/admin/posts">post list</a></li>
              <li><a href="/admin/addpost">add new post</a></li>
          
              </ul>
            
          </li>
          <li class="sub-menu">
            <a href="/formations">
              <i class="fa fa-gavel"></i>
              <span>{{__('messages.formation')}}</span>
              </a>
              <ul class="sub" >
              <li><a href="{{url('admin/formations')}}">formation list</a></li>
              <li><a href="/admin/addformation">add formation</a></li>
          
              </ul>
          </li>
         
          <li class="sub-menu">
            <a href="{{url('admin/inscreptions')}}">
              <i class="fa fa-tasks"></i>
              <span>{{__('messages.liste_inscription')}}</span>
             
              </a>
              
          </li>
   @can('role-list')

          <li class="sub-menu">
            <a href="roles">
              <i class="fa fa-tasks"></i>
              <span>{{__('messages.control')}}</span>
              </a>
              <ul class="sub" >
              <li><a href="{{ url('admin/roles') }}">role list</a></li>
              <li><a href="{{ route('roles.create') }}">add  Role</a></li>
          
              </ul>
          </li>
       @endif  
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
   