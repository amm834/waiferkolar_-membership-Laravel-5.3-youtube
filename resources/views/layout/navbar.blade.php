<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>
        @if(Auth::check())
        @if(Auth::user()->hasRole('Manager'))
        <li class="nav-item">
          <a class="nav-link" href="{{url('admin')}}">Dashboard</a>
        </li>
        @endif
        @endif
        <!-- PostCreate -->
        @if(Auth::check())
        @if(Auth::user()->hasRole('Manager') || Auth::user()->hasRole('PostCreator'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
            Tasks
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{route('create-post')}}">Create Post</a></li>
          </ul>
        </li>
        @endif
        @endif
        <!-- Post End -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @if(Auth::check())
            <li><a class="dropdown-item" href="{{url('users/logout')}}">Logout</a></li>
            @else
      <li><a class="dropdown-item" href="{{url('users/register')}}">Register</a></li>
            <li><a class="dropdown-item" href="{{url('users/login')}}">Login</a></li>
            @endif
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>