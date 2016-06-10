<nav class="navbar navbar-inverse" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand nav-font" href="/">Lexbook</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <!-- @if (Auth::check()) -->
          <ul class="nav navbar-nav">
            <li><a href="#">Timeline</a></li>
            <li><a href="#">Friends</a></li>
          </ul>
          <div class="col-sm-3 col-md-3">
              <form class="navbar-form" role="search" action="{{ route('search') }}">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Find a friend" name="query">
                    <div class="input-group-btn">
                        <button class="btn btn-raised btn-info" type="submit">Search</button>
                    </div>
                </div>
              </form>
          </div>
      <!-- @endif -->
      <ul class="nav navbar-nav navbar-right">
        <!-- @if (Auth::check()) -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">User<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="{{ route('profile', ['username' => Auth::user()->username])}}">My Profile</a></li>
              <li><a href="#">Update Profile</a></li>
              <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
          </li>
        <!-- @else -->
            <li><a href="{{ route('signup') }}">Register</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
        <!-- @endif -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.End of container -->
</nav>
