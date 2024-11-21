<x-layout title="Edit Item">
    <h1>Edit the Item</h1>

    <div class="form-container">
        <form method="POST" action="/halwa/{{ $halwa->id }}">
            @csrf
            @method('PATCH')

            <div>
                <label for="Product">Name:</label>
                <input type="text" id="Product" name="Product" value="{{ old('Product', $halwa->Product) }}" />
                @error('Product')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="Description">Description:</label>
                <input type="text" id="Description" name="Description" value="{{ old('Description', $halwa->Description) }}" />
                @error('Description')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="Price">Price:</label>
                <input type="number" id="Price" name="Price" step="0.01" value="{{ old('Price', $halwa->Price) }}" />
                @error('Price')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</x-layout>

