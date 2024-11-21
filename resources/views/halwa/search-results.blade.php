<x-layout title="Search Results for '{{ $query }}'">
    <h1>Search Results for "{{ $query }}"</h1>

    @if(count($results) > 0)
        <ul>
            @foreach($results as $halwa)
                <div class="menu-items-container">
                <h1>Breakfast Menu</h1>
                    <div class="menu-item">
                        <a href="/halwa/{{$halwa->id}}">{{$halwa->Product}}</a>
                        <span class="price">£{{$halwa->Price}}</span> 
                        <p>{{$halwa->Description}}</p>
                    </div>
                </div>
            @endforeach
        </ul>
    @else
        <p>No results found for "{{ $query }}".</p>
    @endif
</x-layout>


