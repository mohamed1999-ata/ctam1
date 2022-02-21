<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"> <img style="heigth: 90px; width: 85px;" src="{{ asset('frontend/img/ctam.png')}}" alt=""></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">  <b> {{__('messages.home')}}</b>  </a>
                <a href="#about" class="nav-item nav-link"> <b> {{__('messages.about')}}</b></a>
                
                <a href="#service" class="nav-item nav-link"><b>{{__('messages.our service')}}</b></a>
                <a href="#article" class="nav-item nav-link"><b>{{__('messages.article')}}</b></a>
                <a href="/contact" class="nav-item nav-link"><b>{{__('messages.contact')}} </b></a>
                
                    <a href="/formation" class=" nav-item nav-link " > <b>{{__('messages.Formation')}}</b></a>
                
                    
             @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li class="nav-item active">
                    <a class="nav-link"
                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> {{ $properties['native'] }}
                        <span class="sr-only">(current)</span></a>
                </li>
            @endforeach

            @can('admin')
                        <a href="/admin" class=" nav-item nav-link " > <b>admin</b></a>
                 @endif
                   
                
                @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{__('messages.login')}}</a>
                                </li>
                            @endif

                         
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       {{__('messages.logout')}}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
            </div>
           
        </div>
    </nav>

    @yield('contact')