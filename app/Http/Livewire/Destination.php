<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Destination as ModelsDestination;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Destination extends Component
{
    public $category_slug;
    public $destination_slug;

    public function mount($category_slug, $destination_slug)
    {
        $this->category_slug = $category_slug;
        $this->destination_slug = $destination_slug;
    }

    public function render()
    {
        $find_category = Category::where('slug', $this->category_slug);
        $find_destination = ModelsDestination::where('slug', $this->destination_slug);        
        
        $ratings = Review::where('destination_id', $find_destination->first()->id)->get();
        $rating_sum = Review::where('destination_id', $find_destination->first()->id)->sum('rating');
        // $user_review = Review::latest()->where('destination_id', $find_destination->id)->get();
        // $review = Review::where('user_id', Auth::id())->where('destination_id', $find_destination->id)->first();        

        if ($ratings->count() > 0) {
            $rating_value = $rating_sum / $ratings->count();
        } else {
            $rating_value = 0.0;
        }


        if($find_category->exists()) {
            if($find_destination->exists()) {
                $destination = ModelsDestination::where('slug', $this->destination_slug)->with('category')->first();
                $others = ModelsDestination::getOtherDestinationReview($find_destination->first());
            }
        }                   

        return view('livewire.destination', compact('destination', 'others', 'ratings', 'rating_value'));
    }
}
