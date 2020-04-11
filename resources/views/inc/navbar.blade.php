<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    
    </ul>
    <ul class="nav navbar-nav">
      <li >
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li>
        <a class="nav-link" href="/about">About</a>
      </li>
      <li>
        <a class="nav-link" href="/services" >Services</a>
      </li>

      <li>
        <a class="nav-link" href="/posts" >Blogs</a>
      </li>
     
        
      </li>
    </ul>
    {{-- <ul class="nav navbar-nav navbar-right">
      <li><a href="/posts/create">Created Post</a></li>
    </ul> --}}
    <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
      @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <li><a href="/dashboard">Dashboard</a></li>
                
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                     
                                   document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                      
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </ul>
          </li>
      @endguest
  </ul>
    
  </div>
</nav>


   <main class="py-4">
  </main>
  
{{-- 
  <nav class="navbar navbar-inverse" >
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
      </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
              &nbsp;

            </ul>
            <ul class="nav navbar-nav">
              <li >
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li>
                <a class="nav-link" href="/about">About</a>
              </li>
              <li>
                <a class="nav-link" href="/services" >Services</a>
              </li>
      
              <li>
                <a class="nav-link" href="/posts" >Blogs</a>
              </li>
             
                
              </li>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> --}} 


<main class="py-4">
</main>