<nav class="navbar navbar-inverse" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">Artisan Sensation</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      {{-- Active and inactive link when visited --}}
      <li class="{{ Request::is('posts') ? 'active' : '' }}"><a href="/">Blog</a></li>
      <li class="{{ Request::is('about') ? 'active': '' }}"><a href="{{ url() }}/about">About</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Find anything here ...">
        </div>
        <button type="submit" class="btn btn-danger">Search</button>
      </form>
      {{-- Dropdown control panel when user login --}}
      @unless ( !\Auth::user())
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          {{-- Show full name user --}}
          {{ \Auth::user()->name }} <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Articles</a></li>
          <li><a href="#">Manage Account</a></li>
          <li><a href="{{ url() }}/auth/logout">Logout</a></li>
        </ul>
      </li>
      @endunless
    </ul>
  </div>
</nav>