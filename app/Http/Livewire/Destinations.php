<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Destination;
use Livewire\Component;

class Destinations extends Component
{
    public $perPage = 6;

    public function loadMore()
    {
        $this->perPage += 6;    
    }

    public function render()
    {
        $getDestinationActive = Destination::where('status', 1);

        // $destinations = $getDestinationActive->latest()->filter(request(['search', 'category']))->with('category')->paginate(12);
        $destinations = Destination::getDestinationsReviewWithPaginate(request('category'), request('search'), $this->perPage);
        $categories = Category::all();
        
        $isAllLoaded = ($this->perPage > $getDestinationActive->count() || $getDestinationActive->count() <= 6) ?? true;

        return view('livewire.destinations', compact('destinations', 'categories', 'isAllLoaded'));
    }
}
