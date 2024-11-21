<x-layout title="All menu items">
<div class="menu-items-container">
  <h1>Breakfast Menu</h1>

  @foreach ($Halwa as $halwa)
      <div class="menu-item">
          <a href="/halwa/{{$halwa->id}}">{{$halwa->Product}}</a>
          <span class="price">£{{$halwa->Price}}</span> 
          <p>{{$halwa->Description}}</p>
      </div>
  @endforeach
</div>

</x-layout>

