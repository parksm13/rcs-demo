<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Retail Convenience Solutions</a>
    </div>
     <!-- Authentication Links -->
     @guest
      <div></div>
     @else
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
        <li><a href="{{route('store')}}"><i class="fa fa-building-o" aria-hidden="true"></i> Store</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-list-alt" aria-hidden="true"></i> List<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li><a href="#settings"><i class="fa fa-cogs" aria-hidden="true"></i> Setting</a></li>
      </ul>
      @endguest
       <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @guest
                <li><a href="{{ route('login') }}"><i class="fa fa-key" aria-hidden="true"></i> Login</a></li>
                <li><a href="{{ route('register') }}"> <i class="fa fa-user" aria-hidden="true"></i> Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
