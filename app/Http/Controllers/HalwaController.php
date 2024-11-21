<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Halwa
;
class HalwaController extends Controller
{
    function index()
    {
        $halwa = Halwa::all();
        return view('halwa.index',['Halwa' => $halwa]);
    }

    function create()
    {
        return view('halwa.create');
    }

    function about()
    {
        return view('halwa.about');
    }

    function store(Request $request)
    {
        $validatedData = $request->validate([
            'Product' => 'required|string|max:255',
            'Description' => 'required|string|max:1000',
            'Price' => 'required|numeric|min:0',
        ], [
            'Product.required' => 'The product name is required.',
            'Description.required' => 'A description is required.',
            'Price.required' => 'The price is required.',
            'Price.numeric' => 'The price must be a valid number.',
        ]);
        
        $halwa = new Halwa();
        $halwa->Product = $request->Product;
        $halwa->Description = $request->Description;
        $halwa->Price = $request->Price;
        $halwa->save();
        return redirect('/halwa')->with('success', 'Item added successfully!');
    }
    

        public function show($id)
    {
        $halwa = Halwa::findOrFail($id); 
        return view('halwa.show', ['halwa' => $halwa]);
    }

    public function edit($id)
    {
        $halwa = Halwa::find($id); 
        return view('halwa.edit', ['halwa' => $halwa]); 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Product' => 'required|string|max:255',
            'Description' => 'required|string',
            'Price' => 'required|numeric|min:0',
        ], [
            'Product.required' => 'The product name is required.',
            'Description.required' => 'A description is required.',
            'Price.required' => 'The price is required.',
            'Price.numeric' => 'The price must be a valid number.',
        ]);
        
        $halwa = Halwa::find($id); 
        $halwa->Product = $request->Product;
        $halwa->Description = $request->Description;
        $halwa->Price = $request->Price;
        $halwa->save(); 

        return redirect('/halwa')->with('success', 'Item updated successfully!'); 
    }

    public function destroy($id)
    {
        $halwa = Halwa::findOrFail($id);
        $halwa->delete();
        return redirect('/halwa')->with('success', 'Item deleted successfully!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        if (empty($query)) {
            return redirect('/halwa')->with('error', 'Please enter a search term.');
        }
    
        $results = Halwa::where('Product', 'LIKE', "%{$query}%")->get();
        
        return view('halwa.search-results', ['results' => $results, 'query' => $query]);
    }
    

}
