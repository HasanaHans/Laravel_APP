<!DOCTYPE html>
<html>
  <head>
    <title>{{$title}}</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" />
    
  </head>
  <body>
    <nav>
      <ul>
        <form method="GET" action="{{ route('halwa.search') }}" class="search-form">
          <input type="text" name="query" placeholder="Search..." value="{{ old('query') }}" required />
          <button type="GO">Search</button>
        </form>
        <li><a href="/halwa" class="nav-button">Home</a></li>
        <li><a href="/halwa/create" class="nav-button">Add a new item</a></li>
        <li><a href="/halwa/about" class="nav-button">About Us</a></li>
      </ul>
    </nav>
    {{$slot}}
  </body>
</html>
