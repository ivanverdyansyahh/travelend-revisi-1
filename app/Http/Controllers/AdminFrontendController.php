<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use App\Models\Order;
use App\Models\Review;
use Illuminate\Http\Request;

class AdminFrontendController extends Controller
{
    public function dashboardView()
    {
        $get_week = \Carbon\Carbon::today()->subDays(7);
        $get_month = \Carbon\Carbon::today()->subDays(30);

        $title = 'Dashboard';
        $latest_orders = Order::latest()->with('destination')->limit(2)->get();
        $orders_count = Order::where('created_at', '>=', $get_week)->count();
        $income_orders = Order::where('created_at', '>=', $get_month)->get();

        $income_total = 0;
        foreach($income_orders as $item) {
            $income_total += $item->total_price;
        }
        
        return view('admin.pages.dashboard', compact('title', 'latest_orders', 'orders_count', 'income_total'));
    }

    public function destinationsView()
    {
        $destinations = Destination::getDestinationsReview();

        $categories = Category::all();
        
        $title = 'Destinations';
        return view('admin.pages.destinations', compact('destinations', 'categories', 'title'));
    }

    public function categoriesView()
    {
        $categories = Category::latest()->with('destinations')->get();
        $title = 'Categories';
        return view('admin.pages.categories', compact('categories', 'title'));
    }

    public function ordersView()
    {
        $orders = Order::latest()->get();
        $title = 'Orders';
        return view('admin.pages.orders', compact('title', 'orders'));
    }
}
