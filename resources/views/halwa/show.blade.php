<x-layout title="Show the details for a Halwa item">
<h1>{{$halwa->Product}}</h1>
    <p class="show-page-description">Description: {{$halwa->Description}}</p>
    
    <p class="show-page-price">Price: £{{$halwa->Price}}</p>

    <div class="action-buttons">
    @can('edit')
        <a href="/halwa/{{$halwa->id}}/edit" class="edit-button-link">
            <button class="edit-btn">Edit</button>
        </a>
        <form method="POST" action="/halwa/{{$halwa->id}}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
        </form>
    </div>
    @endcan
</x-layout>

