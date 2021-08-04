<?php

namespace App\Http\Controllers;

use App\ApplyAuction;
use App\Auction;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index()
    {
        $auctions = Auction::all();
       $apply = ApplyAuction::all();

        return view('admin.auction.index', compact('auctions', 'apply'));
    }

    public function create()
    {
        return view('admin.auction.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'car_id' => 'required',
            'start' => 'required',
            'end' => 'required',
        ]);
        Auction::create([
            'car_id' => $request->car_id,
            'start' => $request->start,
            'end' => $request->end,
        ]);
        return back()->with('success', 'added successfully');
    }

    public function destroy(Auction $auction)
    {
        $auction->delete();
        return back()->with('success', 'deleted successfully');
    }

}
