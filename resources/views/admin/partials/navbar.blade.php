<ul class="nav navbar-nav">
  <li><a href="/blog">Blog Home</a></li>
  @if (Auth::check())
    <li @if (Request::is('admin/post*')) class="active" @endif>
      <a href="{{url('/admin/post')}}">Posts</a>
    </li>
    <li @if (Request::is('admin/tag*')) class="active" @endif>
      <a href="{{url('/admin/tag')}}">Tags</a>
    </li>
    <li @if (Request::is('admin/upload*')) class="active" @endif>
      <a href="{{url('/admin/upload')}}">Uploads</a>
    </li>
  @endif
</ul>

<ul class="nav navbar-nav navbar-right">
  @if (Auth::guest())
    <li><a href="{{URL('/auth/login')}}">Login</a></li>
  @else
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
         aria-expanded="false"><i class="fa fa-user"></i> {{ Auth::user()->name }}
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="{{url('/auth/logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
      </ul>
    </li>
  @endif
</ul>
