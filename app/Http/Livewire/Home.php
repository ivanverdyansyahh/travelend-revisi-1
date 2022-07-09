<?php

namespace App\Http\Livewire;

use App\Models\Destination;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $popular_destinations = Destination::getPopularDestinationReview();
        $tour_gallery = Destination::where('status', 1)->where('thumbnail_img', '!=', 'null')->inRandomOrder()->limit(6)->get();

        return view('livewire.home', compact('popular_destinations', 'tour_gallery'));
    }
}
