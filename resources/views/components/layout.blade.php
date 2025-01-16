<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$title}}</title>
  <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" />
</head>
<body>
@auth
    <div>
        Logged in as {{Auth::user()->name}}
        <form method='POST' action='/logout'>
            @csrf
            <button type='submit'>Logout</button>
        </form>
    </div>
@endauth
  <nav>
    <ul class="nav-left">
      <li>
        <form method="GET" action="{{ route('halwa.search') }}" class="search-form">
          <input type="text" name="query" placeholder="Search..." value="{{ old('query') }}" required />
          <button type="submit">Search</button>
        </form>
      </li>
      <li class="desktop-header-wrapper">
        <div id="openIcon" class="menu-icon">
          <svg width="30px" viewBox="0 0 10 10" fill="none">
            <path d="M1 1h8M1 4h 8M1 7h8" stroke="#666" stroke-width="1" />
          </svg>
        </div>
        <div id="closeIcon" class="menu-icon hide">X</div>
      </li>
    </ul>

    <!-- Right-aligned navigation buttons -->
    <ul class="nav-right">
      <li><a href="/halwa" class="nav-button">Home</a></li>
      @can('edit')
      <li><a href="/halwa/create" class="nav-button">Add a new item</a></li>
      @endcan
      <li><a href="/halwa/about" class="nav-button">About Us</a></li>
      @guest
        <li><a href="/login">Sign in</a></li>
        <li><a href="/register">Sign Up</a></li>
      @endguest

    </ul>
  </nav>

  <!-- Mobile Navigation (hidden by default) -->
  <div class="mobile-nav hide">
    <ul>
      <li><a href="/halwa" class="nav-button">Home</a></li>
      @can('edit')
      <li><a href="/halwa/create" class="nav-button">Add a new item</a></li>
      @endcan
      <li><a href="/halwa/about" class="nav-button">About Us</a></li>
      @guest
        <li><a href="/login">Sign in</a></li>
        <li><a href="/register">Sign Up</a></li>
      @endguest

    </ul>
  </div>
  
  <main>
    {{$slot}}
  </main>

  <script>
    function toggleNav() {
      console.log("Menu toggled"); // Debugging statement

      const openIcon = document.getElementById('openIcon');
      const closeIcon = document.getElementById('closeIcon');
      const mobileNav = document.querySelector('.mobile-nav');

      openIcon.classList.toggle('hide');
      closeIcon.classList.toggle('hide');
      mobileNav.classList.toggle('hide');  // This will toggle the visibility of the mobile menu
    }

    document.getElementById('openIcon').onclick = toggleNav;
    document.getElementById('closeIcon').onclick = toggleNav;
  </script>
</body>
</html>
