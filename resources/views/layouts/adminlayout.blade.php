<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>{{ config('app.name', 'Dashboard') }}</title>

  <!-- Bootstrap -->
  <link href="{{ asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('public/assets/fonts/font.css')}}">
  <link rel="stylesheet" href="{{ asset('public/assets/fonts/font-awesome.min.css')}}">


</head>

<body>

  <header class="site-header">
    <div class="hearderlogo">
      <figure class="logo-2">
        <a href="{{ URL::to('/admin/dashboard')}}">
          <img src="{{ asset('public/assets/images/hydration_logo_2.png')}}" alt="headerlogo">
        </a>
      </figure>
    </div>
    <!-- Single button -->
    <div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        @if(Auth::user()->profile_image !='')
        <img src="{{ URL::to('/public/uploads')}}/{{ Auth::user()->profile_image }}" alt="Profile" style="height:50px;width:50px; border-radius: 85px;"><span class="caret">
          @else
          <img src="{{ URL::to('/public/uploads/download.png')}}" alt="Profile" style="height:50px;width:50px; border-radius: 85px;"><span class="caret"></span>
          @endif
      </button>
      <ul class="dropdown-menu">
        <li>
          <a href="{{url('/admin/my-account')}}">My Account</a>
        </li>

        <li>
          <a href="{{url('/logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Logout</a>
          <form action="{{url('/logout')}}" id="logout-form" method="post">
            @csrf
          </form>
        </li>
      </ul>
    </div>
    <div class="clearFix">

    </div>
  </header>
  <section class="mid-section">
    <aside class="sidebar">
      <ul>
        <li><a href="{{ URL::to('/admin/dashboard')}}">Dashboard</a></li>
        <li><a href="{{ URL::to('/admin/users')}}">Users</a></li>
        <li><a href="{{ URL::to('/admin/waterdirnk')}}">Water Drink</a></li>
        <div class="Master-list">
          <label>Master List</label>
        </div>
        <li><a href="{{ URL::to('/admin/brands')}}">Brands</a></li>
        <li><a href="{{ URL::to('/admin/type')}}">Type</a></li>
        <li><a href="{{ URL::to('/admin/volume')}}">Volume</a></li>
        <li><a href="{{ URL::to('/admin/minerals')}}">Minerals</a></li>
      </ul>

    </aside>





    @yield('content')

    <div class="clearFix">

    </div>
  </section>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('public/assets/js/bootstrap.min.js')}}"></script>
  <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
  <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</body>

</html>